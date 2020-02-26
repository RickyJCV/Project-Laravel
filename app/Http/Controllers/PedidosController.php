<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pedidos;

class PedidosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pedidos=Pedidos::all();
        return view('Pedido.index',compact('pedidos')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Pedido.create');
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
    $this->validate(
     $request,[ 
         'usuario'=>'required', 
         'cantidad'=>'required', 
         'prioridad'=>'required', 
         'direccion'=>'required', 
         'precio'=>'required', 
         ]);

        Pedidos::create($request->all());

        return redirect()->route('pedido.index')->with('success','Registro creado satisfactoriamente');
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
        $pedidos=Pedidos::find($id);
        return  view('pedido.show',compact('pedidos'));
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
        $pedidos=Pedidos::find($id);
        return view('pedido.edit',compact('pedidos'));
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
   $this->validate($request,[ 'usuario'=>'required',
    'cantidad'=>'required',
     'prioridad'=>'required',
      'direccion'=>'required',
         'precio'=>'required']);

        Pedidos::find($id)->update($request->all());
        return redirect()->route('pedido.index')->with('success','Registro actualizado satisfactoriamente');

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
         Pedidos::find($id)->delete();
        return redirect()->route('pedido.index')->with('success','Registro eliminado satisfactoriamente');
    }
}