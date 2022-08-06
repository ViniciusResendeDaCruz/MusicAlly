<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PlaylistsModel;

class Dashboard extends BaseController
{
    private $playlistModel;

    public function __construct() {
        $this->playlistModel = new PlaylistsModel();
    }
    
    public function index()
    {
        return view('dashboard/dashboard',['user'=>$this->session->user,'randPlaylists'=>$this->playlistModel->getRandPlaylists(5)]);
    }
}
