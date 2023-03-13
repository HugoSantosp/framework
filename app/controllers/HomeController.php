<?php
namespace app\controllers;
use app\models\User;

class HomeController
{
  
    public function index()
    {     
        $usuario_logado = [
          'nome' =>  $_SESSION ['nome_usuario'],
          'email' => $_SESSION ['email']
        ];

        view('dash',['user' => $usuario_logado]);
    }

}