<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class SantabarbaraController extends BaseController
{
    public function __construct()
    {
        if (session()->get('role') != "santabarbara") {
            echo 'Access denied';
            exit;
        }
    }
    public function index()
    {
        return view("santabarbara/dashboard");
    }
}
