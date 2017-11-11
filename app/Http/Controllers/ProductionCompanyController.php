<?php

namespace App\Http\Controllers;

use App\production_company;
use Illuminate\Http\Request;

class ProductionCompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('production_company.index', ['production_companies' => production_company::all()]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\production_company  $production_company
     * @return \Illuminate\Http\Response
     */
    public function show(production_company $production_company)
    {
      return view('production_company.show', ['production_company' => $production_company]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\production_company  $production_company
     * @return \Illuminate\Http\Response
     */
    public function edit(production_company $production_company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\production_company  $production_company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, production_company $production_company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\production_company  $production_company
     * @return \Illuminate\Http\Response
     */
    public function destroy(production_company $production_company)
    {
        //
    }
}
