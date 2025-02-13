<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Models\Fruta;

class ControllerFruta extends Controller
{
    public function __construct(){
        $this->middleware('auth',['only' => ['create', 'store', 'edit', 'update', 'destroy']]);
    }
    
    public function index()
    {
        $frutas = Fruta::get();
        return view('fruta.index', compact('frutas'));
    }

    public function create()
    {
        return view('fruta.create');
    }
    
    public function store(Request $request)
    {
        Fruta::create($request->all());
        return redirect()->route('fruta.index')->with('success', 'Fruta creada con exito');
    }
    
    public function show(string $id)
    {

    }
    
    public function edit(string $id)
    {
        $fruta = Fruta::findOrFail($id);
        return view('fruta.edit', compact('fruta'));
    }
    
    public function update(Request $request, string $id)
    {
        $fruta = Fruta::findOrFail($id);

        $fruta->nombre = $request['nombre'];
        $fruta->temporada = $request['temporada'];
        $fruta->precio = $request['precio'];
        $fruta->foto = $request['foto'];
        $fruta->stock = $request['stock'];

        $fruta->save();

        return redirect()->route('fruta.index')->with('success', 'Fruta actualizada con exito');
    }
    
    public function destroy(string $id)
    {
        $fruta = Fruta::findOrFail($id);
        $fruta->delete();
        return redirect()->route('fruta.index')->with('success', 'Fruta eliminada con exito');
    }
}
