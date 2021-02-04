<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    const PUBLISHED = 1;
    const PENDING = 2;
    const REJECTED = 3;
}
