<?php

namespace App\Http\Controllers;

use App\Models\Adminlogin;
use App\Models\View;
use App\Models\Pagestart;
use App\Models\Pagesecond;
use App\Models\Pagethird;
use App\Models\Pagefourth;
use App\Models\Pagefifth;
use App\Models\Pagesixth;
use App\Models\Pageseventh;
use App\Models\Pageeighth;
use Illuminate\Http\Request;

class AdminloginController extends Controller
{
   
    public function index()
    {
        return view('adminlogin');
    }

    
    public function viewdata()
    {
        $data=View::all();
        return view('adminviewdata')->with('data', $data);
    }

    public function viewresponse(Request $request)
    {
        $start=Pagestart::find($request->customer_id);
        $second=Pagesecond::find($request->customer_id);
        $third=Pagethird::find($request->customer_id);
        $fourth=Pagefourth::find($request->customer_id);
        $fifth=Pagefifth::find($request->customer_id);
        $sixth=Pagesixth::find($request->customer_id);
        $seventh=Pageseventh::find($request->customer_id);
        $eighth=Pageeighth::find($request->customer_id);
        return view('adminviewresponse')->with('start', $start)->with('second', $second)->with('third', $third)->with('fourth', $fourth)->with('fifth', $fifth)->with('sixth', $sixth)->with('seventh', $seventh)->with('eighth', $eighth);
    }

    public function store(Request $request)
    {
        $request->validate([
            'admin_email'=>'required',
            'admin_password'=>'required'
        ]);

        $check=Adminlogin::where([
            ['admin_email','=', $request->admin_email],
            ['admin_password','=',$request->admin_password]
        ])->first();

        if($check){
            return redirect('/admin_view_data');
        }

        $request->session()->flash('msg_login','Enter correct e-mail/password');
        return redirect('/admin_login');
    }

    public function adminlogout(Request $request)
    {
        session()->flush();
        return redirect('/admin_login');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Adminlogin  $adminlogin
     * @return \Illuminate\Http\Response
     */
    public function show(Adminlogin $adminlogin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Adminlogin  $adminlogin
     * @return \Illuminate\Http\Response
     */
    public function edit(Adminlogin $adminlogin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Adminlogin  $adminlogin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Adminlogin $adminlogin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Adminlogin  $adminlogin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Adminlogin $adminlogin)
    {
        //
    }
}
