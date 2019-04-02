<?php

namespace App\Http\Controllers;

use App\Funcionario;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $funcionarios = Funcionario::all();
        return view('funcionarios_listar', compact('funcionarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('funcionario_cadastrar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $funcionario = new Funcionario();
        $funcionario->nome = $request->input("nome");
        $funcionario->sexo = $request->input("sexo");
        $funcionario->endereço = $request->input("endereço");
        $path = $request->file('foto')->store('images', 'public');
        $funcionario->foto = $path;
        $funcionario->rub = $request->input("rub");
        $pos = "funcionario";
        $funcionario->posição = $pos;
        $dep = null;
        $funcionario->id_departamento = $dep;
        $funcionario->save();
        return redirect()->route('funcionarios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\funcionario  $funcionario
     * @return \Illuminate\Http\Response
     */
    public function show(Funcionario $funcionario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\funcionario  $funcionario
     * @return \Illuminate\Http\Response
     */
    public function edit(Funcionario $funcionario)
    {
        return view('funcionario_editar', compact('funcionario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\funcionario  $funcionario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Funcionario $funcionario)
    {
        $funcionario->nome = $request->input("nome");
        $funcionario->sexo = $request->input("sexo");
        $funcionario->endereço = $request->input("endereço");
        $path = $request->file('foto')->store('images', 'public');
        $funcionario->foto = $path;
        $funcionario->rub = $request->input("rub");
        $funcionario->posição = $request->input("posição");
        $funcionario->id_departamento = $request->input("id_departamento");
        $funcionario->save();
        return redirect()->route('funcionarios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\funcionario  $funcionario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Funcionario $funcionario)
    {
        $funcionario->delete();
        return redirect()->route('funcionarios.index');
    }

}
