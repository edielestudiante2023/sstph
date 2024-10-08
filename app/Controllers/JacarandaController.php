<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class JacarandaController extends BaseController
{
    public function __construct()
    {
        if (session()->get('role') != "jacaranda") {
            echo 'Access denied';
            exit;
        }
    }
    public function index()
    {
        return view("jacaranda/dashboard");
    }
}
