<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['Category'];

    public function top()
    {
        return $this->hasMany(Top::class);
    }

    use HasFactory;
}
