<?php

namespace App\Models;

use CodeIgniter\Model;

class PlaylistsMusicasModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'playlists_musicas';
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
        return $this->select('musicas.*,usuarios.nome as artistaNome')->
        join('musicas','musicas.registro = musica_id')->
        join('usuarios','usuarios.id = musicas.musico_id','left')->
        where('playlist_id',$playlist_id)->
        get()->getResultArray();
    }

    // select musicas.*, usuarios.nome as artistaNome from musicas
    // left join usuarios on usuarios.id = musicas.musico_id
    // where musicas.registro not IN 
    //
    // (select musicas.registro from playlists_musicas
    // 	join musicas on musicas.registro = musica_id
    // 	where playlist_id = '66')
    public function getMusicasNotInPlaylists($playlist_id){
        $subquery = $this->from('playlists_musicas')->join('musicas','musicas.registro = musicas_id')->where('playlist_id',$playlist_id);
        // dd($this->db);
        $this->select('musicas.*,usuarios.nome as artistaNome')->join('usuarios','usuarios.id = musicas.musico_id','left')->whereNotIn('musicas.registro',$subquery)->get()->getResultArray();
    }

    public function getQuantidadeMusicasPlaylist($playlist_id)
    {
        return $this->select('count(*)')->where('playlist_id',$playlist_id);
    }

    public function getQuantidadePlaylistsMusica($musica_registro)
    {
        //SELECT count(*) FROM `playlists_musicas` WHERE musica_id = '1'
        return $this->select('count(*) as qtd')->where('musica_id',$musica_registro)->first();
    }

}
