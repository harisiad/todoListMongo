<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends \Jenssegers\Mongodb\Eloquent\Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'todos';
}
