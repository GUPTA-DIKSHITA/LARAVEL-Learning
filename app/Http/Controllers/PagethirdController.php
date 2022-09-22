<?php

namespace App\Http\Controllers;

use App\Models\Pagethird;
use Illuminate\Http\Request;

class PagethirdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('page3');
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
                'buttons4'=>'required',
                'buttons5'=>'required',
                'buttons6'=>'required',
                'buttons7'=>'required',
                'buttons8'=>'required'
            ]
        );
        
        $page=new Pagethird;
        $page->customer_id=$login;
        $page->imp_enthusiasm_of_project=$request->{'buttons1'};
        $page->imp_quality_of_resources=$request->{'buttons2'};
        $page->imp_fexibilty_to_handle=$request->{'buttons3'};
        $page->imp_ontime_ramps=$request->{'buttons4'};
        $page->sat_enthusiasm_of_project=$request->{'buttons5'};
        $page->sat_quality_of_resources=$request->{'buttons6'};
        $page->sat_fexibilty_to_handle=$request->{'buttons7'};
        $page->sat_ontime_ramps=$request->{'buttons8'};
        $page->others=$request->{'others'};
        $page->save();

        return redirect('/form/page4');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pagethird  $pagethird
     * @return \Illuminate\Http\Response
     */
    public function show(Pagethird $pagethird)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pagethird  $pagethird
     * @return \Illuminate\Http\Response
     */
    public function edit(Pagethird $pagethird)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pagethird  $pagethird
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pagethird $pagethird)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pagethird  $pagethird
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pagethird $pagethird)
    {
        //
    }
}
