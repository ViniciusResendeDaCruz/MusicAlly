<?php

namespace App\Models;

use CodeIgniter\Model;

class PlaylistsModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'playlists';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id','nome','descricao','publica','usuario_id','acessos'];

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

    public function cadastrarPlaylist($nome,$descricao,$usuario_id,$publica=false)
    {
        return $this->insert(['nome'=>$nome,'descricao'=>$descricao,'publica'=>$publica,'usuario_id'=>$usuario_id]);
    }

    public function alterarPlaylist($id,$nome,$descricao,$publica)
    {
        return $this->update($id,['nome'=>$nome,'publica'=>$publica,'descricao'=>$descricao]);
    }

    public function removerPlaylist($id)
    {
        return $this->where('id',$id)->delete();
    }

    public function getUserPlaylists($id)
    {
        return $this->where('usuario_id',$id)->get()->getResultArray();
    }

    public function verificaDono($usuario_id, $playlist_id)
    {
        $playlist = $this->where('id',$playlist_id)->first();
        // dd($playlist);
        if($playlist['publica'] == "1") return true;
        // dd($dono_id);

        return $usuario_id == $playlist['usuario_id'] ? true : false;
    }

    public function getPlaylistById($id)
    {
        return $this->where('id',$id)->first();
    }

    // SELECT playlists.*, usuarios.nome as dono FROM playlists
    // JOIN usuarios on usuarios.id = usuario_id
    // where publica = true

    // ORDER BY RAND()
    // LIMIT 5

    public function getRandPlaylists($quantidade)
    {
        return $this->select('playlists.*,usuarios.nome as dono')->
        join('usuarios','usuarios.id = usuario_id')->
        where('publica',true)->
        orderBy('RAND()')->
        get($quantidade)->getResultArray();
    }

    public function contabilizaAcesso($playlist_id)
    {
        $this->set('acessos','acessos+1',FALSE);
        return $this->update($playlist_id);
    }
}
