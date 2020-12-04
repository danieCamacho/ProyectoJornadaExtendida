<?php
	
	require 'models/Login.php';
	/**
	 * Clase Controlador Login
	 */
	class LoginController
	{		
		private $model;

		public function __construct()
		{
			$this->model = new Login;
		}

		public function index()
		{
			if(isset($_SESSION['usuariopersona'])) {
				header('Location: ?controller=grado');
			} else {
				require 'views/login.php';
			}
		}

		public function login()
		{
			$validateUsuario = $this->model->validateUsuario($_POST);
			if($validateUsuario === true) {
				header('Location: ?controller=grado');
			} else {
				$error = [
					'errorMessage' => $validateUsuario,
					'email' => $_POST['email']
				];
				require 'views/login.php';
			}
		}

		public function logout()
		{
			if($_SESSION['usuariopersona']) {
				session_destroy();
				header('Location: ?controller=login');
			} else {
				header('Location: ?controller=login');				
			}	
		}
	}
	