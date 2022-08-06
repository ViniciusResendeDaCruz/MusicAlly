<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Relatorio extends BaseController
{
    public function index()
    {
        return view('Relatorio/relatorio',['user'=>$this->session->user]);
    }
}
