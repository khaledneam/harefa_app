<?php

namespace Modules\Challenge\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Challenge extends Model
{
    use HasFactory;
    protected $table = 'challenges';
    protected $guarded = ['*'];
}
