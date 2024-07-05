<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePerusahaanRequest;
use App\Http\Requests\UpdatePerusahaanRequest;
use App\Models\Perusahaan;

class PerusahaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $perusahaans = Perusahaan::all();

        return view('admin.perusahaan.table', ['perusahaans' => $perusahaans]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePerusahaanRequest $request)
    {
        Perusahaan::create($request->validated());

        toastr()->success('Data berhasil disimpan');

        return redirect()->route('dashboard.industri.table');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePerusahaanRequest $request, Perusahaan $perusahaan)
    {
        $perusahaan->update($request->validated());

        toastr()->success('Data berhasil diperbarui');

        return redirect()->route('dashboard.industri.table');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Perusahaan $perusahaan)
    {
        $perusahaan->delete();

        toastr()->success('Data berhasil dihapus');

        return redirect()->route('dashboard.industri.table');
    }
}
