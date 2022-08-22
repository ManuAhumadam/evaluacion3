<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Sucursal;

class SucursalesController extends Controller
{
    public function index()
    {
        $sucursales = Sucursal::get();
        // dd($sucursales);
        return view('sucursalesCategorias.listadosucursal', [
            'sucursales' => $sucursales
        ]);
    }

    public function create()
    {
        return view('sucursalesCategorias.agregarsucursal');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'nombre' => 'required',
            'direccion' => 'required',
            'imagen' => 'required'
        ]);

        $imagen = $request->file("imagen");

        if ("$imagen") {
            $imagen_path = time() . "-" . $imagen->getClientOriginalName();
            \Storage::disk('imagenes')->put($imagen_path, \File::get($imagen));
        }

        $sucursal = new Sucursal();
        $sucursal->nombre = $request->nombre;
        $sucursal->direccion = $request->direccion;
        $sucursal->imagen = $imagen_path;
        $sucursal->save();

        $sucursales = Sucursal::get();
        // dd($sucursales);
        return view('sucursalesCategorias.listadosucursal', [
            'sucursales' => $sucursales
        ]);
    }
    public function getImagen($filename)
    {
        $file = \Storage::disk('imagenes')->get($filename);
        return new Response($file, 200);
    }

}
