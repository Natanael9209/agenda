<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class UsuariosController extends BaseController
{
	public function index()
	{
		$vistas = 	view('usuarios/header').
					view('usuarios/index').
					view('usuarios/footer');
		return $vistas;
	}
	public function catalogo(){
		echo view('usuarios/header');
		echo view('usuarios/catalogo');
		echo view('usuarios/footer');
	}
}
