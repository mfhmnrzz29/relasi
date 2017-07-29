<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrangTua extends Model
{
    //
    protected $table = 'orang_tuas';
    protected $fillable = ['nama_ibu','nama_ayah','umur_ibu','umur_ayah','alamat'];
    protected $visible = ['nama_ibu','nama_ayah','umur_ibu','umur_ayah','alamat'];
    public $timestamps = true;

    public function anak()
    {
    	//orangtua dapat memiliki banyak data dari tabel anak
    	return $this->hasMany('App\Anak', 'orangtua_id');
    }
}
