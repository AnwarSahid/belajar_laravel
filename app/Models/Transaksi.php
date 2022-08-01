<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    public function getuser()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
