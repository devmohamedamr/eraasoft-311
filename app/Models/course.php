<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    protected $table = "course";
    use HasFactory;

    public function category(){
        return $this->belongsTo("App\Models\categoryModel");
    }
}
