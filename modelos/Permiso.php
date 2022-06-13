<?php
//incluimos la conexin a la base de datos 
require "../config/Conexion.php";
//creamos una clase 

class Permiso
{
    //implementamos un constructor
    public function __construct()
    {
        
    }

    //implementamos un metodo a una funcion para insertar lo permisos o permiso
    public  function insertar($nombre){
        $sql="INSERT INTO permiso(nombre,estado) VALUES('$nombre','1')";
        return ejecutarConsulta($sql);
    }

    ///mplementamos un metodo o una funcion para editar los permisos
    public function editar($idpermiso,$nombre){
        $sql="UPDATE permiso SET nombre='$nombre' WHERE idpermiso='$idpermiso'";
        return ejecutarConsulta($sql);
    }

    //implementamos un  metodo para desactivar

    public function desactivar($idpermiso){
        $sql="UPDATE permiso SET estado='0' WHERE idpermiso='$idpermiso'";
        return ejecutarConsulta($sql);
    }
    //implementamos un metodo para activar 
    public function activar($idpermiso){
        $sql="UPDATE permiso SET estado='1'WHERE idpermiso='$idpermiso'";
        return ejecutarConsulta($sql);
    }

    //implementar un metodo para mostrar los datos de mi base de datos 
    public function mostrar($idpermiso){
        $sql="SELECT * FROM permiso WHERE idpermiso='$idpermiso'";
        return ejecutarREsultadoSImpleFila($sql);
    }
    //implemetar un metodo para lsitar los registro de la base de datos

    public function listar(){
        $sql="SELECT * FROM permiso";
        return ejecutarConsulta($sql);
    }
    
}
?>