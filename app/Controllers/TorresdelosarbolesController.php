<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class TorresdelosarbolesController extends BaseController
{
    public function __construct()
    {
        if (session()->get('role') != "torresdelosarboles") {
            echo 'Access denied';
            exit;
        }
    }
    public function index()
    {
        return view("torresdelosarboles/dashboard");
    }
}
