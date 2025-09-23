<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['mata_kuliah'] = [
        ['kode' => 'ST444', 'nama' => 'Pemrograman Dasar', 'sks' => 3, 'dosen' => 'Budi Santoso'],
        ['kode' => 'ST445', 'nama' => 'Basis Data', 'sks' => 3, 'dosen' => 'Siti Aminah'],
        ['kode' => 'ST446', 'nama' => 'Sistem Operasi', 'sks' => 2, 'dosen' => 'Andi Wijaya'],
    ];
        return view('daftar-mata-kuliah', $data);
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
        return view('daftar-mata-kuliah', $data);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $param1)
    {
        if($param1== ''){
            return view('detail-mata-kuliah');
        } else if ($param1 == 'ST445'){
            return ('Anda mengakses matakuliah ST445');
        }
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
