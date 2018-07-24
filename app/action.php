<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class action extends Model
{
    protected $table = 'siswa';
    protected $primaryKey = 'id_siswa';
    protected $fillable = ['id_kelas','fname','lname','email','phone','nisn','jk','dob']; //syarat : name=kolom db

    public function getFnameAttribute($value)
    {
        return ucfirst($value);
    }

    public function getLnameAttribute($value)
    {
        return ucfirst($value);
    }

    public function getDobAttribute($value)
    {
        return date('d-m-Y', strtotime($value));
    }
}
