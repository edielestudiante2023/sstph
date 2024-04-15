<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class PratumController extends BaseController
{
    public function __construct()
    {
        if (session()->get('role') != "pratum") {
            echo 'Access denied';
            exit;
        }
    }
    public function index()
    {
        return view("pratum/dashboard");
    }
}
