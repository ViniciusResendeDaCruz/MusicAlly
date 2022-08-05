<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsuariosModel;

class Login extends BaseController
{
    private $usuariosModel;

    public function __construct() {
        $this->usuariosModel = new UsuariosModel();
    }
    public function index()
    {
        if(isset($this->session->mensagem))return view('Login/login',['mensagem'=>$this->session->mensagem]);
        return view('login/login');
    }

    public function login()
    {
        $post = $this->request->getPost();
        $user = $this->usuariosModel->verificaLogin($post['email'],$post['senha']);
        if (isset($post['lembereme']) and $post['lembreme'] == 'on') {
            $isLoggedIn = true;
        } else $isLoggedIn = false;

        if (!is_null($user)){
            $this->session->set(['user'=>$user,'isLoggedIn'=>$isLoggedIn]);
            return redirect()->to('home');
        }
        return redirect()->to('login')->with('mensagem','error');
    }
}
