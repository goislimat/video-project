<?php

namespace App\Entities;

use App\Http\Utils\Document;
use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Customer extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'document_type',
        'document_number'
    ];

}
