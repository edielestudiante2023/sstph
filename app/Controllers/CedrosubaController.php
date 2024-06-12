<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class CedrosubaController extends BaseController
{
    public function __construct()
    {
        if (session()->get('role') != "cedrosuba") {
            echo 'Access denied';
            exit;
        }
    }
    public function index()
    {
        return view("cedrosuba/dashboard");
    }
}
