<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class SansebastianController extends BaseController
{
    public function __construct()
    {
        if (session()->get('role') != "sansebastian") {
            echo 'Access denied';
            exit;
        }
    }
    public function index()
    {
        return view("sansebastian/dashboard");
    }
}
