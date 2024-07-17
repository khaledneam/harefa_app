<?php

namespace Modules\Dawry\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dawry extends Model
{
    use HasFactory;
    protected $table = 'dawries';
    protected $guarded =['*'];
}
