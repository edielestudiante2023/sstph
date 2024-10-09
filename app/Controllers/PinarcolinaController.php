<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class PinarcolinaController extends BaseController
{
    public function __construct()
    {
        if (session()->get('role') != "pinarcolina") {
            echo 'Access denied';
            exit;
        }
    }
    public function index()
    {
        return view("pinarcolina/dashboard");
    }
}
