<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('_common/layout',['nome'=>$this->session->user['nome']]);
    }

    public function deslog()
    {
        $this->session->destroy();
        return redirect()->to('login');
    }
}
