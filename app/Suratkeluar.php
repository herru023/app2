<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suratkeluar extends Model
{
	protected $table ="suratkeluar";

	protected $fillable =['id','noberkas','alamatpenerima','tglsurat','dari','prihal'];
} 