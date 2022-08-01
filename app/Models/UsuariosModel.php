<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuariosModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'usuarios';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id','nome','sobrenome','email','senha','tipo'];

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

    public function cadastrarUsuário($nome,$email,$senha,$tipo)
    {
        $senha = password_hash($senha,PASSWORD_DEFAULT);
        return $this->insert(['nome'=>$nome,'email'=>$email,'senha'=>$senha,'tipo'=>$tipo]);
    }

    public function alteraCadastro($id,$nome,$email,$senha,$tipo)
    {
        $senha = password_hash($senha,PASSWORD_DEFAULT);
        return $this->update($id,['nome'=>$nome,'email'=>$email,'senha'=>$senha,'tipo'=>$tipo]);
    }

    public function removeCadastro($id)
    {
        return $this->where('id',$id)->delete();
    }

    public function getUserByEmail($email)
    {
        return $this->where('email',$email)->first();
    }

    public function verificaLogin($email,$senha)
    {
        $user = $this->getUserByEmail($email);

        if (isset($user['senha']) and password_verify($senha,$user['senha'])) return $user;
        return null;
    }
}
