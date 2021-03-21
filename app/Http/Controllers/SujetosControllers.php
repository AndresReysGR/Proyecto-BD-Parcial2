<?php

namespace App\Http\Controllers;

use App\Models\Sujetos;
use Illuminate\Http\Request;

class SujetosControllers extends Controller
{
    public function index() {
        $sujetos = Sujetos::all(); 

        return view('index', ['sujetos' => $sujetos]);
    }
 
    public function vistaAgregar() {
        return view('agregar');
    }

    public function crear(Request $request){
        Sujetos::create([
            'codigo' => $request->input('codigo'),
            'descripcion' => $request->input('descripcion'),
            'cantidad' => $request->input('cantidad'),
            'precio' => $request->input('precio'),
        ]);
        return redirect('/');
    }

    public function edit($id){
        $sujetos = Sujetos::find($id); 
        return view('editar', ['sujetos' => $sujetos]);
    }

    public function update(Sujetos $sujetos, Request $request){
        $sujetos->update([
            'codigo' => $request->input('codigo'),
            'descripcion' => $request->input('descripcion'),
            'cantidad' => $request->input('cantidad'),
            'precio' => $request->input('precio'),
        ]);
        return redirect('/');
    }

    public function destroy($id){
        $sujetos = Sujetos::find($id);

        $sujetos->delete();

        return redirect('/');
    }
}   