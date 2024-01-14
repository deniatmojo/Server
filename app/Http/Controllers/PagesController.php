<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function show($page)
    {
        return view($page);
    }

    public function contactUs(Request $request)
    {
        // Contoh penggunaan Request untuk mendapatkan nilai dari parameter URL
        $name = $request->input('name');
        $email = $request->input('email');

        // Lakukan sesuatu dengan nilai yang diterima dari permintaan HTTP

        // Menampilkan halaman kontak
        return view('kontak', ['name' => $name, 'email' => $email]);
    }

    public function aboutMe()
    {
        // Menampilkan halaman tentang kami
        return view('aboutMe');
    }

    public function service()
    {
        // Menampilkan halaman layanan
        return view('service');
    }

        public function maintenance()
    {
        // Menampilkan halaman layanan
        return view('errors.maintenance');
    }

      public function error()
    {
        // Menampilkan halaman layanan
        return view('errors.error');
    }

    public function login()
    {
        return view('login.login');
    }
}
