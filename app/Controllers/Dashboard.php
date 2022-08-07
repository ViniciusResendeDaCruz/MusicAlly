<?php

namespace App\Controllers;


use App\Controllers\BaseController;
use App\Models\MusicasModel;
use App\Models\PlaylistsModel;

class Dashboard extends BaseController
{
    private $playlistModel;
    private $musicaModel;

    public function __construct() {
        $this->playlistModel = new PlaylistsModel();
        $this->musicaModel = new MusicasModel();
    }
    
    public function index()
    {
        return view('dashboard/dashboard',[
            'user'=>$this->session->user,
            'randPlaylists'=>$this->playlistModel->getRandPlaylists(5),
            'musicas'=>$this->musicaModel->getTop(5)
            ]
        );
    }
}
