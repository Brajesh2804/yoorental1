<?php

namespace App\Controllers\Tenant;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        if (!session()->get('userlogin')) {
            return redirect()->to('/admin');
        }

        if (session()->get('role') != 'renter') {
            return redirect()->to('/unauthorized');
        }

        return view('renter/dashboard');
    }
}