<?php

namespace App\Models;

use CodeIgniter\Model;

class TabunganModel extends Model
{
    protected $table = 'tabungan';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'saldo'
    ];
}