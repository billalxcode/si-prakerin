<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJurusanRequest;
use App\Http\Requests\UpdateJurusanRequest;
use App\Models\Jurusan;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jurusans = Jurusan::all();
        return view('admin.jurusan.table', ['jurusans' => $jurusans]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJurusanRequest $request)
    {
        Jurusan::create($request->validated());

        toastr()->success('Data berhasil disimpan');

        return redirect()->route('dashboard.jurusan.table');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJurusanRequest $request, Jurusan $jurusan)
    {
        dd("ok");
        $jurusan->update($request->validated());

        toastr()->success('Data berhasil diperbarui');

        return redirect()->route('dashboard.jurusan.table');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jurusan $jurusan)
    {
        $jurusan->delete();

        toastr()->success('Data berhasil dihapus');

        return redirect()->route('dashboard.jurusan.table');
    }
}
