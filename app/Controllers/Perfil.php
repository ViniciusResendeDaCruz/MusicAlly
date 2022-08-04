<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Perfil extends BaseController
{
    public function index()
    {
        return view('perfil/perfil',['user'=>$this->session->user]);
    }

    public function alterarDados()
    {
        dd($this->request->getPost());
    }
}
