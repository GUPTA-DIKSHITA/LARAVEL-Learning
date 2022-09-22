<?php

namespace App\Http\Controllers;

use App\Models\Pagefourth;
use Illuminate\Http\Request;

class PagefourthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('page4');
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
                'buttons8'=>'required',
                'buttons9'=>'required',
                'buttons10'=>'required'
            ]
        );

        $page=new Pagefourth;
        $page->customer_id=$login;
        $page->imp_accessibile=$request->{'buttons1'};
        $page->sat_accessibile=$request->{'buttons2'};
        $page->imp_agent=$request->{'buttons3'};
        $page->imp_TL=$request->{'buttons4'};
        $page->imp_PM=$request->{'buttons5'};
        $page->imp_processowner=$request->{'buttons6'};
        $page->sat_agent=$request->{'buttons7'};
        $page->sat_TL=$request->{'buttons8'};
        $page->sat_PM=$request->{'buttons9'};
        $page->sat_processowner=$request->{'buttons10'};
        $page->others=$request->{'others'};
        $page->save();

        return redirect('/form/page5');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pagefourth  $pagefourth
     * @return \Illuminate\Http\Response
     */
    public function show(Pagefourth $pagefourth)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pagefourth  $pagefourth
     * @return \Illuminate\Http\Response
     */
    public function edit(Pagefourth $pagefourth)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pagefourth  $pagefourth
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pagefourth $pagefourth)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pagefourth  $pagefourth
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pagefourth $pagefourth)
    {
        //
    }
}
