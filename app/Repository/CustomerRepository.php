<?php

namespace App\Repository;

use App\Customer;

class CustomerRepository
{
    public function getAll() 
    {
        $customer = Customer::all()
            ->toJson();
        return $customer;
    }

    public function viewById($id)
    {
        $customer = Customer::findorFail($id)->toJson();
        return $customer;
    }

    public function updateNameById($id)
    {
        $customer = Customer::findorFail($id);
        $customer->update(request()->only('name'));
    }

    public function distroy($id)
    {
        $customer = Customer::findorFail($id);
        $customer->delete();
    }
}