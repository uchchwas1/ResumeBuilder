<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationDetails extends Model
{
    protected $fillable = ['school_name', 'school_location', 'degree', 'field_of_study', 'graduation_start_date', 'graduation_end_date'];
}
