<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
	//protected $guarded = ['title','body','published_at'];
	 protected $fillable = [
	 	'title',
	 	'body',
	 	'published_at'
	 ];
}
