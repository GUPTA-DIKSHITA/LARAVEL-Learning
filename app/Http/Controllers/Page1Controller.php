<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pagestart;

class Page1Controller extends Controller
{
    public function index(){
        return view('page1');
    }

    public function register(Request $request){

        $login=session('uid');
        $request->validate(
            [
                'buttons1'=>'required',
                'buttons2'=>'required',
                'buttons3'=>'required',
                'buttons4'=>'required',
                'buttons5'=>'required',
                'buttons6'=>'required',
                'buttons7'=>'required',
                'buttons8'=>'required'
            ]
        );
        
        $page=new Pagestart;
        $page->customer_id=$login;
        $page->imp_ontime=$request->{'buttons1'};
        $page->imp_quality=$request->{'buttons2'};
        $page->sat_ontime=$request->{'buttons3'};
        $page->sat_quality=$request->{'buttons4'};
        $page->imp_operation=$request->{'buttons5'};
        $page->imp_invoice=$request->{'buttons6'};
        $page->sat_operation=$request->{'buttons7'};
        $page->sat_invoice=$request->{'buttons8'};
        $page->save();

        return redirect('/form/page2');
    }

    
}
