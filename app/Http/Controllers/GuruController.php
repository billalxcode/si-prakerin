<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGuruRequest;
use App\Http\Requests\UpdateGuruRequest;
use App\Models\Guru;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gurus = Guru::all();

        return view('admin.guru.table', ['datas' => $gurus]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGuruRequest $request)
    {
        Guru::create($request->validated());

        toastr()->success('Data berhasil disimpan');

        return redirect()->route('dashboard.guru.table');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGuruRequest $request, Guru $guru)
    {
        $guru->update($request->validated());

        toastr()->success('Data berhasil diperbarui');

        return redirect()->route('dashboard.guru.table');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Guru $guru)
    {
        $guru->delete();

        toastr()->success('Data berhasil dihapus');

        return redirect()->route('dashboard.guru.table');
    }
}
