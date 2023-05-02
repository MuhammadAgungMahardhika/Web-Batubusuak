<?php

namespace App\Http\Controllers;

use App\Models\Accomodation;
use App\Http\Requests\StoreAccomodationRequest;
use App\Http\Requests\UpdateAccomodationRequest;

class AccomodationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = Accomodation::with(['accomodation_gallery'])->get();

        $datas = [
            'title' => 'AKOMODASI ',
            'datas' => $data,
        ];

        return view('accomodation', $datas);
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
     * @param  \App\Http\Requests\StoreAccomodationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAccomodationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Accomodation  $accomodation
     * @return \Illuminate\Http\Response
     */
    public function show(Accomodation $accomodation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Accomodation  $accomodation
     * @return \Illuminate\Http\Response
     */
    public function edit(Accomodation $accomodation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAccomodationRequest  $request
     * @param  \App\Models\Accomodation  $accomodation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAccomodationRequest $request, Accomodation $accomodation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Accomodation  $accomodation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Accomodation $accomodation)
    {
        //
    }
}
