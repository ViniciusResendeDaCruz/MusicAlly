<?php

namespace App\Models;

use CodeIgniter\Model;

class MusicasModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'musicas';
    protected $primaryKey       = 'registro';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['registro','nome','duracao','arquivo','musico_id'];

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

    public function cadastrarMusica($registro,$nome,$duracao,$arquivo,$musico_id)
    {
        return $this->insert(['registro'=>$registro,'nome'=>$nome,'duracao'=>$duracao,'arquivo'=>$arquivo,'musico_id'=>$musico_id]);
    }

    public function getMusicaByRegistro($registro)
    {
        return $this->where('registro',$registro)->get()->first();
    }

    public function getMusicasByMusicoId($musico_id)
    {
        return $this->where('musico_id',$musico_id)->get()->getResultArray();
    }

    public function alteraMusica($registro,$nome,$duracao,$arquivo,$musico_id)
    {
        return $this->update($registro,['registro'=>$registro,'nome'=>$nome,'duracao'=>$duracao,'arquivo'=>$arquivo,'musico_id'=>$musico_id]);
    }

    public function removeMusica($registro)
    {
        return $this->where('registro',$registro)->delete();
    }

}
