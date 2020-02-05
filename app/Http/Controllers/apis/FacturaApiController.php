<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Factura;

/**
* @OA\Info(title="API Facturas", version="1.0")
*
* @OA\Server(url="http://127.0.0.1:8000/")
*/

class FacturaApiController extends Controller
{
  /**
  * @OA\Get(
  *     path="/api/facturas",
  *     tags={"Facturas"},
  *     summary="Mostrar facturas",
  *     @OA\Response(
  *         response=200,
  *         description="Mostrar todos los pokemons."
  *     ),
  *     @OA\Response(
  *         response="default",
  *         description="Ha ocurrido un error."
  *     )
  * )
  */
    public function index()
    {
        $facturas = Factura::all();
        return $facturas;
    }


    //ID SOCIEDAD
    public function show($id_sociedad){
        $facturas = Factura::where('sociedad_id',$id_sociedad)->get();
        return ($facturas);
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
