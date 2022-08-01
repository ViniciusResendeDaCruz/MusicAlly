<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsuariosModel;

class Cadastro extends BaseController
{
    private $usuariosModel;

    public function __construct() {
        $this->usuariosModel = new UsuariosModel();
    }
    public function index()
    {
        return view('Cadastro/cadastro');
    }

    public function cadastro()
    {
        $post = $this->request->getPost();

        if($post['senha'] != $post['repeteSenha']) return view('cadastro/cadastro',['mensagem'=>'As senhas não coincidem']);
        if(isset($post['produtor'])) $tipo =  'P';
        else $tipo = 'N';

        $this->usuariosModel->cadastrarUsuário($post['nome'],$post['email'],$post['senha'],$tipo);
        return redirect()->to('login')->with('mensagem','Cadastro realizado com sucesso, realize seu login abaixo');
    }
}
