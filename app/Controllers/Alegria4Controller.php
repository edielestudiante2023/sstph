<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Alegria4Controller extends BaseController
{
    public function __construct()
    {
        if (session()->get('role') != "alegria4") {
            echo 'Access denied';
            exit;
        }
    }
    public function index()
    {
        return view("alegria4/dashboard");
    }
}
