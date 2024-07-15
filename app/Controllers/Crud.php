<?php

namespace App\Controllers;
use App\Models\MahasiswaModels;
use CodeIgniter\Controller;
class Crud extends BaseController
{
    protected $db;
    public function __construct()
    {
        $this->db = new MahasiswaModels();
    }
    public function index()
    {
        $all = $this->db->findAll();
        $data =[
            'mahasiswa' => $all
        ];
        return view('CRUD/view', $data);
    }

    // public function tambah()
    // {
    //     if(isset($_POST['nim'])) 
    //     {
    //         $data = $this->request->getPost([
    //             'nim',
    //             'nama',
    //             'prodi',
    //             'universitas',
    //             'nomor_handphone'
    //         ]);
    //         $this->db->insert($data);
    //         return redirect()->to(base_url('/CRUD'));
    //     }else{
    //     return view('CRUD/upload');
    //     }
    // }

    public function tambah() {
        return view('CRUD/upload');
    }

    public function store() {
        $nim = $this->request->getPost('nim');
        $nama = $this->request->getPost('nama');
        $prodi = $this->request->getPost('prodi');
        $universitas = $this->request->getPost('universitas');
        $no_hp = $this->request->getPost('no_hp');

        $upload = [
            'nim' => $nim,
            'nama' => $nama,
            'prodi' => $prodi,
            'universitas' => $universitas,
            'nomor_handphone' => $no_hp,
        ];

        $this->db->insert($upload);

        return redirect()->to(base_url('/crud/tambah'));
    }

    public function edit($id)
    {
        if(isset($_POST['nim'])) 
        {
            $data = $this->request->getPost([
                'nim',
                'nama',
                'prodi',
                'universitas',
                'nomor_handphone'
            ]);
            $this->db->update($id, $data);
            return redirect()->to(base_url('/CRUD'));
        }else{
            $data = ['data' => $this->db->find($id)];
        return view('CRUD/edit', $data);
        }
    }  
    public function hapus ($id)
    {
        $this->db->delete($id);
        return redirect()->to(base_url)('/CRUD');
    } 
}