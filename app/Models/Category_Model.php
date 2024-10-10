<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category_Model extends Model
{
    use HasFactory;
    protected $table = "category";
    protected $id = "id";
    protected $fillable = [
        "id","name","img"
    ];
}
