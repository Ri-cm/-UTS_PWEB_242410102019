<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Array data contoh (list kopi) - sesuai syarat, berada di controller
    private $coffees = [
        ['name' => 'Espresso', 'price' => 50000, 'description' => 'Kopi hitam pekat'],
        ['name' => 'Latte', 'price' => 70000, 'description' => 'Kopi dengan susu'],
        ['name' => 'Cappuccino', 'price' => 65000, 'description' => 'Kopi dengan busa susu'],
        ['name' => 'Americano', 'price' => 55000, 'description' => 'Kopi hitam encer'],
        ['name' => 'Mocha', 'price' => 75000, 'description' => 'Kopi dengan coklat'],
    ];

    // Menampilkan form login
    public function showLogin()
    {
        return view('login');
    }

    // Memproses login dan redirect ke dashboard dengan query parameter
    public function processLogin(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        // Validasi sederhana (tidak ada autentikasi nyata)
        if ($username && $password) {
            return redirect()->route('dashboard', ['username' => $username]);
        }

        return back()->withErrors(['error' => 'Username dan password diperlukan']);
    }

    // Menampilkan dashboard dengan username dari query parameter
    public function dashboard(Request $request)
    {
        $username = $request->query('username');
        return view('dashboard', compact('username'));
    }

    // Menampilkan profile dengan username dari query parameter
    public function profile(Request $request)
    {
        $username = $request->query('username');
        return view('profile', compact('username'));
    }

    // Menampilkan pengelolaan dengan list data kopi
    public function pengelolaan()
    {
        $coffees = $this->coffees; // Menggunakan array dari controller
        return view('pengelolaan', compact('coffees'));
    }
}