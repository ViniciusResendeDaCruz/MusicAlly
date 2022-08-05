<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MusicasModel;

class Musica extends BaseController
{
    private $musicaModel;

    public function __construct() {
        $this->musicaModel = new MusicasModel();
    }

    public function index()
    {
        if($this->session->user['tipo'] != 'P') return redirect()->to('home/deslog');
        
        return view('myMusica/musicas',['user'=>$this->session->user]);
    }

    public function player($registro)
    {
        return view('musica/player',['user'=> $this->session->user,'musica'=>$this->musicaModel->getMusicaByRegistro($registro)]);
    }
}
