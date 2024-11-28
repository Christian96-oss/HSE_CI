<?php

namespace App\Models;

use CodeIgniter\Model;

class FireExtinguisherModel extends Model
{
    protected $table            = 'tbl_apar';
    protected $allowedFields    = [
        'nomor_apar',
        'brand',
        'tipe',
        'berat',
        'plant',
        'lokasi',
        'expired',
        'img',
        'status',
        'record_date'
    ];
}
