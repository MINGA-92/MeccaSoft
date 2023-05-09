
$("#BtnAcceder").click(function(){
    let form_data = new FormData();

    var Usuario = $("#usuario").val();
    var CheckTerminos= document.getElementById('CheckTerminos').checked;
    console.log("CheckTerminos: ", CheckTerminos);
    console.log("Usuario: ", Usuario);
    form_data.append('Usuario', Usuario);

    if((Usuario == null) || (Usuario == "")){
        Swal.fire({
            icon: 'error',
            title: '🤨 Oops...',
            text: 'Se Tiene Que Diligenciar El Campo "Documento De Identidad"',
            confirmButtonColor: '#2892DB'
        })
    }else if((CheckTerminos == null) || (CheckTerminos == false)){
        Swal.fire({
            icon: 'error',
            title: '🤨 Oops...',
            text: 'Se Tienen Que "Aceptar Los Términos y Condiciones"',
            confirmButtonColor: '#2892DB'
        })
    }else {
        $.ajax({
            url: "./Controllers/Login.php",
            dataType: "json",
            type: 'POST',
            cache: false,
            processData: false,
            contentType: false,
            data: form_data,
            success: function (php_response){
                Respuesta = php_response.msg;
                console.log(Respuesta);
                if(Respuesta == '1') {
                    Swal.fire({
                        title: '¡Acceso Concedido!  😉',
                        text: '¡Auntenticacion Completada!',
                        icon: 'success',
                        showConfirmButton: false,
                        confirmButtonColor: '#3085d6',
                        timer: 2000
                    }).then(() => {
                        window.location= 'views/Ranking.php';
                    })
                }else if(Respuesta == "0") {
                    Swal.fire({
                        title: '¡Usuario No Encontrado!  🤨',
                        text: '¡Documento De Identidad Incorrecto!',
                        icon: 'error',
                        showConfirmButton: true,
                        confirmButtonColor: '#3085d6',
                        timer: false
                    }).then(() => {
                        window.location= './Controllers/Logout.php';
                    })
                }else {
                    console.log(Respuesta);
                    Swal.fire({
                        title: '¡Error De Validacion!  🤔',
                        text: '¡Fallo La Validacion De Credenciales!',
                        icon: 'error',
                        showConfirmButton: true,
                        confirmButtonColor: '#3085d6',
                        timer: false
                    }).then(() => {
                        window.location= './Controllers/Logout.php';
                    })
                }
            },
            error: function (php_response){
                php_response = JSON.stringify(php_response);
                Swal.fire({
                    icon: 'error',
                    title: '¡Fallo La Comunicacion Con El Servidor!  😵',
                    text: 'Por Favor, Consultar Con El Desarrollador Del Sistema...',
                    confirmButtonColor: '#2892DB'
                })
                console.log(php_response);
            }
        });
    }
    
});