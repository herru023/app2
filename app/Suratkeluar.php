<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suratkeluar extends Model
{
	protected $table ="suratkeluar";

	protected $fillable =['id_suratkeluar','noberkas','alamatpenerima','tglsurat','dari','prihal'];
} 