<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ZapaniiController extends BaseController
{
    public function __construct()
    {
        if (session()->get('role') != "zapanii") {
            echo 'Access denied';
            exit;
        }
    }
    public function index()
    {
        return view("zapanii/dashboard");
    }
}
