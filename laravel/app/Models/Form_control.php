<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form_control extends Model
{
    use HasFactory;

    protected $table = 'control_form';
    protected $primarykey = 'id';
    public $timestamps = false;
}
