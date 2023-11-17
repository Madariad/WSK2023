<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ApiToken;

class Workspace extends Model
{
    use HasFactory;
    protected $hidden = [
        'updated_at',
        'created_at',
        'user_id'
    ];

    public  function apiToken()
    {
        return $this->hasMany(ApiToken::class);
    }
}
