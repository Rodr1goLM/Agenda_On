<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;

class AgendaController extends Controller
{
    private $objAgenda;

    public function __construct() {
        $this->objAgenda = new Agenda();
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $agendas = $this->objAgenda->where('medico', $id)->get();

        if (!$agendas) {
            return abort(404, 'Agenda não encontrada');
        }
        return view('agenda_mes', compact('agendas'));
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
