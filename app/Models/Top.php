<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Top extends Model
{
    protected $fillable = ['Name', 'Id_Categoria', 'Id_User','Description','pn1','pn2','pn3','p1','p2','p3','enlace','enlace2','enlace3'];

    use HasFactory;


    public function coments()
    {
        return $this->hasMany(Commentary::class,"Top_id");
    }
    public function category()
    {
        return $this->belongsTo(Category::class,"Id_Categoria");
    }
    public function user()
    {
        return $this->belongsTo(User::class,"Id_User");
    }
}
