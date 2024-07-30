<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medico;
use App\Models\Unidade;

class MedicoController extends Controller
{
    private $objMedico;
    private $objUnidade;

    public function __construct() {
        $this->objMedico = new Medico();
        $this->objUnidade = new Unidade();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('home');
        // dd($this->objMedico->all());
        $medicos = $this->objMedico->all();

        if (!$medicos) {
            return abort(404, 'Médicos  não encontrada');
        }
        return view('home', compact('medicos'));
    }
    
    public function search($id)
    {
 // Encontrar a unidade pelo ID
        $unidade = $this->objUnidade->find($id);
        if ($unidade) {
            // Obter todos os médicos associados a essa unidade
            dd($unidade->relMedico);
        } else {
            dd('Unidade não econtrada.');
        }


// // Encontrar médico pelo ID | NÃO FAZ SENTIDO CADA MEDICO SÓ VAI TER UMA UNIDADE ASSOCIADA AO SEU CADASTRADO
        // $medico = $this->objMedico->find(2);
        // if ($medico) {
        //     // Obter as unidades que o médico associados
        //     dd($medico->relUnidade);
        // } else {
        //     dd('Médico não econtrada.');
        // }
    }    


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
