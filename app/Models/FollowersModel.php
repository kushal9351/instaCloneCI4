<?php

namespace App\Models;

use CodeIgniter\Model;

class FollowersModel extends Model
{
    protected $table = 'follower_list';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'follower_id',
        'user_id'
    ];
}