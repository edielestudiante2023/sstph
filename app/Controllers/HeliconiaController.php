<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class HeliconiaController extends BaseController
{
    public function __construct()
    {
        if (session()->get('role') != "heliconia") {
            echo 'Access denied';
            exit;
        }
    }
    public function index()
    {
        return view("heliconia/dashboard");
    }
}
