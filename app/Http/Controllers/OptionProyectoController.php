<?php

namespace App\Http\Controllers;

use App\Models\OptionProyecto;
use Illuminate\Http\Request;

class OptionProyectoController extends Controller
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
        $proyectos = OptionProyecto::paginate(5);
        return view('admin.proyectos.index',compact('proyectos'));
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
     * @param  \App\Models\OptionProyecto  $optionProyecto
     * @return \Illuminate\Http\Response
     */
    public function show(OptionProyecto $optionProyecto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OptionProyecto  $optionProyecto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $proyectos = OptionProyecto::find(\Hashids::decode($id)[0]);

        return view('admin.proyectos.edit', ['proyectos' => $proyectos]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OptionProyecto  $optionProyecto
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request, $id )
    {
        $proyectos = OptionProyecto::find(\Hashids::decode($id)[0]);
        $proyectos->update($request->all());

        return json_encode(['success' => true]);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OptionProyecto  $optionProyecto
     * @return \Illuminate\Http\Response
     */
    public function destroy(OptionProyecto $optionProyecto)
    {
        //
    }
}
