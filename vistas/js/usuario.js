 function init() {
     mostrarform(false);

     $("#formulario").on("submit", function(e) {
         guardaryeditar(e);
     })


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
             mostrarform(false);
             //tabla.ajax.reload();
         }

     });
     limpiar();
 }










 init();