<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suratmasuk extends Model
{
	protected $table ="suratmasuk";

	protected $fillable =['id','suratdari','tglsurat','nosurat','tglditerima','untuk','prihal'];
} 