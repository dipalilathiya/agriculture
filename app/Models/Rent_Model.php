<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rent_Model extends Model
{
    use HasFactory;
    protected $table = "rent";
    protected $id = "id";
    protected $fillable = [
        "id","u_id","name","Starting_Date","Ending_Date","Price","Status","Directions","Hire_Type","img"
    ];
}
