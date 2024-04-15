<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class LucernaController extends BaseController
{
    public function __construct()
    {
        if (session()->get('role') != "lucerna") {
            echo 'Access denied';
            exit;
        }
    }
    public function index()
    {
        return view("lucerna/dashboard");
    }
}
