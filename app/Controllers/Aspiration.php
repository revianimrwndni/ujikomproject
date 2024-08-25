<?php

namespace App\Controllers;

use App\Models\AspirationModel;

class Aspiration
extends BaseController
{
    public function index()
    {

        // Jika validasi berhasil, simpan data ke database
        $aspirationModel = new AspirationModel();
    }
    public function aspiration()
    {
        // Tampilkan halaman Kotak Aspirasi
        return view('/Pages/Aspirasi');
        // Menginisialisasi model Aspiration
        $aspirationModel = new AspirationModel();

        // Mengambil semua data aspirasi dari database
        $data['aspirations'] = $aspirationModel->findAll();

        // Tampilkan halaman Kotak Aspirasi dengan data yang diteruskan
        return view('/Backend/Index', $data);
    }

    public function store()
    {
        // Validasi inputan form aspirasi di sini

        // Jika validasi berhasil, simpan data ke database
        $aspirationModel = new AspirationModel();
        $data = [
            'nama' => $this->request->getPost('nama'),
            'kelas' => $this->request->getPost('kelas'),
            'email' => $this->request->getPost('email'),
            'file' => $this->request->getPost('file'),
            'pesan' => $this->request->getPost('pesan')
        ];
        $aspirationModel->insert($data);

        // Redirect atau tampilkan pesan sukses
        return redirect()->to('/aspirations')->with('success', 'Aspirasi Anda telah dikirim!');
    }
}
