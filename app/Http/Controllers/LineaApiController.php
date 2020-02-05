<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Linea;
/**
* @OA\Info(title="API Linas", version="1.0")
*
* @OA\Server(url="http://127.0.0.1:8000/")
*/


class LineaApiController extends Controller
{
  /**
  * @OA\Get(
  *     path="/api/lineas",
  *     tags={"Lineas"},
  *     summary="Mostrar lineas",
  *     @OA\Response(
  *         response=200,
  *         description="Mostrar todos las Líneas."
  *     ),
  *     @OA\Response(
  *         response="default",
  *         description="Ha ocurrido un error."
  *     )
  * )
  */
    public function index()
    {
        $lineas = Lineas::all();
        return $lineas;
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_sociedad)
    {
        $productos=DB::select('SELECT producto.nombre as nombre, SUM(linea.unidades) as unidades, sum(linea.importe) as importe FROM linea, productos_sociedad, producto  where linea.sociedad_id='.$id_sociedad.' and productos_sociedad.sociedad_id='.$id_sociedad.' and linea.producto_sociedad_id=productos_sociedad.id and productos_sociedad.producto_id=producto.id group by producto.nombre');
        return $productos;
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
    }
}
