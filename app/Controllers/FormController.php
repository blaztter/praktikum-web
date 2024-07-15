<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class FormController extends BaseController
{
    public function index()
    {
        return view('form');

    }
    public function tampil()
    {
        //
         // mengambil data yang dikirim melalui from
        $nama = $this->request->getPost('nama');
        $nim = $this->request->getPost('nim');
        $kelas = $this->request->getPost('kelas');
        $matakuliah= $this->request->getPost('matakuliah');
        $dosen = $this->request->getPost('dosen');
        $asisten = $this->request->getPost('asisten');

        //menyiapkan data yang akan dikirim ke view
        $data = 
        [
            'nama'=> $nama,
            'nim'=> $nim,
            'kelas'=> $kelas,
            'matakuliah'=> $matakuliah,
            'dosen'=> $dosen,
            'asisten'=> $asisten,
        ];
        
        //menampilkan view dengan data yang telah disiapkan
        return view('form_result', $data);
    }
}
