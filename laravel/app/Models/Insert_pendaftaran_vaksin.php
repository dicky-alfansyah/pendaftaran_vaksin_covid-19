<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insert_pendaftaran_vaksin extends Model
{
    use HasFactory;

    protected $table = 'data_pendaftaran_vaksin';
    protected $primarykey = 'id';
    public $timestamps = false;
    protected $fillable = ['dosis_vaksin','jenis_vaksin','nik', 'nama_lengkap', 'tanggal_lahir', 'no_hp','alamat','status','jadwal_vaksin'];

}

