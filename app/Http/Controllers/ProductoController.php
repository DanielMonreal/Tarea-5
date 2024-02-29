<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function create()
    {
        return view('create');
    }

    public function edit($id)
    {
        // Lógica para obtener el producto con el ID $id de la base de datos
        $producto = Producto::findOrFail($id);

        return view('edit', compact('producto'));
    }

    public function store(Request $request) 
    {
    // Valida los datos del formulario
    $request->validate([
        'nombre' => 'required|string',
        'precio' => 'required|numeric',
        'descripcion' => 'nullable|string'
    ]);

    // Crea un nuevo producto con los datos del formulario
    Producto::create([
        'nombre' => $request->nombre,
        'precio' => $request->precio,
        'descripcion' => $request->descripcion
    ]);

    // Redirige a alguna vista o a la página de inicio
    return redirect('/productos');
    }
}

