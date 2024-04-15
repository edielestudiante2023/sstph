<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ZorzalController extends BaseController
{
    public function __construct()
    {
        if (session()->get('role') != "zorzal") {
            echo 'Access denied';
            exit;
        }
    }
    public function index()
    {
        return view("zorzal/dashboard");
    }
}
