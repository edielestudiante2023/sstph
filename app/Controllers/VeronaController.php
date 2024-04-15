<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class VeronaController extends BaseController
{
    public function __construct()
    {
        if (session()->get('role') != "verona") {
            echo 'Access denied';
            exit;
        }
    }
    public function index()
    {
        return view("verona/dashboard");
    }
}
