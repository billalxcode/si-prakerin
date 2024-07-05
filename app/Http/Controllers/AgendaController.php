<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAgendaRequest;
use App\Http\Requests\UpdateAgendaRequest;
use App\Models\Agenda;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agendas = Agenda::all();

        return view('admin.agenda.table', ['agendas' => $agendas]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAgendaRequest $request)
    {
        Agenda::create($request->validated());

        toastr()->success('Data berhasil disimpan');

        return redirect()->route('dashboard.agenda.table');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAgendaRequest $request, Agenda $agenda)
    {
        $agenda->update($request->validated());

        toastr()->success('Data berhasil diperbarui');

        return redirect()->route('dashboard.agenda.table');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Agenda $agenda)
    {
        $agenda->delete();

        toastr()->success('Data berhasil dihapus');

        return redirect()->route('dashboard.agenda.table');
    }
}
