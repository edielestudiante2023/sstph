<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class XxxxController extends BaseController
{
    public function __construct()
    {
        if (session()->get('role') != "xxxx") {
            echo 'Access denied';
            exit;
        }
    }
    public function index()
    {
        return view("xxxx/dashboard");
    }
}
