 function init() {
     mostrarform(true);

     $("#formulario").on("submit", function(e) {
         guardaryeditar(e);
     });
     //Mostramos los permisos
     $.post("../ajax/usuario.php?op=permisos&id=", function(r) {
         $("#permisos").html(r);
     });

 }


 function limpiar() {
     $("#idusuario").val("");
     $("#nombres").val("");
     $("#referido").val("");
     $("#login").val("");
     $("#telefono").val("");
     $("#clave").val("");
 }

 function mostrarform(flag) {
     limpiar();
     if (flag) {
         // $("#login").hide();
         $("#registro").show();
         $("#btn-registro").prop("disable", false);


     } else {
         $("#login").show();
         $("#registro").hide();

     }
 }

 function guardaryeditar(e) {
     e.preventDefault(); // no se activa la accion predeterminada del evento 
     $("#btnGuardar").prop("disabled", true);
     var formData = new FormData($("#formulario")[0]);

     $.ajax({
         url: "../ajax/usuario.php?op=guardaryeditar",
         type: "POST",
         data: formData,
         contentType: false,
         processData: false,

         success: function(datos) {
             bootbox.alert(datos);
             $(location).attr("href", "login.html");
             //tabla.ajax.reload();
         }

     });
     limpiar();
 }

 init();