<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class NuevacastillaController extends BaseController
{
    public function __construct()
    {
        if (session()->get('role') != "nuevacastilla") {
            echo 'Access denied';
            exit;
        }
    }
    public function index()
    {
        return view("nuevacastilla/dashboard");
    }
}
