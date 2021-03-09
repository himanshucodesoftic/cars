<?php

namespace App\Http\Controllers;
use App\Models\bookride;
use Illuminate\Http\Request;
use DB as DBraw;
class HomeController extends Controller
{
    public function Submitbookride(Request $request)
    {
        $res=new bookride();
        $res->name=$request->input('name');
        $res->email=$request->input('email');
        $res->save();
        return redirect('thankyou');

        Mail::to('humanshud950@gmail.com')->send(new SendMail($data));
        return back()->with('success', 'Thanks for contacting us!');
    }

public function new(Request $request)
{ 
    // dd($request);
    // dd($request);
    $sel_query = "SELECT * from cars";
 
    $res_query = DBraw::select($sel_query);
   
    $res_query = json_decode(json_encode($res_query), true);
   
    if (count($res_query)) {
        foreach ($res_query as $res) {
            $productlist[] = array(
                'id'=>$res['id'],
                'name' => $res['name'],
                'model' => $res['model'],
                'image' => $res['image'],
                'price' => $res['price'],

                'Gearbox' => $res['Gearbox'],

                'description' => $res['description'],

                'year' => $res['year'],



            );
         
        }
    } else {
        $productlist = array();
       
    }
    
// }
    return view('cars', compact(['productlist']));

}



public function indexshow(Request $request)
{ 
    // dd($request);
    // dd($request);
    $sel_query = "SELECT * from cars";
 
    $res_query = DBraw::select($sel_query);
   
    $res_query = json_decode(json_encode($res_query), true);
   
    if (count($res_query)) {
        foreach ($res_query as $res) {
            $productlist[] = array(
                'name' => $res['name'],
                'price' => $res['price'],
'model'=> $res['model'],
                'image' => $res['image'],

                'sittingtype' => $res['sittingtype'],

                'featureimage' => $res['featureimage'],
                // 'price' => $res[''],

                
            );
         
        }
    } else {
        $productlist = array();
       
    }

    
    
    return view('index', compact(['productlist']));

}

}