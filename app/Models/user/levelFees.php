<?php

namespace App\Models\user;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class levelFees extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'user_id', 'user_name', 'level_id', 'level', 'trxId', 'img', 'status', 'referal'
    ];
}
