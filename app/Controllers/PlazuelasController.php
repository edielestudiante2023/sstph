<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class PlazuelasController extends BaseController
{
    public function __construct()
    {
        if (session()->get('role') != "plazuelas") {
            echo 'Access denied';
            exit;
        }
    }
    public function index()
    {
        return view("plazuelas/dashboard");
    }
}
