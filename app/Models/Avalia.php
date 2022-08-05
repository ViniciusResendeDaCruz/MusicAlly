<?php

namespace App\Models;

use CodeIgniter\Model;

class Avalia extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'usuario_avalia_musica';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['usuario_id','musica_registro','avaliacao'];

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

    public function novaAvaliacao($usuario_id,$musica_registro,$avaliacao)
    {
        $verifica = $this->where(['usuario_id'=>$usuario_id,'musica_registro'=>$musica_registro])->first();
        if (!is_null($verifica)) {
            $this->set('avaliacao',$avaliacao)->where(['usuario_id'=>$usuario_id,'musica_registro'=>$musica_registro])->update();
            dd($this->db->getLastQuery());
        }
        return $this->insert(['usuario_id'=>$usuario_id,'musica_registro'=>$musica_registro,'avaliacao'=>$avaliacao]);
    }
    
}
