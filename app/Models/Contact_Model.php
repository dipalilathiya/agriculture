<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact_Model extends Model
{
    use HasFactory;
    protected $table = "contact";
    protected $id = "id";
    protected $fillable = [
        "id","name","email","Message"
    ];
}
