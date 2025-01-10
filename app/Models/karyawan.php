<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
    protected $table = 'karyawan';
    protected $fillable = ['nip','nama_karyawan','gaji_karyawan','alamat','jenis_kelamin','foto','departemen_id'];
    //
    
    public function departemen(){

        return $this->belongsTo('App\Models\Departemen');
    }
}
