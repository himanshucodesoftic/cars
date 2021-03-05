<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\admin;
use DB as DBraw;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Defines\SecurityDefines;
use App\Utils\GeneralUtils;

class DashboardController extends Controller
{
    public function dashboard(Request $request)
    {
         if (!$request->session()->has('ssiapp_adm_id')) {
             return \redirect('/page-login')->withErrors(['error_reason'=>'Session Don\'t exist']);
         }

    return view('dashboard');    
    }

    public function AddCarHere(Request $request)
    {
        if (!$request->session()->has('ssiapp_adm_id')) {
            return \redirect('/page-login')->withErrors(['error_reason'=>'Session Don\'t exist']);
        }
        return view('add_car');
    }

     public function createcars(Request $request)
     {
        $name = $request->input('name');

        // $image = $request->file('image');
      
        $description = $request->input('description');
        $model = $request->input('model');
        $price = $request->input('price');
        $sittingtype = $request->input('sittingtype');
        $Gerabox = $request->input('GearBox');
        $year = $request->input('years');


        if($request->hasfile('image'))
        {

            foreach($request->file('image') as $image)
            {
$name=$image->getClientOriginalName();
$image->move(public_path().'/public/Images/',$name);
$data[]=$name;


            }
        }






        // error_log("--->>" . $image->getClientOriginalExtension() . public_path() . $image->getClientOriginalName());
        // $src_file_logo = date('YmdHis') . $image->getClientOriginalName();
        // $dest_file_logo = public_path() . "/Images/";
        // $image->move(public_path() . "/Images/", $src_file_logo);
        // $image = "/public/Images/" . $src_file_logo;

        // DB::beginTransaction();
        DB::beginTransaction();
        // $createdate = date("Y-m-d H:i:s");
        DB::table('cars')->insert([
            // DB::table('events')->insert([

            'name' => $name,

            'model' => $model,
            'description' => $description,
            'image' => $image,
            'price' => $price,

            'sittingtype' => $sittingtype,
    
            'Gerabox' => $Gerabox,

            'year' => $year,

        ]);
        $id = DB::getPdo()->lastInsertId();
        DB::commit();
        return \redirect('add_car');
 
     }
     
     public function carlist(Request $request )
     {

        $sel_query = "SELECT * from cars";
        $res_query = DBraw::select($sel_query);
        $res_query = json_decode(json_encode($res_query), true);
        if (count($res_query)) {
            foreach ($res_query as $res) {

                $productlist[] = array(
                    'id' => $res['id'],
                    'name' => $res['name'],
                    'model' => $res['model'],
                    'description' => $res['description'],
                    'price' => $res['price'],
                    'year' => $res['year'],
                    // 'p_create_date' => $tempdate,

                );
            }
        } else {
            $productlist = array();
        }
        return view('car_list', compact(['productlist']));
    }

public function edit_cars(Request $request,$id)
{

    return view('car_edit')->with('todoArr',Car::find($id));
       
}



    public function update_cars(Request $request, $id)
    {


        $res=new Car();
$res->name=$request->input('name');
$res->model=$request->input('model');
$res->price=$request->input('price');

$res->description=$request->input('description');
$res->image=$request->file('image');
$res->sittingtype=$request->input('sittingtype');
$res->Gerabox=$request->input('GearBox');

$res->year=$request->input('years');

$res->save();
$request->session()->flash('msg','data submites');

return redirect('/create_list');
       
    }



    public function destroy(Request $request,$id)
    {
        DB::delete('delete from cars where id = ?',[$id]);
  return redirect('/car_list');
    }

    



    
    public function change_password_detail(Request $request,$id)
    {
        try {

            $sel_query = "SELECT * from admins where admins.adm_id = " . $id;
            $res_query = DBraw::select($sel_query);
            $res_query = json_decode(json_encode($res_query), true);
            if (count($res_query)) {
                $res = $res_query[0];
              

                $jp_obj = array(
                    'adm_id' => $res['adm_id'],
                );
                // dd($jp_obj);
            } else {
                //  $csrlist = array();
                //errorView
            }

            // $cates = GeneralUtils::getDBCates();

            return view('change_password', compact(['jp_obj']));
        } catch (\Exception $ex) {
            dd($ex);
            error_log('exception' . $ex->getMessage());
        }
       
    }

    public function update_password(Request $request,$id)
    {
        
        $password = $request->input('password');


        DB::beginTransaction();

        try {
            DB::table('admins')->where('adm_id', $id)->update([
                'adm_pwd' => $password,


            ]);
            DB::commit();
            return \redirect('/dashboard');
        } catch (\Exception $ex) {
            DB::rollback();
            dd($ex);
            return \redirect('/error-page');
        }
    }
}
