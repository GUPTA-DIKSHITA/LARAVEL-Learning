<?php

namespace App\Http\Controllers;

use App\Models\Pageeighth;
use Illuminate\Http\Request;

class PageeighthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('page8');
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
        $request->validate([
            
            'buttons1'=>'required',
            'buttons2'=>'required'
        ]);

        $page=new Pageeighth;
        $page->customer_id=$login;
        $page->rating1_client_satisfaction=$request->{'buttons1'};
        $page->rating2_client_satisfaction=$request->{'buttons2'};
        $page->description_improvement=$request->{'service3'};
        $page->description_delightful_incidents=$request->{'service4'};
        $page->others=$request->{'others'};
        $page->save();

        return redirect('/form/page9');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pageeighth  $pageeighth
     * @return \Illuminate\Http\Response
     */
    public function show(Pageeighth $pageeighth)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pageeighth  $pageeighth
     * @return \Illuminate\Http\Response
     */
    public function edit(Pageeighth $pageeighth)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pageeighth  $pageeighth
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pageeighth $pageeighth)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pageeighth  $pageeighth
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pageeighth $pageeighth)
    {
        //
    }
}
