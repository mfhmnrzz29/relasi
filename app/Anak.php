<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anak extends Model
{
    //
    protected $table = 'anaks';
    protected $fillable = ['nama','orangtua_id','umur','alamat'];
    protected $visible = ['nama','orangtua_id','umur','alamat']; 
    public $timestamps = true;

    public function orangtua()
    {
    	//belongsTo menunjukkan siapa yang memiliki data tabel anak
    	return $this->belongsTo('App\OrangTua', 'orangtua_id');
    }
}
