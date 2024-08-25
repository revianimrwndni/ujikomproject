<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Website MPK SMKN 1 KATAPANG'
        ];

        return view('Pages/Home', $data);
    }

    public function profil()
    {
        $data = [
            'title' => 'Tentang MPK'
        ];

        return view('Pages/Profil', $data);
    }
    public function ekskul()
    {
        $data = [
            'title' => 'Ekstrakurikuler'
        ];

        return view('Pages/Ekskul', $data);
    }
    public function Aspirasi()
    {
        $data = [
            'title' => 'Halaman Aspirasi'
        ];

        return view('Pages/Aspirasi', $data);
    }
    public function Alumni()
    {
        $data = [
            'title' => 'Alumni MPK'
        ];

        return view('Pages/Alumni', $data);
    }
    public function Jurnalsatu()
    {
        $data = [
            'title' => 'Jurnal Hasil Pemilihan Ketua MPK'
        ];

        return view('Pages/Jurnalsatu', $data);
    }
    public function Login()
    {
        $data = [
            'title' => ' Halaman Admin Login'
        ];

        return view('Pages/login', $data);
    }
    public function Admin()
    {
        $data = [
            'title' => ' Halaman Admin Login'
        ];

        return view('Backend/Index', $data);
    }
    public function Lainnya()
    {
        $data = [
            'title' => ' Halaman Admin Login'
        ];

        return view('Pages/Lainnya', $data);
    }
}
