<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agendacamat extends Model
{
	protected $table ="agendacamat";

	protected $fillable =['id_agenda','tglkegiatan','kegiatan','hari','waktu','tempat', 'bertugas'];
} 