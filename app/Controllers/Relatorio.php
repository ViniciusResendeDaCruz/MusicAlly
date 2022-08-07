<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MusicasModel;
use App\Models\OuveModel;
use App\Models\PlaylistsModel;
use App\Models\PlaylistsMusicasModel;

class Relatorio extends BaseController
{
    private $playlistModel;
    private $playlist_musicas;
    private $musicasModel;
    private $ouveModel;

    public function __construct() {
        $this->playlistModel = new PlaylistsModel();
        $this->playlist_musicas = new PlaylistsMusicasModel();
        $this->musicasModel = new MusicasModel();
        $this->ouveModel = new OuveModel();
    }
    public function index()
    {
        return view('Relatorio/relatorio',[
            'user'=>$this->session->user, 
            'playlists'=>$this->playlistModel->getUserPlaylists($this->session->user['id']),
            'musicas_ouvidas_usuario' => $this->ouveModel->musicasOuvidaUsuario($this->session->user['id']),
            'musicas' => $this->session->user['tipo'] == 'P' ? $this->musicasModel->getMusicasByMusicoId($this->session->user['id']) : []
        ]);
    }
}
