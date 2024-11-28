<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\LokasiPresensiModel;

class LokasiPresensi extends BaseController
{
    public function index()
    {
        $LokasiPresensiModel = new LokasiPresensiModel();
        $data = [
            'title' => 'Data Lokasi Presensi',
            'lokasi_presensi' => $LokasiPresensiModel->findAll()
        ];
        return view('admin/lokasi_presensi/lokasi_presensi', $data);
    }

    public function detail($id)
    {
        $LokasiPresensiModel = new LokasiPresensiModel();
        $data = [
            'title' => 'Detail Lokasi Presensi',
            'lokasi_presensi' =>$LokasiPresensiModel->find($id),
        ];
        return view('admin/lokasi_presensi/detail', $data);
    }

    public function create(){
        $data = [
            'title' => 'Tambah Lokasi Presensi',
            'validation' => \Config\Services::validation()
        ];
        return view('admin/lokasi_presensi/create', $data);
    }

    public function store(){
        $rules = [
            'nama_lokasi' => [
            'rules' => 'required',
            'errors' => [
                'required' => "Nama Lokasi wajib diisi"
             ],
         ],
         'alamat_lokasi' => [
            'rules' => 'required',
            'errors' => [
                'required' => "Alamat Lokasi wajib diisi"
             ],
         ],
         'tipe_lokasi' => [
            'rules' => 'required',
            'errors' => [
                'required' => "Tipe Lokasi wajib diisi"
             ],
         ],
         'latitude' => [
            'rules' => 'required',
            'errors' => [
                'required' => "Latitude wajib diisi"
             ],
         ],
         'longitude' => [
            'rules' => 'required',
            'errors' => [
                'required' => "Longitude wajib diisi"
             ],
         ],
         'radius' => [
            'rules' => 'required',
            'errors' => [
                'required' => "Radius wajib diisi"
             ],
         ],
         'zona_waktu' => [
            'rules' => 'required',
            'errors' => [
                'required' => "Zona Waktu wajib diisi"
             ],
         ],
         'jam_masuk' => [
            'rules' => 'required',
            'errors' => [
                'required' => "Jam Masuk wajib diisi"
             ],
         ],
         'jam_pulang' => [
            'rules' => 'required',
            'errors' => [
                'required' => "Jam Pulang wajib diisi"
             ],
         ],
     ];
     if(!$this->validate($rules)){
        $data = [
            'title' => 'Tambah Lokasi Presensi',
            'validation' => \Config\Services::validation()
        ];
        echo view('admin/lokasi_presensi/create', $data);
     } else{
        $LokasiPresensiModel = new LokasiPresensiModel();
        $LokasiPresensiModel->insert([
            'nama_lokasi' => $this->request->getPost('nama_lokasi'),
            'alamat_lokasi' => $this->request->getPost('alamat_lokasi'),
            'tipe_lokasi' => $this->request->getPost('tipe_lokasi'),
            'latitude' => $this->request->getPost('latitude'),
            'longitude' => $this->request->getPost('longitude'),
            'radius' => $this->request->getPost('radius'),
            'zona_waktu' => $this->request->getPost('zona_waktu'),
            'jam_masuk' => $this->request->getPost('jam_masuk'),
            'jam_pulang' => $this->request->getPost('jam_pulang')
        ]);
        session()->setFlashData('berhasil', 'Data Lokasi Presensi berhasil tersimpan');
        return redirect()->to(base_url('admin/lokasi_presensi'));
     }
   }

   public function edit($id)
   {
    $LokasiPresensiModel = new LokasiPresensiModel();
    $data = [
        'title' => 'Edit Lokasi Presensi',
        'lokasi_presensi' => $LokasiPresensiModel->find($id),
        'validation' => \Config\Services::validation()
    ];
    return view('admin/lokasi_presensi/edit', $data);
}

public function update($id){
    $LokasiPresensiModel = new LokasiPresensiModel();
    $rules = [
        'nama_lokasi' => [
        'rules' => 'required',
        'errors' => [
            'required' => "Nama Lokasi wajib diisi"
         ],
     ],
     'alamat_lokasi' => [
        'rules' => 'required',
        'errors' => [
            'required' => "Alamat Lokasi wajib diisi"
         ],
     ],
     'tipe_lokasi' => [
        'rules' => 'required',
        'errors' => [
            'required' => "Tipe Lokasi wajib diisi"
         ],
     ],
     'latitude' => [
        'rules' => 'required',
        'errors' => [
            'required' => "Latitude wajib diisi"
         ],
     ],
     'longitude' => [
        'rules' => 'required',
        'errors' => [
            'required' => "Longitude wajib diisi"
         ],
     ],
     'radius' => [
        'rules' => 'required',
        'errors' => [
            'required' => "Radius wajib diisi"
         ],
     ],
     'zona_waktu' => [
        'rules' => 'required',
        'errors' => [
            'required' => "Zona Waktu wajib diisi"
         ],
     ],
     'jam_masuk' => [
        'rules' => 'required',
        'errors' => [
            'required' => "Jam Masuk wajib diisi"
         ],
     ],
     'jam_pulang' => [
        'rules' => 'required',
        'errors' => [
            'required' => "Jam Pulang wajib diisi"
         ],
     ],
 ];
 if(!$this->validate($rules)){
    $data = [
        'title' => 'Edit Lokasi Presensi',
        'lokasi_presensi' => $LokasiPresensiModel->find($id),
        'validation' => \Config\Services::validation()
    ];
    echo view('admin/lokasi_presensi/edit', $data);
 } else{
    $jabatanModel = new LokasiPresensiModel();
    $jabatanModel->update($id, [
        'nama_lokasi' => $this->request->getPost('nama_lokasi'),
            'alamat_lokasi' => $this->request->getPost('alamat_lokasi'),
            'tipe_lokasi' => $this->request->getPost('tipe_lokasi'),
            'latitude' => $this->request->getPost('latitude'),
            'longitude' => $this->request->getPost('longitude'),
            'radius' => $this->request->getPost('radius'),
            'zona_waktu' => $this->request->getPost('zona_waktu'),
            'jam_masuk' => $this->request->getPost('jam_masuk'),
            'jam_pulang' => $this->request->getPost('jam_pulang')
    ]);
    session()->setFlashData('berhasil', 'Data Lokasi Presensi berhasil diupdate');
    return redirect()->to(base_url('admin/lokasi_presensi'));
 }
}

function delete($id)
{
    $LokasiPresensiModel = new LokasiPresensiModel();
    $lokasi_presensi = $LokasiPresensiModel->find($id);
    if($lokasi_presensi){
        $LokasiPresensiModel->delete($id);
        session()->setFlashData('berhasil', 'Data Lokasi Presensi berhasil dihapus');
    return redirect()->to(base_url('admin/lokasi_presensi'));
    }
}
}
