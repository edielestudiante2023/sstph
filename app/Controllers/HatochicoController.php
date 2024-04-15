<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class HatochicoController extends BaseController
{
    public function __construct()
    {
        if (session()->get('role') != "hatochico") {
            echo 'Access denied';
            exit;
        }
    }
    public function index()
    {
        return view("hatochico/dashboard");
    }
}
