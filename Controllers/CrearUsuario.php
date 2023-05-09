
<?php
    echo "<body class='bg-dark'>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.4/sweetalert2.all.js'></script>
    <script>
        Swal.fire({
            title: '✋🏽¡Ten En Cuenta! 🙋🏽‍♂️',
            text: '¡Que este formulario no se solicitaba en la prueba, sin embargo, quería hacerlo como un bonus, pero por cuestiones de tiempo no fue posible, por lo que veras solo el Front, pero no podrás guardar la información...! 😕',
            icon: 'info',
            showConfirmButton: true,
            confirmButtonText: '¡Entendido!',
            confirmButtonAriaLabel: 'Thumbs up, great!',
            confirmButtonColor: '#3085d6',
            focusConfirm: false,
            timer: false
        }).then(() => {
            window.location= '../views/CrearNuevoUsuario.php';
        })
    </script>
    </body>";
?>
