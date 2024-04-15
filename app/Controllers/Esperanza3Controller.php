<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Esperanza3Controller extends BaseController
{
    public function __construct()
    {
        if (session()->get('role') != "esperanza3") {
            echo 'Access denied';
            exit;
        }
    }
    public function index()
    {
        return view("esperanza3/dashboard");
    }
}
