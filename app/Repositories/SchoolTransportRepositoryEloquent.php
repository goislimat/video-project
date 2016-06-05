<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\SchoolTransportRepository;
use App\Entities\SchoolTransport;
use App\Validators\SchoolTransportValidator;

/**
 * Class SchoolTransportRepositoryEloquent
 * @package namespace App\Repositories;
 */
class SchoolTransportRepositoryEloquent extends BaseRepository implements SchoolTransportRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return SchoolTransport::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
