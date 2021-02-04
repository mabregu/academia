<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;

    const ZIP = 'ZIP';
    const VIDEO = 'VIDEO';
    const SECTION = 'SECTION';
}
