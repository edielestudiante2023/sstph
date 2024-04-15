<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class EdenluzController extends BaseController
{
    public function __construct()
    {
        if (session()->get('role') != "edenluz") {
            echo 'Access denied';
            exit;
        }
    }
    public function index()
    {
        return view("edenluz/dashboard");
    }
}
