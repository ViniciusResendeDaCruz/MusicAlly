<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Relatorio extends BaseController
{
    public function index()
    {
        return view('relatorio/relatorio',['user'=>$this->session->user]);
    }
}
