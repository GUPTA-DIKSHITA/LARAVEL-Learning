<?php

namespace App\Http\Controllers;

use App\Models\Pageseventh;
use Illuminate\Http\Request;

class PageseventhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('page7');
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

          
        $page=new Pageseventh;
        $page->customer_id=$login;
        $page->rating1_recommendation=$request->{'buttons1'};
        $page->rating2_recommendation=$request->{'buttons2'};
        $page->others=$request->{'others'};
        $page->save();

        return redirect('/form/page8');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pageseventh  $pageseventh
     * @return \Illuminate\Http\Response
     */
    public function show(Pageseventh $pageseventh)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pageseventh  $pageseventh
     * @return \Illuminate\Http\Response
     */
    public function edit(Pageseventh $pageseventh)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pageseventh  $pageseventh
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pageseventh $pageseventh)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pageseventh  $pageseventh
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pageseventh $pageseventh)
    {
        //
    }
}
