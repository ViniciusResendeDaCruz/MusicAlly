<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('_common/layout',['user'=>$this->session->user]);
    }

    public function deslog()
    {
        $this->session->destroy();
        return redirect()->to('Login');
    }
}
