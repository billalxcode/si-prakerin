<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKelasRequest;
use App\Http\Requests\UpdateKelasRequest;
use App\Models\Guru;
use App\Models\Jurusan;
use App\Models\Kelas;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kelas = Kelas::all();
        $guru = Guru::all();
        $jurusans = Jurusan::all();

        return view('admin.kelas.table', ['datas' => $kelas, 'gurus' => $guru, 'jurusans' => $jurusans]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKelasRequest $request)
    {
        Kelas::create($request->validated());

        toastr()->success('Data berhasil disimpan');

        return redirect()->route('dashboard.kelas.table');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKelasRequest $request, Kelas $kelas)
    {
        $kelas->update($request->validated());

        toastr()->success('Data berhasil diperbarui');

        return redirect()->route('dashboard.kelas.table');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kelas $kelas)
    {
        $kelas->delete();

        toastr()->success('Data berhasil dihapus');

        return redirect()->route('dashboard.kelas.table');
    }
}
