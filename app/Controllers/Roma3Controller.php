<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Roma3Controller extends BaseController
{
    public function __construct()
    {
        if (session()->get('role') != "roma3") {
            echo 'Access denied';
            exit;
        }
    }
    public function index()
    {
        return view("roma3/dashboard");
    }
}
