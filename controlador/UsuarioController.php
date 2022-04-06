<?php

class UsuarioController extends Controller {
    function _construct()
    {
      // bloqueo de ingreso a sitio no autorizado
      if (!Auth::validate()) {
        Redirect::to('login');
      }
    }
    function index(){
        View::render('index');
    }
    function verUsuario($idusuario){
        View::render('ver');
    }
    function consultarUsuario($idusuario){
        View::render('consultar')
    }
    // Formulario
    $nombres = clean($_POST['nombres']);
    $nombreusuario = clean($_POST['nombreusuario']);
    $telefono = clean($_POST['telefono']);
    $correo = clean($_POST['correo']);
    $contrasena = clean($_POST['password']);
    try {
        // BDD
    $data = [
        'nombres' =>$nombres,
        'correo'  =>$correo,
        'telefono' =>$telefono,
        'password' =>$contrasena,
        'estado' =>'inactivo',
        'rol' =>$rol
    ];
    if (!$idusuario = UsuarioModel:: add('usuario', $data)) {
        throw new Exception("Tenemos problemas para completar tu registro.");
    }
    // lista de usuarios registrados en la BDD
    $usuario = UsuarioModel::list('usuario',['id'=>$idusuario],1);
    } catch (Exception $err) {
       Flasher::new($err->getMessage(),'danger');
       Redirect::back();
    }

}
