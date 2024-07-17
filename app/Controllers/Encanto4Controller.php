<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Encanto4Controller extends BaseController
{
    public function __construct()
    {
        if (session()->get('role') != "encanto4") {
            echo 'Access denied';
            exit;
        }
    }
    public function index()
    {
        return view("encanto4/dashboard");
    }
}
