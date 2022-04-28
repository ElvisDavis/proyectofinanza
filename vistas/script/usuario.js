//funcion que e ejecuata al inicio
function init() {
    mostrarform(false);

    $("#formulario").on("submit", function(e) {
        guardaryeditar(e);
    })
}

//función limpiar

function limpiar() {
    $("#usuario").val("");
    $("contrasena").val("");
}

function mostrarform(flag) {
    limpiar();
    if (flag) {

    }
}

$("#frmAcceso").on('submit', function(e) {
    e.preventDefault();
    logina = $("#logina").val();
    clavea = $("#clavea").val();

    $.post("../ajax/usuario.php?op=verificar", { "logina": logina, "clavea": clavea },
        function(data) {
            if (data != "null") {
                $(location).attr("href", "doctor.php");
            } else {
                bootbox.alert("Usuario y/o Password incorrectos");
            }
        });
})
init();