<?php

namespace App\Controllers;

use App\Models\CustomerModel;
use App\Models\UserModel;

class Home extends BaseController
{
    public function index()
    {
        $customerModel = new CustomerModel();
        $userModel = new UserModel();

        $data = [
            'title' => 'Home - SwiftPOS',
            'active' => 'home',
            'totalCustomers' => $customerModel->countAllResults(),
            'totalUsers' => $userModel->countAllResults()
        ];

        return view('home', $data);
    }
}
