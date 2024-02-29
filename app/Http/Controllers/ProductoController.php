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
}

