<?php

namespace App\Http\Controllers;

use App\Models\Pagesecond;
use Illuminate\Http\Request;

class PagesecondController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('page2');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $login=session('uid');
        $request->validate(
            [
                'buttons1'=>'required',
                'buttons2'=>'required',
                'buttons3'=>'required',
                'buttons4'=>'required'
            ]
        );
        
        $page=new Pagesecond;
        $page->customer_id=$login;
        $page->imp_responsiveness=$request->{'buttons1'};
        $page->sat_responsiveness=$request->{'buttons2'};
        $page->imp_ability=$request->{'buttons3'};
        $page->sat_ability=$request->{'buttons4'};
        $page->others=$request->{'others'};
        $page->save();
        
        return redirect('/form/page3');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pagesecond  $pagesecond
     * @return \Illuminate\Http\Response
     */
    public function edit(Pagesecond $pagesecond)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pagesecond  $pagesecond
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pagesecond $pagesecond)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pagesecond  $pagesecond
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pagesecond $pagesecond)
    {
        //
    }
}
