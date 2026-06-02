<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eventos = Evento::all();
        return view("eventos.index", ['eventos' => $eventos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("eventos.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dados = $request->validate([
            'nome' => 'required',
            'quantidade' => 'required|numeric',
            'preco' => 'required|decimal:0,2'
        ]);
        Evento::create($dados);
        return redirect()->route('eventos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Evento $evento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Evento $evento)
    {
        return view('eventos.edit', ['evento' => $evento]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Evento $evento)
    {
        $dados = $request->validate([
            'nome' => 'required',
            'quantidade' => 'required|numeric',
            'preco' => 'required|decimal:0,2'
        ]);
        $evento->nome = $dados['nome'];
        $evento->quantidade = $dados['quantidade'];
        $evento->preco = $dados['preco'];
        $evento->save();
        return redirect()->route("eventos.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Evento $evento)
    {
        $evento->delete();
        return redirect()->route("eventos.index");
    }
}
