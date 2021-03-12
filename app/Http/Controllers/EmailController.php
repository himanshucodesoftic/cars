<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\email;

class EmailController extends Controller
{
    public function submitEmail(Request $request)
    {
        // dd($request);
        $res= new email();
        
        $res->email=$request->input('email');
        $res->save();
        return redirect('thankyou');
    }
}
