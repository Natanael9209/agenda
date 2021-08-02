<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$datos = ["titulo" => "Agenda de clientes"];
		return view('welcome_message',$datos);
	}
	public function contacto(){
		return view('prueba/prueba');
	}
}
