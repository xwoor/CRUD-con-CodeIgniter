<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$mensaje['titulo'] = "Crud";

		$this->load->view('menu', $mensaje);
	}

	public function registro(){
		$mensaje['titulo'] = "Registro";
		$this->load->view('menu', $mensaje);
	}	

	public function actualizar(){
		$mensaje['titulo'] = "Actualiza tus datos";
		$this->load->view('menu', $mensaje);
	}	

	public function login(){
		$mensaje['titulo'] = "Iniciar Session";
		$this->load->view('menu', $mensaje);
	}

}
