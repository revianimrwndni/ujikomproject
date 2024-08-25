<?php

namespace App\Models;

use CodeIgniter\Model;

class AspirationModel extends Model
{
    protected $table = 'aspirations';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'kelas', 'email', 'file', 'pesan', 'created_at'];
}
