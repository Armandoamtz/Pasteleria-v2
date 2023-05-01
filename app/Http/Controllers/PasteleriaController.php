<?php

namespace App\Http\Controllers;

use App\Models\Pasteleria;
use Illuminate\Http\Request;

class PasteleriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['pasteleria']=Pasteleria::paginate(6);
        return view('pastelero.infoPaste',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pastelero.form');
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
        // Recepcionamos los datos y ocultamos el capo token
        $datosPastel = request()->except('_token');
        // Insertar valores en la base de datos
        Pasteleria::insert($datosPastel);
        return redirect('pasteleria/create')->with('mensaje','Pedido realizado');
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
        //
        $pastel=Pasteleria::findOrFail($id);
        return view('pastelero.edit', compact('pastel'));
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
        //
        // Recepcionamos los datos y ocultamos los capos token y method
        $datosPastel = request()->except(['_token','_method']);
        // Buscomos el registro por el id y hacemos la actualización de los datos
        Pasteleria::where('id','=',$id)->update($datosPastel);

        // Volvemos a buscar la información con el id
        $pastel=Pasteleria::findOrFail($id); 
        // Retornamos a la pagína con los datos ya actualizados
        return redirect('pasteleria')->with('mensaje','Pedido actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Pasteleria::destroy($id);
        return redirect('pasteleria')->with('mensaje','Pedido borrado');
    }
}
