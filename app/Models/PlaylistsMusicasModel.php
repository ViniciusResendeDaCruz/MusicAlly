<?php

namespace App\Models;

use CodeIgniter\Model;

class PlaylistsMusicasModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'playlistsmusicas';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['musica_id','playlist_id'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function adicionaMusicaPlaylist($musica_id,$playlist_id)
    {
        return $this->insert(['musica_id'=>$musica_id,'playlist_id'=>$playlist_id]);
    }

    public function removeMusicaPlaylist($musica_id,$playlist_id)
    {
        return $this->where(['musica_id'=>$musica_id,'playlist_id'=>$playlist_id])->delete();
    }

    public function getMusicasPlaylists($playlist_id)
    {
        return $this->select('musicas.*')->
        join('musicas','musicas.registro = musica_id')->
        where('playlist_id',$playlist_id)->
        get()->getResultArray();
    }
}
