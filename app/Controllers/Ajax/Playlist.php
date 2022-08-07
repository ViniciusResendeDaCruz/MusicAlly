<?php

namespace App\Controllers\Ajax;

use App\Controllers\BaseController;
use App\Models\MusicasModel;
use App\Models\PlaylistsModel;
use App\Models\PlaylistsMusicasModel;

class Playlist extends BaseController
{
    private $playlistModel;
    private $playlist_musicas;
    private $musicasModel;

    public function __construct() {
        $this->playlistModel = new PlaylistsModel();
        $this->playlist_musicas = new PlaylistsMusicasModel();
        $this->musicasModel = new MusicasModel();
    }
    public function index()
    {
        //
    }
    public function userPlaylists()
    {
        return view('Playlist/tabela/playlist_table',
        ['playlists'=>$this->playlistModel->getUserPlaylists($this->session->user['id'])]);
    }

    public function novaPlaylist($nome,$descricao,$publica)
    {
        $publica = $publica == 'true' ? true : false;
        $this->playlistModel->cadastrarPlaylist($nome,$descricao,$this->session->user['id'],$publica);
        return 'Sucesso';
    }
    public function alterarPlaylist($playlist_id,$nome,$descricao,$publica)
    {
        $publica = $publica == 'true' ? 1:0;
        $this->playlistModel->alterarPlaylist($playlist_id,$nome,$descricao,$publica);
        dd($this->playlistModel->db->getLastQuery());
        
    }

    public function getMusicas($playlist_id){
        return view('Playlist/tabela/musicas_table',['musicas'=>$this->playlist_musicas->getMusicasPlaylists($playlist_id),'playlist_id'=>$playlist_id]);
    }

    public function getMusicasNotInPlaylistTableModal($playlist_id)
    {
        return view('Playlist/modal/tabela_adicionar_modal',['musicas'=>$this->musicasModel->getMusicasNotInPlaylists($playlist_id),'playlist_id'=>$playlist_id]);
    }

    public function adicionarMusicaPlaylist($id_musica,$id_playlist)
    {
        return $this->playlist_musicas->adicionaMusicaPlaylist($id_musica,$id_playlist);
    }

    public function removerMusicaPlaylist($id_musica,$id_playlist)
    {
        return $this->playlist_musicas->removeMusicaPlaylist($id_musica,$id_playlist);
    }

    public function acesso($playlist_id)
    {
        return $this->playlistModel->contabilizaAcesso($playlist_id);
    }

    public function removerPlaylist($playlist_id)
    {
        return $this->playlistModel->removerPlaylist($playlist_id);
    }
}
