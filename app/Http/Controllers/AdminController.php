<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use App\Defines\SecurityDefines;
use App\Utils\GeneralUtils;
use DB as DBraw;

class AdminController extends Controller
{


    public function adminlogin(Request $request) {
// dd($request);
        // if (!$request->session()->has('ssiapp_adm_id')) {
        //     return \redirect('/adminlogin')->withErrors(['error_reason'=>'Session Don\'t exist']);
        // }
        // error_log($request->session()->get('ssiapp_adm_token'));

        $data = $request->validate([
            'password' => 'required',
            'email' => 'required|email',
        ]);

        $email = $request->input('email');

        $passwd = $request->input('password');
       
        $sel_query = "SELECT * FROM admins where adm_pwd = '" . $passwd . "' AND adm_email = '" . $email . "';";
       
        $res_query = DBraw::select($sel_query);
        
        $res_query = json_decode(json_encode($res_query), true);
        if (count($res_query)) {
            $res = $res_query[0];

            // if ($role_type == 'admin') {
                $token = GeneralUtils::gen_adm_LoginToken();
              
                error_log($token);
                if (GeneralUtils::update_adm_Token($token, $res['adm_id'])) {
                   
                   // $request->session()->forget(['ssiapp_adm', 'ssiapp_adm_id', 'ssiapp_rec_token']);
                    $request->session()->put('ssiapp_adm', true);
                    
                    $request->session()->put('ssiapp_adm_id', $res['adm_id']);
                    $request->session()->put('ssiapp_adm_email', $res['adm_email']);
                    $request->session()->put('ssiapp_adm_name', $res['adm_name']);
                    $request->session()->put('ssiapp_adm_token', $token);
                    return \redirect('dashboard');
                  
                }   
        }
        $request->session()->flash('msg','wrong email password');
        return redirect('page-login');
       
    }

    public function adminlogout(Request $request)
    {
      
        if ($request->session()->has('ssiapp_adm')) {
            $request->session()->forget(['ssiapp_adm', 'ssiapp_adm_id', 'ssiapp_adm_token']);
        } 

        return \redirect('/page-login');
    }

  
   

 
  

}
