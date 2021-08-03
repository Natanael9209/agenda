<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;//llamando al modelo que se usará
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
	public function ver_usuarios(){
		$user = new User();//inicialización del modelo
		$data = ['datos'	=>	$user->ver_usuarios()];//llamando a una función del modelo
		if($data == 0){//resultados
			echo 'sin datos en la base de datos';
		}
		else{
			print_r($data);
		}
	}
}
