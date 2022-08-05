<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsuariosModel;

class Perfil extends BaseController
{
    private $usuariosModel;

    public function __construct() {
        $this->usuariosModel = new UsuariosModel();
    }

    public function index()
    {
        return view('perfil/perfil',['user'=>$this->session->user]);
    }

    public function alterarDados()
    {
        $post = $this->request->getPost();
        $this->usuariosModel->alteraCadastro($this->session->user['id'],$post['nome'],$post['sobrenome'],$post['email'],$post['senha']);
        $user['nome'] = $post['nome'];
        $user['sobrenome'] = $post['sobrenome'];
        $user['email'] = $post['email'];
        $user['id'] = $this->session->user['id'];
        $user['tipo'] = $this->session->user['tipo'];

        $this->session->set('user',$user);

        return redirect()->to('perfil');
    }

    public function excluirConta()
    {
        return $this->usuariosModel->removeCadastro($this->session->user['id']);
    }
}
