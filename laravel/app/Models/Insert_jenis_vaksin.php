<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insert_jenis_vaksin extends Model
{
    use HasFactory;

    protected $table = 'jv_form';
    protected $primarykey = 'id';
    public $timestamps = false;
}
