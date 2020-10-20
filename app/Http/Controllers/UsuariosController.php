<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuarios;

class UsuariosController extends Controller
{
    public function index()
    {
        return usuarios::all();
    }

    public function show(usuarios $usuario)
    {
        return $usuario;
    }

    public function store(Request $request)
    {
        $usuario = usuarios::create($request->all());
 
        return response()->json($usuario, 201);
    }
 
    public function update(Request $request, usuarios $usuario)
    {
        $usuario->update($request->all());
 
        return response()->json($usuario, 200);
    }
 
    public function delete(usuarios $usuario)
    {
        $usuario->delete();
 
        return response()->json($usuario, 204);
    }
}
