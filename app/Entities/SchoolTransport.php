<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class SchoolTransport extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
		'job_id',
		'school',
		'started_at',
		'class_start_at',
		'class_finish_at',
		'monthly_payment',
		'leaved_at',
	];
	
	public function job()
	{
	    return $this->belongsTo(Job::class);
	}

}
