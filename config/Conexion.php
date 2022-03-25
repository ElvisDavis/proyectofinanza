<?php
require_once"variable.php";

$conexion= mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);

//mysqli_query($conexion, 'SET NAMES "' .DB_ENCODE.'"');
//conmdicional para saber si la conexion se realizo corrctamente

if(mysqli_connect_errno()){
    printf("Conexion fallida" , mysqli_connect_error());
    exit();
}else{
    printf("Conexion exitosa");
}

//condicion para ejecutar una consulta cualquiera

if(!function_exists('ejecutarConsulta'))
{
    function ejecutarConsulta($sql){
        global $conexion;
        $query = $conexion->query($sql);
        return $query;
    }

    function ejecutarREsultadoSImpleFila($sql){
        global $conexion;
        $query=$conexion->query($sql);
        $row = $query->fetch_assoc();
        return $row;
    }

    function ejecutarConsulta_retoprnarID($sql){
        global $conexion;
        $query = $conexion->query($sql);
        return $conexion->insert_id;
    }

}


?>