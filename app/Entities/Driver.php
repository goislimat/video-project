<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Driver extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
		'name',
		'rg',
		'cpf',
		'salary',
		'email',
		'phone',
		'registration_date',
		'leaving_date',
	];

}
