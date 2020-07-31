<?php

namespace App\Http\Controllers;

use App\Models\Objetivo;
use Illuminate\Http\Request;

class ObjetivoController extends Controller
{

     public function __construct()
    {
        $this->middleware('permission:view_objetivo')->only('index');
        $this->middleware('permission:add_objetivo')->only('store');
        $this->middleware('permission:edit_objetivo')->only('update');
        $this->middleware('permission:delete_objetivo')->only('destroy');
        $this->middleware('ajax', ['only' => ['store', 'update', 'destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $objetivos = Objetivo::paginate(5);
        return view('admin.objetivos.index', compact('objetivos'));
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
     * @param  \App\Models\Objetivo  $objetivo
     * @return \Illuminate\Http\Response
     */
    public function show(Objetivo $objetivo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Objetivo  $objetivo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $objetivos = Objetivo::find(\Hashids::decode($id)[0]);

        return view('admin.objetivos.edit', ['objetivos' => $objetivos]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Objetivo  $objetivos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id )
    {
        $objetivos = Objetivo::find(\Hashids::decode($id)[0]);
        $objetivos->update($request->all());

        return json_encode(['success' => true]);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Objetivo  $objetivo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Objetivo $objetivo)
    {
        //
    }
}
