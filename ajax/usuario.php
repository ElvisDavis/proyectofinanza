<?php
session_start();

require_once "../modelos/Usuario.php";
$usuario = new Usuario();
$idusuario = isset($_POST["idusuario"])? limpiarCadena($_POST["idusuario"]):"";
$referido = isset($_POST["referido"])? limpiarCadena($_POST["referido"]):"";
$nombres = isset($_POST["nombres"])? limpiarCadena($_POST["nombres"]):"";
$login = isset($_POST["login"])? limpiarCadena($_POST["login"]):"";
$telefono = isset($_POST["telefono"])? limpiarCadena($_POST["telefono"]):"";
$clave = isset($_POST["clave"])? limpiarCadena($_POST["clave"]):"";
$imagen = isset($_POST["imagen"])? limpiarCadena($_POST["imagen"]):"";
switch ($_GET["op"]) {
    case 'guardaryeditar':
        if (!file_exists($_FILES['imagen']['tmp_name']) || !is_uploaded_file($_FILES['imagen']['tmp_name']))
		{
			$imagen=$_POST["imagenactual"];
		}
		else
		{
			$ext = explode(".", $_FILES["imagen"]["name"]);
			if ($_FILES['imagen']['type'] == "image/jpg" || $_FILES['imagen']['type'] == "image/jpeg" || $_FILES['imagen']['type'] == "image/png")
			{
				$imagen = round(microtime(true)) . '.' . end($ext);
				move_uploaded_file($_FILES["imagen"]["tmp_name"], "../files/usuarios/" . $imagen);
			}
		}
        
        #hash sha 256 en la contraseña
        $clavehash=hash("SHA256",$clave);
        if (empty($idusuario)) {
            # code...
            $rspta=$usuario->insertar($referido, $nombres, $login, $telefono, $clavehash,$imagen,$_POST['permiso']);
            echo $rspta ? "Usuario registrado" : "No se puedieron registrar todos los datos del usuario";
        }
        else {
            # code...
            $rspta=$usuario->editar($idusuario, $referido, $nombres, $login, $telefono, $clavehash,$imagen);
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
    case 'permisos':
        # code...
      	//Obtenemos todos los permisos de la tabla permisos
		require_once "../modelos/Permiso.php";
		$permiso = new Permiso();
		$rspta = $permiso->listar();

		//Obtener los permisos asignados al usuario
		$id=$_GET['id'];
		$marcados = $usuario->listarmarcados($id);
		//Declaramos el array para almacenar todos los permisos marcados
		$valores=array();

		//Almacenar los permisos asignados al usuario en el array
		while ($per = $marcados->fetch_object())
			{
				array_push($valores, $per->idpermiso);
			}

		//Mostramos la lista de permisos en la vista y si están o no marcados
		while ($reg = $rspta->fetch_object())
				{
					$sw=in_array($reg->idpermiso,$valores)?'checked':'';
					echo '<li> <input type="checkbox" '.$sw.'  name="permiso[]" value="'.$reg->idpermiso.'">'.$reg->nombre.'</li>';
				}
        break;
    
    case 'verificar':
        # code...
        $logina=$_POST['logina'];
        $clavea=$_POST['clavea'];
        # hash SHA256 en la contraseña
        $clavehash=hash("SHA256", $clavea);
        $rspta=$usuario->verificar($logina, $clavehash);
        $fetch=$rspta->fetch_object();

        if (isset($fetch)) {
            # code...
            //Declaramos las varianbles de ssion 
            $_SESSION['idusuario']=$fetch->idusuario;
            $_SESSION['nombres']=$fetch->nombres;
            $_SESSION['imagen']=$fetch->imagen;
            $_SESSION['login']=$fetch->login;
            //obtrnemos lso permisos del usuario
            $marcados=$usuario->listarmarcados($fetch->idusuario);
            //Declaramos el array para almacenar todos los permisos marcados
            $valores=array();
            //almacenamos los permisos marcados en el arrayu
            while ($per = $marcados->fetch_object()) {
                # code...
                array_push($valores, $per->idpermiso);
            }

            //determinamos los accesos del usuario 
            in_array(1,$valores)?$_SESSION['Administrador']=1:$_SESSION['Administrador']=0;
            in_array(2,$valores)?$_SESSION['Empresa']=1:$_SESSION['Empresa']=0;
            in_array(3,$valores)?$_SESSION['Usuario']=1:$_SESSION['Usuario']=0;
        }        
        echo json_encode($fetch);      

        break;
    case 'salir':
        # code...
        //limpiamos las variables de sesion
        session_unset();
        //Destruimos la session
        session_destroy();
        //redireccionamos al login 
        header("Location: ../index.php");
        break;
}

?>