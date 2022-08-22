<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductosController extends Controller
{
    public function index()
    {
        $productos = Producto::get();
        //dd($celulares);
        return view('productos.vistaprincipal', [
            'productos' => $productos
        ]);
    }

    public function create()
    {
        return view('productos.agregar');
    }

    public function store(Request $request)
    {

        $this->validate($request, [

            'codigounico'   => 'required',
            'nombre'        => 'required',
            'cantidad'      => 'required',
            'descripcion'   => 'required',
            'valor'         => 'required',
            'categoria_id'  => 'required',
            'sucursal_id'   => 'required'
        ]);

        //dd($request);

        $producto = new Producto();
        $producto->codigounico = $request->codigounico;
        $producto->nombre = $request->nombre;
        $producto->cantidad = $request->cantidad;
        $producto->descripcion = $request->descripcion;
        $producto->valor = $request->valor;
        $producto->categoria_id = $request->categoria_id;
        $producto->sucursal_id = $request->sucursal_id;
        $producto->save();

        $producto = Producto::get();

        return view('productos.vistaprincipal', [
            'productos' => $producto
        ]);
    }

    public function show($id)
    {
        $productos = Producto::where('sucursal_id', $id)->get();

        return view('productos.listadoproducto', [
            'productos' => $productos
        ]);
    }

    public function edit(Producto $producto)
    {
        return view('productos.editar', compact('producto'));
    }

    public function update(Request $request, Producto $producto)
    {
        $producto->codigounico = $request->codigounico;
        $producto->nombre = $request->nombre;
        $producto->cantidad = $request->cantidad;
        $producto->descripcion = $request->descripcion;
        $producto->valor = $request->valor;
        $producto->save();

        $productos = Producto::get();

        return view('productos.vistaprincipal', [
            'productos' => $productos
        ]);
    }

    public function search($search = null)
    {
        if (is_null($search)) {
            $search = \Request::get('search');
        }

        $productos = Producto::where('nombre', 'LIKE', '%' . $search . '%')->get();
        return view('productos.search')
            ->with(
                array(
                    'productos' => $productos,
                    'search' => $search
                )
            );
    }

    public function destroy(Producto $producto)
    {
        $producto->delete();

        $producto = Producto::get();

        return view('productos.vistaprincipal', [
            'productos' => $producto
        ]);
    }
}
