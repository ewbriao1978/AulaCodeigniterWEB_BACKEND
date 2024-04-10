<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data['nome'] = "Eduardo W. B.";
        $data['nickname'] = 'LordWenzel1978';
        $data['game'] = 'Fortnite';

        return view('minhaview',$data);
    }
    public function tela_func(): string
    {
        return view('outraview');
    }

    public function telinhafunc() :string
    {
        return view ('telinha');
    }

    public function form() :string
    {
        return view ('formulario');
    }

    public function receiveData() :string
    {
        $data = array(
            'marca' => $this->request->getVar('marca'),
            'modelo' => $this->request->getVar('modelo'),
            'km'=> $this->request->getVar('km'),
            'ano' => $this->request->getVar('ano'),
            'preco' => $this->request->getVar('preco')
        );

        return view ('apresenta_formulario',$data);
        
    }


}
