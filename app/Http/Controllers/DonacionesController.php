<?php

namespace App\Http\Controllers;

use App\Models\Donaciones;
use Illuminate\Http\Request;

class DonacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $donaciones = Donaciones::paginate(5);
      return view('admin.cabecera.donaciones.index', compact('donaciones'));
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
     * @param  \App\Models\Donaciones  $donaciones
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Donaciones  $donaciones
     * @return \Illuminate\Http\Response
     */
     public function edit($id)
    {
         $donacion = Donaciones::find(\Hashids::decode($id)[0]);

        return view('admin.cabecera.donaciones.edit', ['donacion' => $donacion]);
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
        $donacioes = Donaciones::find(\Hashids::decode($id)[0]);
        $donacioes->update($request->all());

        return json_encode(['success' => true]);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Donaciones  $donaciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Donaciones $donaciones)
    {
        //
    }
}
