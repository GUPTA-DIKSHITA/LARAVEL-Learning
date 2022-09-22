<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\View;

class FormController extends Controller
{
    
    public function index(){
        return view('createform');
    }

    public function register(Request $request){

        $validated=$request->validate(
            ['organization'=>'required',
            'projectname'=>'required',
            'personname'=>'required',
            'email'=>'required|unique:forms',
            'MobileNumber'=>'required|min:10|max:10'
            ]
        );

        $form=new View;
        $form->organization_name=$request->{'organization'};
        $form->project_name=$request->{'projectname'};
        $form->person_name=$request->{'personname'};
        $form->email=$request->{'email'};
        $form->phone_number=$request->{'MobileNumber'};
        $form->save();

        session(['uid'=>$form->customer_id]);

        return redirect('/form/page1');
    }
}
