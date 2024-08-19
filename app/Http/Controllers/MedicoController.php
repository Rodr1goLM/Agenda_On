<?php

namespace App\Http\Controllers;

use App\Models\Medico;
use App\Models\Unidade;
use Illuminate\Http\Request;

class MedicoController extends Controller
{
    public function index()
    {
        $medicos = Medico::with('relUnidade')->get();
        return view('medicos.index', compact('medicos'));
    }

    public function create()
    {
        $unidades = Unidade::all();
        return view('medicos.create', compact('unidades'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'registro' => 'required',
            'cpf' => 'required|unique:medicos,cpf',
            'especializacao' => 'required',
            'unidade' => 'required|exists:unidades,id',
        ]);

        Medico::create($request->all());
        return redirect()->route('medico.index')->with('success', 'Médico criado com sucesso.');
    }

    public function show(Medico $medico)
    {
        return view('medicos.show', compact('medico'));
    }

    public function edit(Medico $medico)
    {
        $unidades = Unidade::all();
        return view('medicos.edit', compact('medico', 'unidades'));
    }

    public function update(Request $request, Medico $medico)
    {
        $request->validate([
            'nome' => 'required',
            'registro' => 'required',
            'cpf' => 'required|unique:medicos,cpf,' . $medico->id,
            'especializacao' => 'required',
            'unidade' => 'required|exists:unidades,id',
        ]);

        $medico->update($request->all());
        return redirect()->route('medico.index')->with('success', 'Médico atualizado com sucesso.');
    }

    public function destroy(Medico $medico)
    {
        $medico->delete();
        return redirect()->route('medico.index')->with('success', 'Médico excluído com sucesso.');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $medicos = Medico::where('nome', 'LIKE', "%{$query}%")
            ->orWhere('registro', 'LIKE', "%{$query}%")
            ->orWhere('especializacao', 'LIKE', "%{$query}%")
            ->with('relUnidade')
            ->get();

        return view('medicos.index', compact('medicos'));
    }
}
