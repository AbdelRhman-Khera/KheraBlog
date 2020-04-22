<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model {
	public function cats() {
		return $this->belongsTo('App\Category', 'category_id', 'id');
	}
}
