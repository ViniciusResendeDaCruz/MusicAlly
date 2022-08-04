<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Musica extends BaseController
{
    public function index()
    {
        if($this->session->user['tipo'] != 'P') return redirect()->to('home/deslog');
        
        return view('musica/musicas',['user'=>$this->session->user]);
    }
}
