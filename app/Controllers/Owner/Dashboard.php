<?php

namespace App\Controllers\Owner;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        if (!session()->get('userlogin')) {
            return redirect()->to('/admin');
        }

        if (session()->get('role') != 'owner') {
            return redirect()->to('/unauthorized');
        }

        return view('owner/dashboard');
    }
}