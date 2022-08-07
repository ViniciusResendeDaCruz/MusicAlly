<?php

namespace App\Controllers\Ajax;

use App\Controllers\BaseController;
use App\Models\Avalia;
use App\Models\MusicasModel;
use App\Models\OuveModel;

class Musica extends BaseController
{
    private $musicaModel;
    private $avaliaModel;
    private $ouveModel;



    public function __construct() {
        $this->avaliaModel = new Avalia();
        $this->musicaModel = new MusicasModel();
        $this->ouveModel = new OuveModel();
    }
    public function index()
    {
        return redirect()->to('Musica');
    }

    public function musicoMusicas()
    {
        return view('myMusica/tabela/musicas_table',['musicas'=>$this->musicaModel->getMusicasByMusicoId($this->session->user['id'])]);
    }

    public function novaMusica($nome,$duracao,$arquivo)
    {
        return $this->musicaModel->cadastrarMusica($nome,$duracao,$arquivo,$this->session->user['id']) ? 'Sucesso':'Error';
    }

    public function removeMusica($id)
    {
        return $this->musicaModel->removeMusica($id);
    }

    public function alteraMusica($registro,$nome,$duracao,$arquivo)
    {
        return $this->musicaModel->alteraMusica($registro,$nome,$duracao,$arquivo,$this->session->user['id']);
    }

    public function modalAlterarMusica($registro)
    {
        return view('myMusica/modal/alterarModal',['musica'=>$this->musicaModel->getMusicaByRegistro($registro)]);
    }

    public function newRating($registro,$rating)
    {
        $this->avaliaModel->novaAvaliacao($this->session->user['id'],$registro,$rating);
    }

    public function newPlay($registro)
    {
        
        $this->ouveModel->adicionaReproducao($this->session->user['id'],$registro);
        return $this->musicaModel->newPlay($registro);
    }
}
