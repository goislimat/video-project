<?php
/**
 * Created by PhpStorm.
 * User: thiagogois
 * Date: 01/06/16
 * Time: 13:44
 */

namespace App\Services;


use App\Http\Utils\Document;
use App\Repositories\CustomerRepository;

class CustomerService
{
    /**
     * @var CustomerRepository
     */
    private $repository;

    /**
     * CustomerService constructor.
     * @param CustomerRepository $repository
     */
    public function __construct(CustomerRepository $repository)
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
        $customer =  $this->repository->find($id);
        $customer->document_type = Document::getDocument($customer->document_type);
        
        return $customer;
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
}