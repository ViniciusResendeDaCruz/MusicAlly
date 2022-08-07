<?php

namespace App\Models;

use CodeIgniter\Model;

class OuveModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'usuario_ouve_musica';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['usuario_id','musica_registro','reproducoes'];

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

    public function adicionaReproducao($usuario_id,$musica_registro)
    {
        $verifica = $this->where(['usuario_id'=>$usuario_id,'musica_registro'=>$musica_registro])->first();
        if (!is_null($verifica)) {
            return $this->set('reproducoes','reproducoes+1',FALSE)->where(['usuario_id'=>$usuario_id,'musica_registro'=>$musica_registro])->update();
        }
        return $this->insert(['usuario_id'=>$usuario_id,'musica_registro'=>$musica_registro]);
    }

    public function qtdReproducoesUsuario($usuario_id)
    {
        //SELECT SUM(reproducoes) FROM `usuario_ouve_musica` WHERE usuario_id = '1'
        return $this->select('SUM(reproducoes) as reproducoes')->where('usuario_id',$usuario_id)->first();
    }

    public function qtdReproducoesMusicaUsuario($usuario_id,$musica_registro)
    {
        # code...SELECT SUM(reproducoes) FROM `usuario_ouve_musica` WHERE usuario_id = '1' and musica_registro = '103'
        return $this->select('SUM(reproducoes) as reproducoes')->where('usuario_id',$usuario_id)->where('musica_registro',$musica_registro)->first();
    }

    public function musicasOuvidaUsuario($usuario_id)
    {
        #  SELECT musica_registro, musicas.nome, SUM(usuario_ouve_musica.reproducoes) FROM `usuario_ouve_musica`
        // JOIN musicas on musicas.registro = musica_registro
        // where usuario_id = '1'
        // group by (musicas.registro)
        return $this->select('musicas.nome,SUM(usuario_ouve_musica.reproducoes) as musicaQuantidade')->
        join('musicas','musicas.registro = musica_registro')->
        where('usuario_id',$usuario_id)->groupBy('musicas.nome')->get()->getResultArray();
    }



}
