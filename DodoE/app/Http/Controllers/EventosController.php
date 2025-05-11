<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ModelEventos;
use App\Models\ModelUsuarios;

class EventosController extends Controller
{
    public function index()
    {
        $events = ModelEventos::with("Eventos")->get();
        return view('index',compact('events'));
    }

    public function crear()
    {
        $organizadores = ModelUsuarios::all();
        return view('crear',compact('organizadores'));
    }

    public function guardar(Request $request)
    {
        ModelEventos::create($request->all());
        return redirect()->route('index');
    }
    public function eliminar()
    {
        return view('eliminar');
    }
    public function editar()
    {
        return view('editar');
    }
}
