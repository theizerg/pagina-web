<?php

namespace App\Http\Controllers;

use App\Models\Somos;
use Illuminate\Http\Request;

class SomosController extends Controller
{
    
   public function __construct()
    {
        $this->middleware('permission:add_somos')->only('store');
        $this->middleware('permission:edit_somos')->only('update');
        $this->middleware('permission:delete_somos')->only('destroy');
        $this->middleware('ajax', ['only' => ['store', 'update', 'destroy']]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $somos = Somos::paginate(5);
       return view('admin.somos.index', compact('somos'));   
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
     * @param  \App\Models\Somos  $somos
     * @return \Illuminate\Http\Response
     */
    public function show(Somos $somos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Somos  $somos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $somos = Somos::find(\Hashids::decode($id)[0]);

        return view('admin.somos.edit', ['somos' => $somos]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Somos  $somos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $somos = Somos::find(\Hashids::decode($id)[0]);
        $somos->update($request->all());

        return json_encode(['success' => true]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Somos  $somos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Somos $somos)
    {
        //
    }
}
