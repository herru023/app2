<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suratimb extends Model
{
	protected $table ="suratimb";

	protected $fillable =['id','nosurat','tglsurat','nama','alamat','jenis', 'luas','lokasi'];
} 