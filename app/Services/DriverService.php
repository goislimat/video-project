<?php
/**
 * Created by PhpStorm.
 * User: thiagogois
 * Date: 01/06/16
 * Time: 19:38
 */

namespace App\Services;


use App\Repositories\DriverRepository;

class DriverService
{

    /**
     * @var DriverRepository
     */
    private $repository;

    /**
     * DriverService constructor.
     * @param DriverRepository $repository
     */
    public function __construct(DriverRepository $repository)
    {
        $this->repository = $repository;
    }
    
    public function index()
    {
        return $this->repository->all();
    }
    
    public function store($data)
    {
        return $this->repository->create($data);
    }
    
    public function show($id)
    {
        $driver = $this->repository->find($id);
        $driver->salary = $this->getFormatedSalary($driver->salary);

        return $driver;
    }
    
    public function edit($id)
    {
        return $this->repository->find($id);
    }
    
    public function update($data, $id)
    {
        $this->repository->update($data, $id);
    }
    
    public function destroy($id)
    {
        $this->repository->delete($id);
    }

    private function getFormatedSalary($salary)
    {
        return number_format($salary/100, 2, ',', '.');
    }

}