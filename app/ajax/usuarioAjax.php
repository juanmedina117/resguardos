<?php
    require_once "../../config/app.php";
    require_once "../views/inc/session_start.php";
    require_once "../../autoload.php";

    use app\controllers\userController;

    if(isset($_POST['modulo_usuario'])){

		// echo $_POST['modulo_usuario'];
		$insUsuario = new userController();

		if($_POST['modulo_usuario']=="registrar"){
			echo $insUsuario->registrarUsuarioControlador();
		}

		if($_POST['modulo_usuario']=="eliminar"){
			echo $insUsuario->eliminarUsuarioControlador(); 
		}

		if($_POST['modulo_usuario']=="actualizar"){
			echo $insUsuario->actualizarUsuarioControlador();
		}

		if($_POST['modulo_usuario']=="eliminarFoto"){
			echo $insUsuario->eliminarFotoUsuarioControlador();
		}

		if($_POST['modulo_usuario']=="actualizarFoto"){
			echo $insUsuario->actualizarFotoUsuarioControlador();
		}
		
		if($_POST['modulo_usuario']=="guardarFallas"){
			echo $insUsuario->registrarFallasControlador();
		}
		
	}else{
		session_destroy();
		header("Location: ".APP_URL."login/");
	}
