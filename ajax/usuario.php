<?php

require_once "../modelos/Usuario.php";
$usuario = new Usuario();
$idusuario = isset($_POST["idusuario"])? limpiarCadena($_POST["idusuario"]):"";
$idempresa = isset($_POST["idempresa"])? limpiarCadena($_POST["idempresa"]):"";
$nombres = isset($_POST["nombres"])? limpiarCadena($_POST["nombres"]):"";
$correo = isset($_POST["correo"])? limpiarCadena($_POST["correo"]):"";
$telefono = isset($_POST["telefono"])? limpiarCadena($_POST["telefono"]):"";
$contrasena = isset($_POST["contrasena"])? limpiarCadena($_POST["contrasena"]):"";
switch ($_GET["op"]) {
    case 'guardaryeditar':
        #hash sha 256 en la contraseña
        $contrasenahash=hash("SHA256",$contrasena);
        if (empty($idusuario)) {
            # code...
            $rspta=$usuario->insertar($idempresa, $nombres, $correo, $telefono, $contrasenahash);
            echo $rspta ? "Usuario registrado" : "No se puedieron registrar todos los datos del usuario";
        }
        else {
            # code...
            $rspta=$usuario->editar($idusuario, $idempresa, $nombres, $correo, $telefono, $contrasena);
            echo $rspta ? "DAtos acutualizados correctamente " : " Los dato no se pudieron acrualizar correctamente ";
        }
        break;
    case 'desactivar':
        # code...
        $rspta=$usuario->desactivar($idusuario);
        echo $rspta ? "Usuario desactivado" : "Usuario no se pudo desactivar";
        break;
    case 'activar':
        # code...
        $rspta=$usuario->activar($idusuario);
        echo $rspta ? "Usuario Activado" : " Usuario no se pudo activar" ;
        break;
    
    case 'listar':
        # code...
        
        break;
    
    case 'verificar':
        # code...
        $logina=$_POST['logina'];
        $clavea=$_POST['clavea'];
        # hash SHA256 en la contraseña
        $contrasenahash=hash("SHA256", $clavea);
        $rspta=$usuario->verificar($logina, $contrasenahash);
       // $fetch=$rspta->fetch_object();


        break;
    case 'salir':
        # code...
        //limpiamos las variables de sesion
        session_unset();
        //Destruimos la session
        session_destroy();
        //redireccionamos al login 
        header("Location: .../index.php");
        break;
}

?>