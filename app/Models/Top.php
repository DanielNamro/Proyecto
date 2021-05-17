<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Top extends Model
{
    protected $fillable = ['Name', 'Id_Categoria', 'Id_User'];

    use HasFactory;
}
