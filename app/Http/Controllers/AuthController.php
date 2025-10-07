<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("login");
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
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'username' => 'required',
            'password' => [
                'required',
            ],
        ], [
            'username.required' => 'Username wajib diisi.',
            'password.required' => 'Password wajib diisi.',
        ]);

        // Data login sementara
        $validUser = [
            'nim' => '2457301067',
        ];

        // Cek username & password
        if (
            $request->username === $validUser['nim'] &&
            $request->password === $validUser['nim']
        ) {
            // Simpan sesi login
            session(['username' => $request->username]);

            // Redirect ke dashboard
            return redirect()->route('dashboard')
                ->with('success', 'Selamat datang, Admin!');
        }

        // Jika gagal login
        return back()
            ->withErrors(['login' => 'Username atau password salah!'])
            ->withInput();
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
