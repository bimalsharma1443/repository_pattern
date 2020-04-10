<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Repository\CustomerRepository;
use Illuminate\Http\Request;
 
class CustomerController extends Controller
{

    protected $customerRepository;

    public function __construct(CustomerRepository $customerRepository)
    {
        $this->customerRepository = $customerRepository;
    }

    public function index()
    {
        $customer = $this->customerRepository->getAll();
        print_r($customer);
    }

    public function getCustomer($id)
    {
        $customer = $this->customerRepository->viewById($id);
        print_r($customer);
    }

    public function editCustomer($id)
    {
        $this->customerRepository->updateNameById($id);
        
        return redirect("/customer/".$id);
        
    }

    public function deleteCustomer($id)
    {
        $this->customerRepository->distroy($id);
        
        return redirect("/");
    }
}
