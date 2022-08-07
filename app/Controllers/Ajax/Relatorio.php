<?php

namespace App\Controllers\Ajax;

use App\Controllers\BaseController;
use App\Models\Avalia;
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
    private $avaliaModel;

    public function __construct() {
        $this->playlistModel = new PlaylistsModel();
        $this->playlist_musicas = new PlaylistsMusicasModel();
        $this->musicasModel = new MusicasModel();
        $this->ouveModel = new OuveModel();
        $this->avaliaModel = new Avalia();
    }

    public function index()
    {
        //
    }

    public function relatorioPlaylist($playlist_id)
    {
        return view('Relatorio/tabela/playlists_table',['playlist'=>$this->playlistModel->getPlaylistById($playlist_id),'musicas'=>$this->playlist_musicas->getMusicasPlaylists($playlist_id)]);
    }

    public function relatorioMusica($musica_registro)
    {
        return view('Relatorio/tabela/musica_table',[
            'musica'=>$this->musicasModel->getMusicaByRegistro($musica_registro),
            'qtdPlaylists'=>$this->playlist_musicas->getQuantidadePlaylistsMusica($musica_registro),
            'avaliacao'=>$this->avaliaModel->getAvaliacaoMusica($musica_registro)
        ]);
    }
}
