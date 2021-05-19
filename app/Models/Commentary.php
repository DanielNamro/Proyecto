<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentary extends Model
{
    protected $fillable = ['User_id', 'Top_id', 'Text'];
    use HasFactory;

    public function top()
    {
        return $this->belongsTo(Top::class, "parte_tarea_id");
    }
}
