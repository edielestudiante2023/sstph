<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AlcaparroController extends BaseController
{
    public function __construct()
    {
        if (session()->get('role') != "alcaparro") {
            echo 'Access denied';
            exit;
        }
    }
    public function index()
    {
        return view("alcaparro/dashboard");
    }
}
