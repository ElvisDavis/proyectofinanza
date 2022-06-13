<?php
//inv$cluimos inicialmenter la conexion 
require "../config/Conexion.php";

class Usuario{
    //Implementamos un constructor
    public function __construct()
    {
        
    }

    //implementamos un metodo para insertar
    public function insertar($referido, $nombres, $login, $telefono, $clave,$imagen,$permisos){
        $sql = "INSERT INTO usuario(referido, nombres, login, telefono, clave,imagen,condicion)
        VALUES ('$referido','$nombres','$login','$telefono','$clave','$imagen','1')";
        //Retornamos la consulta
        $idusuarionew=ejecutarConsulta_retoprnarID($sql);
        $num_elementos=0;
        $sw=true;
        while ($num_elementos < count($permisos)) {
            # code...
            $sql_detalle="INSERT INTO usuario_permiso(idusuario, idpermiso)VALUES('$idusuarionew','$permisos[$num_elementos]')";
            ejecutarConsulta($sql_detalle) or $sw = false;
            $num_elementos=$num_elementos + 1;
        }
        
        return $sw;  
        
    }

    //implementamos  un metodo para editar el usuario 
    public function editar($idusuario,$referido,$nombres,$login,$telefono,$clave,$imagen){
        $sql="UPDATE usuario SET referido='$referido',nombres='$nombres',login='$login',telefono='$telefono',clave='$clave', imagen='$imagen'
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
    public function verificar($login,$clave){

        $sql = "SELECT idusuario, nombres, login,imagen
        FROM usuario WHERE login='$login' AND clave ='$clave' AND condicion='1'  ";
        return ejecutarConsulta($sql);        

    }

    //implementamos un metodo para listar los marcados
    public function listarmarcados($idusuario){
        $sql="SELECT *FROM usuario_permiso WHERE idusuario='$idusuario'";
        return ejecutarConsulta($sql);
    }


}

?>