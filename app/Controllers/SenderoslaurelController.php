<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class SenderoslaurelController extends BaseController
{
    public function __construct()
    {
        if (session()->get('role') != "senderoslaurel") {
            echo 'Access denied';
            exit;
        }
    }
    public function index()
    {
        return view("senderoslaurel/dashboard");
    }
}
