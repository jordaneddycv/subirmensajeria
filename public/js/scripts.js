function enviarMensaje(){
    var texto = $('#textoUsuario').val();
    // alert("Enviando mensaje "+texto);

    $.ajax({
        url: baseUrl+ '/enviarMensaje',
        method:'get',
        data:{mensajeEnvio: texto},
        success: function(respuesta){
            alert(respuesta);
        }
    });
}