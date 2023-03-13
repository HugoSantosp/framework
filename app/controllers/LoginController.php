<?php

namespace app\controllers;
use app\models\User;
use PDO;


class LoginController
{
   

    public function index()
    {
        view('login');

    }

    public function store()
    {
        $usuario = strip_tags($_POST['email']);
        $password = strip_tags($_POST['password']);

        $user = new User;
        $result =  count($user->Autentication($usuario, $password));
        
        if($result == 1)
        {
            $usuarioloc = $user->GetAllUser($usuario, $password); 
            $_SESSION ['nome_usuario'] =$usuarioloc->nome;
            $_SESSION ['email'] = $usuarioloc->email;
            $_SESSION ['acesso'] = $usuarioloc->acesso;
            redirect("/dash");
        }else
        {
            redirect("/");
        }

        /* if(count($result) == 1)
        {
            $usuarios = $user->getall();
            var_dump( $usuarios);
            die();
            if($usuarios->usuario == $user && $usuarios->senha == $password)
            {
                redirect("/dash");
            }else
            {
                redirect("/");
            }           
        } 
         */
/* print_r($user->get()->senha);
die(); */
      /*   if(empty($email) || empty($password))
        {
            
            redirect("/");
        } */
        /*
        $connectdb = Connection::getConnection();
        $query = $connectdb->prepare("select usuario,senha from usuario where usuario = :email and senha = :password");
        $query->execute([
            'email' => $email,
            'password' => $password
        ]);
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        $result2 = $query->fetchObject();
        print_r($result[0]['usuario']);
       var_dump($result2->usuario); */
     /*     if(count($result) == 1)
        {
            redirect("/dash");
        } 
    */
      


    }
}