<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function hola($nombre)
    {
      //  return view('vistahola');
        //echo "hola mundo ".$nombre;
        $data=[
          "cosaUno"=>$nombre
        ];
        return view('vistahola', $data);
    }
    public function paginas($numero)
    {
      if ($numero%2==0){
          return view('welcome_message');
      }
      else {
          return view('vistahola');
      }
    }
}
