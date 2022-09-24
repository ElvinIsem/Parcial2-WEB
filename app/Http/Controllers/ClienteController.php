<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use Illuminate\Suport\Facades\DB;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {


        $articulos = Cliente::all();
        return view('cliente.index')->with('clientes',$articulos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clientes = new Cliente();
        $clientes->codigo = $request->get('codigo');
        $clientes->nombre = $request->get('nombre');
        $clientes->apellido = $request->get('apellido');
        $clientes->direccion = $request->get('direccion');
        $clientes->telefono = $request->get('telefono');

        $clientes->save();

        return redirect('/clientes');
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
        $cliente = Cliente::find($id);
        return view('cliente.edit')->with('cliente',$cliente);
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
        $cliente = Cliente::find($id);
        $cliente->codigo = $request->get('codigo');
        $cliente->nombre = $request->get('nombre');
        $cliente->apellido = $request->get('apellido');
        $cliente->direccion = $request->get('direccion');
        $cliente->telefono = $request->get('telefono');

        $cliente->save();

        return redirect('/clientes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();
        return redirect('/clientes');
    }

    public function buscar(Request $request)
    {
        //$texto = trim($request->get('texto'));
       // $clientes = DB::table('clientes')->slect('id','nombre','apellido','direccion','telefono')
        //->where('nombre', 'LIKE', '%'.$texto.'$')
        //->orWhere('documento','LIKE', '%'.$texto.'$')
        //->orderBy('nombre','asc')
        //->paginate(10);
       // return view('cliente.index', compact('clientes','texto'));
    }
}
