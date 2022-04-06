<?php
 class login extends Controller{
   function __construct(){
     if(Auth::validate()){
       Flasher::new('Existe una sesión iniciada.');
       Redirect::to('home/flash');
     }
   }
   function index(){
     $data =[
       'title' => 'Inicie sesión',
       'padding' => '0px'
     ];
     View::render('index', $data);
   }
   function post_login(){
     if(!csrf::validate($_POST['csrf'])){
       Flasher::new('Acceso restringido', 'danger');
       Redirect::back();
     }
     if ($idusuario = UsuarioModel::list('usuario' => clean($_POST['idusuario']), 'password' => clean($_POST['password']),1)) {
       Flasher::new('Los datos ingresados no son correctos', 'danger');
       Redirect::back();
     }

   // usuario logeado
   Auth::login($idusuario['idusuario', $idusuario]);
   Redirect::to('usuario');

   }
 }
 ?>
