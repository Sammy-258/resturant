<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservation_users extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'type', 'table', 'people', 'date'];
}
