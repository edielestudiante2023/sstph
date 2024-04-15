<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class TucanesController extends BaseController
{
    public function __construct()
    {
        if (session()->get('role') != "tucanes") {
            echo 'Access denied';
            exit;
        }
    }
    public function index()
    {
        return view("tucanes/dashboard");
    }
}
