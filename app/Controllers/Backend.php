<?php

namespace App\Controllers;

class Backend extends BaseController
{
    public function Halaman()
    {
        $data = [
            'title' => 'Daftar Halaman Aspirasi'
        ];

        return view('Backend/Index', $data);
    }
    public function index()
    {
        // Periksa status sesi
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login');
        }

        // Tampilkan halaman dashboard
        return view('/Backend/Index');
    }
}
