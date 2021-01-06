<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studentDetails extends Model
{
    use HasFactory;
    protected $table = "student_details";
    protected $fillable = ["studentNumber","name","surname","placeAttached", "programme","address","latitude","longitude"];
}
