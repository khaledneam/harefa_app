<?php

namespace Modules\Hezma\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hezma extends Model
{
    use HasFactory;
    protected $table = 'hezmas';
    protected $guarded = ['*'];
}
