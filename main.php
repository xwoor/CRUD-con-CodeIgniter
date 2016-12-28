<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$mensaje['titulo'] = "Crud";
		$this->load->view('menu', $mensaje);
		$this->load->view('footer');
	}

	public function registro(){
		$mensaje['titulo'] = "Registro";
		$this->load->view('menu', $mensaje);
		$this->load->view('formulario');
		$this->load->view('footer');
	}	

	public function actualizar(){
		$mensaje['titulo'] = "Actualiza tus datos";
		$this->load->view('menu', $mensaje);
		$this->load->view('actualizar');
		$this->load->view('footer');
	}	

	public function login(){
		$mensaje['titulo'] = "Iniciar Session";
		$this->load->view('menu', $mensaje);
		$this->load->view('login');
		$this->load->view('footer');
	}

}
