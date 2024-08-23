<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class TorresdelasamericasController extends BaseController
{
    public function __construct()
    {
        if (session()->get('role') != "torresdelasamericas") {
            echo 'Access denied';
            exit;
        }
    }
    public function index()
    {
        return view("torresdelasamericas/dashboard");
    }
}
