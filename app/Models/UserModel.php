<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'password'];

    public function findByUsername($username)
    {
        return $this->where('username', $username)->first();
    }
}
