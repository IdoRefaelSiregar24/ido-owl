<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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


    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => ['required', 'regex:/^[^0-9]*$/'],
            'alamat' => ['required', 'string', 'max:300'],
            'tanggal_lahir' => ['required', 'date'],
            'username' => ['required', 'string', 'max:50'],
            'password' => [
                'required',
                'min:6',
                'regex:/^(?=.*[A-Z])(?=.*\d).+$/'
            ],
            'confirm_password' => ['required'],
        ], [
            'nama.required' => 'Nama wajib diisi.',
            'nama.regex' => 'Nama tidak boleh mengandung angka.',
            'alamat.required' => 'Alamat wajib diisi.',
            'alamat.max' => 'Alamat maksimal 300 karakter.',
            'tanggal_lahir.required' => 'Tanggal lahir wajib diisi.',
            'tanggal_lahir.date' => 'Format tanggal lahir tidak valid.',
            'username.required' => 'Username wajib diisi.',
            'password.required' => 'Password wajib diisi.',
            'password.min' => 'Password minimal 6 karakter.',
            'password.regex' => 'Password harus mengandung huruf kapital dan angka.',
            'confirm_password.required' => 'Konfirmasi password wajib diisi.',
        ]);

        if ($request->password !== $request->confirm_password) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Konfirmasi password tidak cocok!');
        }

        return redirect()->route('login.show')
            ->with('success-register', 'Registrasi berhasil! Silakan Login.');
    }


    public function showRegister()
    {
        return view("register");
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
