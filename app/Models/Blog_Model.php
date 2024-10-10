<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog_Model extends Model
{
    use HasFactory;
    protected $table = "blog";
    protected $id = "id";
    protected $fillable = [
        "id","name","disp","roll"
    ];
}
