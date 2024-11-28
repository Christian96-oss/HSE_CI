<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\FireExtinguisherModel;

class FireExtinguisher extends BaseController
{
    public function index()
    {
        $FireExtinguisherModel = new FireExtinguisherModel();
        $data = [
            'title' => 'Data Fire Extinguisher',
            'firextinguisher' => $FireExtinguisherModel->findAll()
        ];
        return view('admin/firextinguisher/firextinguisher', $data);
    }

    public function detail($id)
    {
        $FireExtinguisherModel = new FireExtinguisherModel();
        $data = [
            'title' => 'Detail Firextinguisher',
            'firextinguisher' =>$FireExtinguisherModel->find($id),
        ];
        return view('admin/firextinguisher/detail', $data);
    }

    public function create(){
        $data = [
            'title' => 'Tambah Firextinguisher',
            'validation' => \Config\Services::validation()
        ];
        return view('admin/firextinguisher/create', $data);
    }

    public function store(){
        $rules = [
            'nomor_apar' => [
            'rules' => 'required',
            'errors' => [
                'required' => "Nomor Apar wajib diisi"
             ],
         ],
         'brand' => [
            'rules' => 'required',
            'errors' => [
                'required' => "Brand wajib diisi"
             ],
         ],
         'tipe' => [
            'rules' => 'required',
            'errors' => [
                'required' => "Tipe wajib diisi"
             ],
         ],
         'berat' => [
            'rules' => 'required',
            'errors' => [
                'required' => "Berat wajib diisi"
             ],
         ],
         'lokasi' => [
            'rules' => 'required',
            'errors' => [
                'required' => "Lokasi wajib diisi"
             ],
         ],
         'expired' => [
            'rules' => 'required',
            'errors' => [
                'required' => "Expired wajib diisi"
             ],
         ],
         'plant' => [
            'rules' => 'required',
            'errors' => [
                'required' => "Plant wajib diisi"
             ],
         ],
         'img' => [
    'rules' => 'uploaded[img]|max_size[img,1024]|is_image[img]',
    'errors' => [
        'uploaded' => 'Upload Gambar wajib diisi',
        'max_size' => 'Ukuran gambar maksimal adalah 1MB',
        'is_image' => 'File yang diunggah harus berupa gambar (JPEG/PNG)'
         ],
       ],
     ];
     if(!$this->validate($rules)){
        $data = [
            'title' => 'Tambah Fire Extinguisher',
            'validation' => \Config\Services::validation()
        ];
        echo view('admin/firextinguisher/create', $data);
     } else{
        $img = $this->request->getFile('img');
        $newName = $img->getName(); // Menggunakan nama asli file dengan ekstensi
        $img->move(ROOTPATH . 'public/images', $newName);

        $FireExtinguisherModel = new FireExtinguisherModel();
        $FireExtinguisherModel->insert([
            'nomor_apar' => $this->request->getPost('nomor_apar'),
            'brand' => $this->request->getPost('brand'),
            'tipe' => $this->request->getPost('tipe'),
            'berat' => $this->request->getPost('berat'),
            'plant' => $this->request->getPost('plant'),
            'lokasi' => $this->request->getPost('lokasi'),
            'expired' => $this->request->getPost('expired'),
            'record_date' => date('Y-m-d'), // Insert current date
            'status' => 'Not Inspection',// Set default status
            'img' => $newName
        ]);
        session()->setFlashData('berhasil', 'Data Fire Extinguisher berhasil tersimpan');
        return redirect()->to(base_url('admin/firextinguisher'));
     }
   }

   public function edit($id)
   {
    $FireExtinguisherModel = new FireExtinguisherModel();
    $data = [
        'title' => 'Edit Fire Extinguisher',
        'firextinguisher' => $FireExtinguisherModel->find($id),
        'validation' => \Config\Services::validation()
    ];
    return view('admin/firextinguisher/edit', $data);
}

public function update($id){
    $FireExtinguisherModel = new FireExtinguisherModel();
    $rules = [
        'nomor_apar' => [
        'rules' => 'required',
        'errors' => [
            'required' => "Nomor Apar wajib diisi"
         ],
     ],
     'brand' => [
        'rules' => 'required',
        'errors' => [
            'required' => "Brand wajib diisi"
         ],
     ],
     'tipe' => [
        'rules' => 'required',
        'errors' => [
            'required' => "Tipe wajib diisi"
         ],
     ],
     'berat' => [
        'rules' => 'required',
        'errors' => [
            'required' => "Berat wajib diisi"
         ],
     ],
     'plant' => [
        'rules' => 'required',
        'errors' => [
            'required' => "Plant wajib diisi"
         ],
     ],
     'lokasi' => [
        'rules' => 'required',
        'errors' => [
            'required' => "Lokasi wajib diisi"
         ],
     ],
     'expired' => [
        'rules' => 'required',
        'errors' => [
            'required' => "Expired wajib diisi"
         ],
     ],
 ];
 if(!$this->validate($rules)){
    $data = [
        'title' => 'Edit Fire Extinguisher',
        'firextinguisher' => $FireExtinguisherModel->find($id),
        'validation' => \Config\Services::validation()
    ];
    echo view('admin/firextinguisher/edit', $data);
 } else{
    $FireExtinguisherModel = new FireExtinguisherModel();
    $FireExtinguisherModel->update($id, [
            'nomor_apar' => $this->request->getPost('nomor_apar'),
            'brand' => $this->request->getPost('brand'),
            'tipe' => $this->request->getPost('tipe'),
            'berat' => $this->request->getPost('berat'),
            'plant' => $this->request->getPost('plant'),
            'lokasi' => $this->request->getPost('lokasi'),
            'expired' => $this->request->getPost('expired')
           
    ]);
    session()->setFlashData('berhasil', 'Data Fire Extinguisher berhasil diupdate');
    return redirect()->to(base_url('admin/firextinguisher'));
 }
}

function delete($id)
{
    $FireExtinguisherModel = new FireExtinguisherModel();
    $firextinguisher = $FireExtinguisherModel->find($id);
    if($firextinguisher){
        $FireExtinguisherModel->delete($id);
        session()->setFlashData('berhasil', 'Data Fire Extinguisher berhasil dihapus');
    return redirect()->to(base_url('admin/firextinguisher'));
    }
}
}
