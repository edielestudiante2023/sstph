<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Triunfo1Controller extends BaseController
{
    public function __construct()
    {
        if (session()->get('role') != "triunfo1") {
            echo 'Access denied';
            exit;
        }
    }
    public function index()
    {
        return view("triunfo1/dashboard");
    }
}
