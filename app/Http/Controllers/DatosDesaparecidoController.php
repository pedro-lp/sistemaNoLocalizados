<?php

namespace App\Http\Controllers;

use App\DatosDesaparecido;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DatosDesaparecidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['DatosDesaparecidos']=DatosDesaparecido::paginate(5);
        return view('DatosDesaparecidos.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('DatosDesaparecidos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fecha = Carbon::now();
        //
        $datosDesaparecido=request()->except('_token');
        $datosDesaparecido['created_at']=$fecha;
        $datosDesaparecido['updated_at']=$fecha;
        DatosDesaparecido::insert($datosDesaparecido);
        //return response()->json($datosDesaparecido);
        return redirect('datosdesaparecidos')->with('Mensaje','Datos de No Localizado Agregados con Exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DatosDesaparecido  $datosDesaparecido
     * @return \Illuminate\Http\Response
     */
    public function show(DatosDesaparecido $datosDesaparecido)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DatosDesaparecido  $datosDesaparecido
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $datosDesaparecido = DatosDesaparecido::findOrFail($id);
        return view('DatosDesaparecidos.edit',compact('datosDesaparecido'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DatosDesaparecido  $datosDesaparecido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $fecha = Carbon::now();
        //
        $datosDesaparecido=request()->except('_token','_method');
        $datosDesaparecido['updated_at']=$fecha;
        DatosDesaparecido::where('id','=',$id)->update($datosDesaparecido);
        //$datosDesaparecido = DatosDesaparecido::findOrFail($id);
        //return view('DatosDesaparecidos.edit',compact('datosDesaparecido'));
        return redirect('datosdesaparecidos')->with('Mensaje','Datos de No Localizado Modificados con Exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DatosDesaparecido  $datosDesaparecido
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        DatosDesaparecido::destroy($id);
        //return redirect('datosdesaparecidos');
        return redirect('datosdesaparecidos')->with('Mensaje','Datos de No Localizado Eliminados con Exito');
    }
}
