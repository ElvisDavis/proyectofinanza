<?php
//inv$cluimos inicialmenter la conexion 
require "../config/Conexion.php";

class Usuario{
    //Implementamos un constructor
    public function __construct()
    {
        
    }

    //implementamos un metodo para insertar
    public function insertar($idempresa, $nombres, $correo, $telefono, $contrasena){
        $sql = "INSERT INTO usuario(idempresa, nombres, correo, telefono, contrasena,condicion)
        VALUES ('$idempresa','$nombres','$correo','$telefono','$contrasena','1')";
        return ejecutarConsulta($sql);
        
    }

    //implementamos  un metodo para editar el usuario 
    public function editar($idusuario,$idempresa,$nombres,$correo,$telefono,$contrasena){
        $sql="UPDATE usuario SET idempresa='$idempresa',nombres='$nombres',correo='$correo',telefono='$telefono',contrasena='$contrasena'
        WHERE idusuario='$idusuario'";
        return ejecutarConsulta($sql);
    
    }

    //implementamos un metodo a¿para activar el usuario 

    public function activar ($idusuario){

        $sql= "UPDATE usuario Set condicion ='1' WHERE idusuario='$idusuario'";
        return ejecutarConsulta($sql);

    }

    //implementamos un metodo para desactivar el usuario 
    public function desactivar($idusuario){
        $sql="UPDATE usuario SET condicion ='0' WHERE idusuario='$idusuario'";
        return ejecutarConsulta($sql);
    }
    //implementamos un metodo par mostrar los usuarios 

    public function mostrar($idusuario){
        $sql="SELECT *FROM usuario WHERE idusuario='$idusuario'";
        return ejecutarREsultadoSImpleFila($sql);
    }

    //implmentamos un metodo para verificar la cuenta 
    public function verificar($correo,$contrsena){
        

    }


}

?>