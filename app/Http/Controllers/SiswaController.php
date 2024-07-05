<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSiswaRequest;
use App\Http\Requests\UpdateSiswaRequest;
use App\Models\Kelas;
use App\Models\Siswa;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswas = Siswa::all();
        $kelas = Kelas::all();

        return view('admin.siswa.table', ['siswas' => $siswas, 'kelas' => $kelas]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSiswaRequest $request)
    {
        Siswa::create($request->validated());

        toastr()->success('Data berhasil disimpan');

        return redirect()->route('dashboard.siswa.table');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSiswaRequest $request, Siswa $siswa)
    {
        $siswa->update($request->validated());

        toastr()->success('Data berhasil diperbarui');

        return redirect()->route('dashboard.siswa.table');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Siswa $siswa)
    {
        $siswa->delete();

        toastr()->success('Data berhasil dihapus');

        return redirect()->route('dashboard.siswa.table');
    }
}
