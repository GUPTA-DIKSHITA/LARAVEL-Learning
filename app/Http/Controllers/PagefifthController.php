<?php

namespace App\Http\Controllers;

use App\Models\Pagefifth;
use Illuminate\Http\Request;

class PagefifthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('page5');
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
            'buttons2'=>'required',
            'buttons3'=>'required',
            'buttons4'=>'required',
            'buttons5'=>'required',
            'buttons6'=>'required'
        ]);

        $page=new Pagefifth;
        $page->customer_id=$login;
        $page->imp_oper_reports=$request->{'buttons1'};
        $page->imp_invoices=$request->{'buttons2'};
        $page->sat_oper_reports=$request->{'buttons3'};
        $page->sat_invoices=$request->{'buttons4'};
        $page->imp_change_management=$request->{'buttons5'};
        $page->sat_change_management=$request->{'buttons6'};
        $page->others=$request->{'others'};
        $page->save();

        return redirect('/form/page6');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pagefifth  $pagefifth
     * @return \Illuminate\Http\Response
     */
    public function show(Pagefifth $pagefifth)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pagefifth  $pagefifth
     * @return \Illuminate\Http\Response
     */
    public function edit(Pagefifth $pagefifth)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pagefifth  $pagefifth
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pagefifth $pagefifth)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pagefifth  $pagefifth
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pagefifth $pagefifth)
    {
        //
    }
}
