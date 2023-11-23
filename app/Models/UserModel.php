<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'profile_pic',
        'email_id',
        'mobile_No',
        'fullName',
        'userName',
        'password',
        'resetToken',
        'bio',
        'addLink',
        'gender'
    ];
}