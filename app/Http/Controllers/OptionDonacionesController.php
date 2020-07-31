<?php

namespace App\Http\Controllers;

use App\Models\OptionDonaciones;
use Illuminate\Http\Request;

class OptionDonacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $donaciones = OptionDonaciones::paginate(5);
        return view ('admin.donaciones.index',compact('donaciones'));
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
     * @param  \App\Models\OptionDonaciones  $optionDonaciones
     * @return \Illuminate\Http\Response
     */
    public function show(OptionDonaciones $optionDonaciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OptionDonaciones  $optionDonaciones
     * @return \Illuminate\Http\Response
     */
     public function edit($id)
    {
         $donaciones = OptionDonaciones::find(\Hashids::decode($id)[0]);

        return view('admin.donaciones.edit', ['donaciones' => $donaciones]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\estructura  $estructura
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id )
    {
        $donacioes = OptionDonaciones::find(\Hashids::decode($id)[0]);
        $donacioes->update($request->all());

        return json_encode(['success' => true]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OptionDonaciones  $optionDonaciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(OptionDonaciones $optionDonaciones)
    {
        //
    }
}
