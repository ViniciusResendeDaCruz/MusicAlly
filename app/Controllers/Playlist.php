<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PlaylistsModel;
use App\Models\PlaylistsMusicasModel;

class Playlist extends BaseController
{
    private $playlistModel;
    private $playlistMusicasModel;

    public function __construct() {
        $this->playlistModel = new PlaylistsModel();
        $this->playlistMusicasModel = new PlaylistsMusicasModel();
    }
    public function index(){
        return view('Playlist/playlists',['user'=>$this->session->user]);
    }

    public function playlist($id){
        if(! $this->playlistModel->verificaDono($this->session->user['id'],$id)) return redirect()->to('dashboard');

        return view('Playlist/musicas',['user'=>$this->session->user, 'playlist'=>$this->playlistModel->getPlaylistById($id)]);
    }
}
