<?php
namespace app\controllers;
use app\models\User;

class HomeController
{
  
    public function index()
    { 
      if(!isset($_SESSION))
      {
          redirect('/');
      }else{
        session_start();

        $usuario_logado = [
         'nome' =>  $_SESSION ['nome_usuario'],
         'email' => $_SESSION ['email'],
         'acesso' => $_SESSION['acesso']
       ];

       view('dash',['user' => $usuario_logado]);
      }
   
    }

}