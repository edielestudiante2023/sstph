<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AltavistaController extends BaseController
{
    public function __construct()
    {
        if (session()->get('role') != "altavista") {
            echo 'Access denied';
            exit;
        }
    }
    public function index()
    {
        return view("altavista/dashboard");
    }
}
