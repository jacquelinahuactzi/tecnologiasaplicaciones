<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class LoginController extends BaseController
{
    public function index()
    {
        return view("login/login");

    }

    public function registrar()
    {
        return view("login/registrar");
    }

    public function recuperar()
    {
        return view("login/olvidecontra");
    }


    public function validar()
    {
      $email = $this->request->getPost("email");
      $contrasena = $this->request->getPost("contrasena");
      //d($this->request->getPost());
      //d($email);
      //dd($contrasena);

      $tablaUsuario = new \App\Models\TablaUsuario;
      //$tablaUsuario = model("TablaUsuario");
      //$tablaUsuario = model(TablaUsuario::class);
      $usuario = $tablaUsuario->login($email,$contrasena);
      if($usuario != null)
      {
        $session = session();
        $session->nombre_completo = $usuario->nombre_completo;
        $session->correo = $usuario->correo;
        //Esto redirige por medio de un alias
        return redirect()->route('dashboard');
        //Este redirige por medio de una ruta
        //return redirect()->to('/');

        //diferencia entre objeto y arreglo en php
        //hacer dashboard
      }
      else
      {
        return redirect()->to('/');
      }
    }
}
