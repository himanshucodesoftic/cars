<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('add_car');
    }

     public function createcars(Request $request)
     {
        $name = $request->input('name');
        $image = $request->file('image');
        $description = $request->input('description');
        $model = $request->input('model');
        $price = $request->input('price');
        $sittingtype = $request->input('sittingtype');
        $Gerabox = $request->input('GearBox');
        $year = $request->input('year');

        error_log("--->>" . $image->getClientOriginalExtension() . public_path() . $image->getClientOriginalName());
        $src_file_logo = date('YmdHis') . $image->getClientOriginalName();
        $dest_file_logo = public_path() . "/Images/";
        $image->move(public_path() . "/Images/", $src_file_logo);
        $image = "/public/Images/" . $src_file_logo;

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
}

