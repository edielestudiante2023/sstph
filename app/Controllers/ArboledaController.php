<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ArboledaController extends BaseController
{
    public function __construct()
    {
        if (session()->get('role') != "arboleda") {
            echo 'Access denied';
            exit;
        }
    }
    public function index()
    {
        return view("arboleda/dashboard");
    }
}
