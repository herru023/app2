<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cutitahunan extends Model
{
	protected $table ="cuti_tahunan";

	protected $fillable =['id_cuti','nama','nip','pangkat','jabatan','unit', 'lamanya','jalankan','tgl_mulai','sampai_tgl', 'masuk_tgl'];
} 