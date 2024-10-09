<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class SaucoController extends BaseController
{
    public function __construct()
    {
        if (session()->get('role') != "sauco") {
            echo 'Access denied';
            exit;
        }
    }
    public function index()
    {
        return view("sauco/dashboard");
    }
}
