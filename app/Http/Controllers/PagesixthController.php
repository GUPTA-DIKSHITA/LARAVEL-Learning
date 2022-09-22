<?php

namespace App\Http\Controllers;

use App\Models\Pagesixth;
use Illuminate\Http\Request;

class PagesixthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('page6');
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

        
        $page=new Pagesixth;
        $page->customer_id=$login;
        $page->imp_valueadded_services=$request->{'buttons1'};
        $page->sat_valueadded_services=$request->{'buttons2'};
        $page->others=$request->{'others'};
        $page->save();

        return redirect('/form/page7');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pagesixth  $pagesixth
     * @return \Illuminate\Http\Response
     */
    public function show(Pagesixth $pagesixth)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pagesixth  $pagesixth
     * @return \Illuminate\Http\Response
     */
    public function edit(Pagesixth $pagesixth)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pagesixth  $pagesixth
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pagesixth $pagesixth)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pagesixth  $pagesixth
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pagesixth $pagesixth)
    {
        //
    }
}
