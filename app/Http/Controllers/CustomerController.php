<?php

namespace App\Http\Controllers;

use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        $customer = Customer::find(1);
        dd($customer);
    }
}
