<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    protected $table = 'mst_user';

    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'gender',
        'ip_address',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
