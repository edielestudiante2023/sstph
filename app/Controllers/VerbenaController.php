<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class VerbenaController extends BaseController
{
    public function __construct()
    {
        if (session()->get('role') != "verbena") {
            echo 'Access denied';
            exit;
        }
    }
    public function index()
    {
        return view("verbena/dashboard");
    }
}
