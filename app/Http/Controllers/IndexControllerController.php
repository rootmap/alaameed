<?php

namespace App\Http\Controllers;

use App\IndexController;
use Illuminate\Http\Request;

class IndexControllerController extends Controller{
    public function index(){
        echo "ddd";
    }
    public function create(){
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\IndexController  $indexController
     * @return \Illuminate\Http\Response
     */
    public function show(IndexController $indexController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\IndexController  $indexController
     * @return \Illuminate\Http\Response
     */
    public function edit(IndexController $indexController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\IndexController  $indexController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, IndexController $indexController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\IndexController  $indexController
     * @return \Illuminate\Http\Response
     */
    public function destroy(IndexController $indexController)
    {
        //
    }
}
