<?php

namespace App\Models;

use CodeIgniter\Model;

class MessageModel extends Model
{
    protected $table = 'messages';
    protected $primaryKey = 'id';
    protected $allowedFields = ['from_user_id', 'to_user_id', 'message', 'status'];

    public function sendMessage($fromUserId, $toUserId, $message)
    {
        $data = [
            'from_user_id' => $fromUserId,
            'to_user_id' => $toUserId,
            'message' => $message,
            'status' => 1, // 1 for unread, change as needed
        ];

        return $this->insert($data);
    }

    public function getMessages($fromUserId, $toUserId)
    {
        return $this->where('(from_user_id = ' . $fromUserId . ' AND to_user_id = ' . $toUserId . ')')
                    ->orWhere('(from_user_id = ' . $toUserId . ' AND to_user_id = ' . $fromUserId . ')')
                    ->orderBy('id', 'ASC')
                    ->findAll();
    }
}
