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
      d($email);
      dd($contrasena);
    }
}
