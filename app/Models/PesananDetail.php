<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesananDetail extends Model
{
    use HasFactory;
    public function menu()
	{
	      return $this->belongsTo('App\Models\Menu','menu_id', 'id');
	}

	public function pesanan()
	{
	      return $this->belongsTo('App\Models\Pesanan','pesanan_id', 'id');
	}
}
