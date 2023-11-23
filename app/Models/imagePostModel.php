<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Models\UserModel;

class imagePostModel extends Model
{
    protected $table = 'posts';
    protected $primaryKey = 'pId';
    protected $allowedFields = [
        'user_id',
        'post_Img',
        'post_text'
    ];

    public function user(){
        return $this->belongsTo(UserModel::class,'user_id','id');
    }
}