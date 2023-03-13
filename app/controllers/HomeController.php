<?php
namespace app\controllers;
use app\models\User;

class HomeController
{
  
    public function index()
    {
        $user = new User;
      /*   $usuarios = $user->getall(); */
        /* view('dash', ['user' => $usuarios]); */
    }

}