<?php

namespace App\Http\Controllers;

use App\Models\Districts;
use App\Http\Requests\StoreDistrictsRequest;
use App\Http\Requests\UpdateDistrictsRequest;

class DistrictsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreDistrictsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDistrictsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Districts  $districts
     * @return \Illuminate\Http\Response
     */
    public function show(Districts $districts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Districts  $districts
     * @return \Illuminate\Http\Response
     */
    public function edit(Districts $districts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDistrictsRequest  $request
     * @param  \App\Models\Districts  $districts
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDistrictsRequest $request, Districts $districts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Districts  $districts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Districts $districts)
    {
        //
    }
}
