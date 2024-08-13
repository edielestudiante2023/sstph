<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class HuertoController extends BaseController
{
    public function __construct()
    {
        if (session()->get('role') != "huerto") {
            echo 'Access denied';
            exit;
        }
    }
    public function index()
    {
        return view("huerto/dashboard");
    }
}
