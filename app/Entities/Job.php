<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Job extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
		'driver_id',
		'customer_id',
		'type',
		'last_payment',
	];
	
	public function driver()
	{
	    return $this->belongsTo(Driver::class);
	}
	
	public function customer()
	{
	    return $this->belongsTo(Customer::class);
	}

	public function schoolTransport()
	{
	    return $this->hasOne(SchoolTransport::class);
	}

}
