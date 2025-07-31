<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaModel extends Model
{
    protected $table = 'data_siswa';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'nama',
        'nim',
        'notelp',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'foto',
    ];
}