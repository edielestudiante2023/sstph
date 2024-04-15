<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ChaletlacabanaController extends BaseController
{
    public function __construct()
    {
        if (session()->get('role') != "chaletlacabana") {
            echo 'Access denied';
            exit;
        }
    }
    public function index()
    {
        return view("chaletlacabana/dashboard");
    }
}
