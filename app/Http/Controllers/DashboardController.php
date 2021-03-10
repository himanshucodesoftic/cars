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

    /**
     * dashboard page
     * 
     */
    public function dashboard(Request $request)
    {  
          if (!$request->session()->has('ssiapp_adm_id')) {
             return \redirect('/page-login')->withErrors(['error_reason'=>'Session Don\'t exist']);
         } 
          return view('dashboard');    
    }

/**
 * add car page
 */
    public function AddCarHere(Request $request)
    {
        if (!$request->session()->has('ssiapp_adm_id')) {
            return \redirect('/page-login')->withErrors(['error_reason'=>'Session Don\'t exist']);
        }
        return view('add_car');
    }
/**
 * create cars enter detail
 */

     public function createcars(Request $request)
     {
        $name = $request->input('name');
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
                error_log("--->>" . $image->getClientOriginalExtension() . public_path() . $image->getClientOriginalName());
                $src_file_logo = date('YmdHis') . $image->getClientOriginalName();
                $dest_file_logo = public_path() . "/Images/";
                $image->move(public_path() . "/Images/", $src_file_logo);
                $image = "/Images/" . $src_file_logo;
        }
    }

    
    
        DB::beginTransaction();
        DB::table('cars')->insert([

            'name' => $name,
            'model' => $model,
            'description' => $description,
            'image' => $image,
            'price' => $price,
            'sittingtype' => $sittingtype,
            'Gearbox' => $Gerabox,
            'year' => $year,
           
        ]);
        $id = DB::getPdo()->lastInsertId();
        DB::commit();
        return \redirect('add_car');
      }

      /**
       * list page
       */
     
     public function carlist(Request $request )
     {   if (!$request->session()->has('ssiapp_adm_id')) {
        return \redirect('/page-login')->withErrors(['error_reason'=>'Session Don\'t exist']);
    } 
         
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
                );
            }
        } else {
            $productlist = array();
        }
        return view('car_list', compact(['productlist']));
    }

    /**
     * edit page
     * 
     */
    public function edit_cars(Request $request,$id)
     {   if (!$request->session()->has('ssiapp_adm_id')) {
        return \redirect('/page-login')->withErrors(['error_reason'=>'Session Don\'t exist']);
    } 
      return view('car_edit')->with('todoArr',Car::find($id));
     }


/**
 * update car
 */
    public function update_cars(Request $request, $id)
    {
       
        $name = $request->input('name');
        $model = $request->input('model');
        $price = $request->input('price');
        $description = $request->input('description');
        $image = $request->file('image');
        $sittingtype = $request->input('sittingtype');
        $Gerabox = $request->input('GearBox');
        $years = $request->input('years');
        

        if($request->hasfile('image'))
        {
    foreach($request->file('image') as $image)
            {
        $new=$image->getClientOriginalName();
        $image->move(public_path().'/public/Images/',$new);
        $data[]=$new;
           }
        }
        DB::beginTransaction();
        try {
            DB::table('cars')->where('id', $id)->update([
                'name' => $name,
                'model' => $model,
                'description' => $description,
                'image' => $image,
                'price' => $price,
                'sittingtype' => $sittingtype,
                'Gearbox' => $Gerabox,
                'year' => $years,
            ]);
            DB::commit();
            return \redirect('/car_list');
        } catch (\Exception $ex) {
            DB::rollback();
            dd($ex);
            return \redirect('/error-page');
        }

    }


/**
 * delete  code for cars list
 */
    public function destroy(Request $request,$id)
    {
        DB::delete('delete from cars where id = ?',[$id]);
        return redirect('/car_list');
    }



/**
 * change password code
 */
    
    public function change_password_detail(Request $request,$id)
    {   if (!$request->session()->has('ssiapp_adm_id')) {
        return \redirect('/page-login')->withErrors(['error_reason'=>'Session Don\'t exist']);
    } 
        try {
            $sel_query = "SELECT * from admins where admins.adm_id = " . $id;
            $res_query = DBraw::select($sel_query);
            $res_query = json_decode(json_encode($res_query), true);
            if (count($res_query)) {
                $res = $res_query[0];
                 $jp_obj = array(
                    'adm_id' => $res['adm_id'],
                );
                 } else {
                 }
            return view('change_password', compact(['jp_obj']));
        } catch (\Exception $ex) {
            dd($ex);
            error_log('exception' . $ex->getMessage());
        }
       }

       /**
        * update password
        */
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


    public function bookrideslist(Request $request )
    {    if (!$request->session()->has('ssiapp_adm_id')) {
        return \redirect('/page-login')->withErrors(['error_reason'=>'Session Don\'t exist']);
    } 

    // $sel_query ="   SELECT w.name AS bookrides, w.id AS bookrides, w.email AS bookrides, m.name AS cars
    // FROM bookrides w, cars m;";
      $sel_query = "SELECT * from bookrides ORDER BY id DESC" ;
       $res_query = DBraw::select($sel_query);
       $res_query = json_decode(json_encode($res_query), true);
       if (count($res_query)) {
           foreach ($res_query as $res) {
               $productlist[] = array(
                   'id' => $res['id'],
                   'name' => $res['name'],
                   'email' => $res['email'],
                   'phone' => $res['phone'],
                   'address' => $res['address'],
                   'Duration' => $res['Duration'],
                   'CarName' => $res['CarName'],
               );
           }
       } else {
           $productlist = array();
       }
       return view('show_customer_rides', compact(['productlist']));
   }

}
