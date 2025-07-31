<?php

namespace App\Controllers;

use App\Models\SiswaModel;
use App\Models\TabunganModel;

class Siswa extends BaseController
{
    protected $siswa;
    protected $tabungan;
    public function __construct()
    {
        $this->siswa = new SiswaModel();
        $this->tabungan = new TabunganModel();
    }

    // 
    public function index()
    {
        $siswa = $this->siswa->findAll();

        $data = [
            'title' => 'Test Recruitment - List Data',
            'siswa' => $siswa
        ];

        return view('dt_siswa/home', $data);
    }

    // 
    public function create()
    {
        $data = [
            'title' => 'Test Recruitment - Create',
        ];

        return view('dt_siswa/create_dtSiswa', $data);
    }

    // 
    public function store()
    {
    // Upload foto lokal
    $foto = $this->request->getFile('foto');
    $fotoName = $foto->getName();
    $foto->move('assets/img', $fotoName);

    // Simpan langsung ke database
    $this->siswa->save([
        'nama'              => $this->request->getVar('nama'),
        'nim'               => (int) $this->request->getVar('nim'),
        'notelp'            => $this->request->getVar('notelp'),
        'jenis_kelamin'     => $this->request->getVar('jenis_kelamin'),
        'tempat_lahir'      => $this->request->getVar('tempat_lahir'),
        'tanggal_lahir'     => $this->request->getVar('tanggal_lahir'),
        'alamat'            => $this->request->getVar('alamat'),
        'foto'              => $fotoName
    ]);

    return redirect()->to('/');
    }   


    // 
    public function delete($id)
    {

    $siswa = $this->siswa->find($id);

    if ($siswa) {
        // Hapus foto lokal
        $fotoPath = 'assets/img/' . $siswa['foto'];
        if (file_exists($fotoPath) && is_file($fotoPath)) {
            unlink($fotoPath);
        }

        // Hapus data dari DB
        $this->siswa->delete($id);
        return redirect()->to('/');
    }

    return redirect()->to('/');
    }

    // 
    public function detail($id)
    {
    $siswa = $this->siswa->find($id);

    $data = [
        'title' => 'Test Recruitment - Detail Data',
        'siswa' => $siswa
    ];

    return view('dt_siswa/detail_dtSiswa', $data);
    }

    // 
    public function edit($id)
    {
    $siswa = $this->siswa->find($id);

    $data = [
        'title' => 'Test Recruitment - Edit Data',
        'siswa' => $siswa
    ];

    return view('dt_siswa/edit_dtSiswa', $data);
    }

    // 
    public function update($id)
    {
        $siswa = $this->siswa->find($id);
    
        // Proses foto
        $foto = $this->request->getFile('foto');
        $fotoName = $siswa['foto'];
        if ($foto && $foto->isValid() && !$foto->hasMoved()) {
            $fotoName = $foto->getRandomName();
            $foto->move('assets/img', $fotoName);
            if (file_exists('assets/img/' . $siswa['foto'])) {
                unlink('assets/img/' . $siswa['foto']);
            }
        }
    
        // Ambil data, pakai data lama jika input kosong
        $dataBaru = [
            'nama'           => $this->request->getVar('nama') ?: $siswa['nama'],
            'nim'            => $this->request->getVar('nim') ?: $siswa['nim'],
            'notelp'         => $this->request->getVar('notelp') ?: $siswa['notelp'],
            'jenis_kelamin'  => $this->request->getVar('jenis_kelamin') ?: $siswa['jenis_kelamin'],
            'tempat_lahir'   => $this->request->getVar('tempat_lahir') ?: $siswa['tempat_lahir'],
            'tanggal_lahir'  => $this->request->getVar('tanggal_lahir') ?: $siswa['tanggal_lahir'],
            'alamat'         => $this->request->getVar('alamat') ?: $siswa['alamat'],
            'foto'           => $fotoName
        ];
    
        $this->siswa->update($id, $dataBaru);
    
        return redirect()->to('/detailSiswa/' . $id);
    }
    

}
