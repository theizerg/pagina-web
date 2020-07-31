<?php

namespace App\Http\Controllers;
 
use App\Models\Headers;
use App\Http\Requests\UpdateHeader;
use Illuminate\Http\Request;

class HeadersController extends Controller
{

    public function __construct()
    {  
        $this->middleware('permission:view_headers')->only('index');
        $this->middleware('permission:add_headers')->only('store');
        $this->middleware('permission:edit_headers')->only('update');
        $this->middleware('permission:delete_headers')->only('destroy');
        $this->middleware('ajax', ['only' => ['store', 'update', 'destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $headers = Headers::paginate(10);

        return view('admin.cabecera.headers.index', ['headers' => $headers]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.headers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
         $header = Headers::create($request->all());

        return json_encode(['success' => true, 'header_id' => $header->encode_id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Headers  $headers
     * @return \Illuminate\Http\Response
     */
    public function show(Headers $headers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Headers  $headers
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $headers = Headers::find(\Hashids::decode($id)[0]);

        return view('admin.headers.edit', ['headers' => $headers]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Headers  $headers
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHeader $request, $id )
    {
        $headers = Headers::find(\Hashids::decode($id)[0]);
        $headers->update($request->all());

        return json_encode(['success' => true]);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Headers  $headers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Headers $headers)
    {
        //
    }
}
