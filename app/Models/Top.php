<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Top extends Model
{
    protected $fillable = ['Name', 'Id_Categoria', 'Id_User','Description'];

    use HasFactory;


    public function coments()
    {
        return $this->hasMany(Commentary::class,"Top_id");
    }
}
