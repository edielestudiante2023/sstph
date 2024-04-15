<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Zapan1Controller extends BaseController
{
    public function __construct()
    {
        if (session()->get('role') != "zapan1") {
            echo 'Access denied';
            exit;
        }
    }
    public function index()
    {
        return view("zapan1/dashboard");
    }
}
