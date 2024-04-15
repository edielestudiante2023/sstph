<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class CaoboController extends BaseController
{
    public function __construct()
    {
        if (session()->get('role') != "caobo") {
            echo 'Access denied';
            exit;
        }
    }
    public function index()
    {
        return view("caobo/dashboard");
    }
}
