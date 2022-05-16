 function init() {
     mostrarform(false);


 }


 function limpiar() {
     $("#idusuario").val("");
     $("#nombre").val("");
     $("#referencia").val("");
     $("#correo").val("");
     $("#telefono").val("");
     $("#contrasena").val("");
 }

 function mostrarform(flag) {
     limpiar();
     if (flag) {
         $("#login").hide();
         $("#registro").show();
         $("#btn-registro").prop("disable", false);


     } else {
         $("#login").show();
         $("#registro").hide();

     }





 }









 init();