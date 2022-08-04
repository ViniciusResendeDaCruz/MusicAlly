<?php

namespace App\Controllers\Ajax;

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
        return redirect()->to('musica');
    }

    public function musicoMusicas()
    {
        return view('musica/tabela/musicas_table',['musicas'=>$this->musicaModel->getMusicasByMusicoId($this->session->user['id'])]);
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
        return view('musica/modal/alterarModal',['musica'=>$this->musicaModel->getMusicaByRegistro($registro)]);
    }
}
