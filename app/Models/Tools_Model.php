<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tools_Model extends Model
{
    use HasFactory;
    protected $table = "_tools";
    protected $id = "id";
    protected $fillable = [
        "id","name","Rate_Per_Day","Rate_Per_Month","Rate_Per_Year","Rate_Per_Hour_With_Operator","Location","Description","cat_id","img",
    ];
}
