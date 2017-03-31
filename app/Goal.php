<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{

	public $table = "goals";
    protected $fillable = [
        'name', 'description',
    ];
}
