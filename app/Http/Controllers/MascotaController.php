<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Mascota;
class MascotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $m = \App\Mascota::all();
        return view("mascota_index",compact("m"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("mascota_create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mmmm = new Mascota;
        $mmmm->nombre = $request->get("nombre");
        $mmmm->raza = $request->get("raza");
        $mmmm->save();
        return "YES";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $m = Mascota::find($id);
         return view("mascota_edit",compact("m"));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $m = Mascota::find($id);
        $m->nombre = $request->get('nombre');
        $m->raza = $request->get('raza');
        $m->save();
        return "OK";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $m= Mascota::find($id);
        $m->delete();
        return "OK";
    }
}
