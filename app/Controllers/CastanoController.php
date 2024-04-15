<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class CastanoController extends BaseController
{
    public function __construct()
    {
        if (session()->get('role') != "castano") {
            echo 'Access denied';
            exit;
        }
    }
    public function index()
    {
        return view("castano/dashboard");
    }
}
