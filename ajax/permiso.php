<?php
require_once "../modelos/Permiso.php";
$permiso = new Permiso();
$idpermiso= isset($_POST["idpermiso"])? limpiarCadena($_POST[$idpermiso]):"";
$nombre= isset($_POST["nombre"])? limpiarCadena($_POST["nombre"]):"";

switch ($_GET["op"]) {

    case 'guardaryeditar':
        if(empty($idpermiso)){
            //code
            $rspta=$permiso->$insertar($nombre);
            echo $rspta ? "Rol registrado correctamente" : "Rol no se pudo registrar";
        }else{
            $rspta=$permiso->editar($idpermiso,$nombre);
            echo $rspta ? "Rol editato correctamente" : "Rol no se pudo editar";
        }
        break;

    case 'desactivar':
            # code...
            $rspta=$permiso->desactivar($idpermiso);
            echo $rspta ? "Rol desactivado correctamente" : "Rol no se puedo descativar correctamente";

        break;
    case 'activar':
        # code...
            $rspta=$permiso->activar($idpermiso);
            echo $rspta ? "Rol desactivado correctamente" : "Rol no se puedo descativar correctamente";

        break;    
    case 'mostrar':
        # code...
        $rspta=$permiso->mostrar($idpermiso);
        //codificamos el resutado 
        echo json_encode($rspta);

        break;

	case 'listar':
			$rspta=$permiso->listar();
			$data=Array();
			while ($reg=$rspta->fetch_object()) {
				$data[]=array(

                    "0"=>($reg->estado)?'<button class="btn btn-warning" onclick="mostrar('.$reg->idpermiso.')"><i class="fas fa-pencil-alt"></i></button>'.
                    '<button class="btn btn-danger" onclick="desactivar('.$reg->idpermiso.')"><i class="fa fa-close"></i></button>':
                    '<button class="btn btn-warning" onclick="mostrar('.$reg->idpermiso.')"><i class="fas fa-pencil-alt"></i></button>'.
                    '<button class="btn btn-primary" onclick="activar('.$reg->idpermiso.')"><i class="fa fa-check"></i></button>',
            
                    "1"=>$reg->nombre,
                    
                    "2"=>($reg->estado)?'<span class="label bg-green">ACTIVADO</span>':
                    '<span class="label bg-red">Desactivado</span>'

				);
			}
			$results = array(
				"sEcho"=>1,//informacion para la base de datos
				"iTotalRecords"=>count($data),//enviamos el total registro al datatable
				"iTotalDisplayRecords"=>count($data),//enviamos el total de registros a visualizar
				"aaData"=>$data);
			echo json_encode($results);

		break;

}

 ?>
