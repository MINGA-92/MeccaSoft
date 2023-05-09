
<?php
    session_start();
    require("Conexion.php");

    $Usuario= $_POST['Usuario'];
    $ConsultaSQL= "SELECT * FROM db_mecca.tbl_usuarios WHERE USU_DOCUMENTO= '". $Usuario ."' AND USU_ESTADO= 'Activo'";
    if($ResultadoSQL= $ConexionSQL->query($ConsultaSQL)){
        $CantidadResultados= $ResultadoSQL->num_rows;
        if($CantidadResultados > 0){
            if($CantidadResultados = 1){
                if(isset($_SESSION)){
                    session_destroy();
                }
                session_start();
                while($Fila= $ResultadoSQL->fetch_assoc()){
                    $_SESSION['USU_ID'] = $Fila['USU_ID'];
                    break;
                }
                mysqli_free_result($ResultadoSQL);
                mysqli_close($ConexionSQL);
                $php_response = array("msg" => '1');
                echo json_encode($php_response);

            }else {
                if(isset($_SESSION)){
                    session_destroy();
                }
                session_start();
                // Mas de 1 Resultados
                while ($FilaResultado = $ResultadoSQL->fetch_assoc()) {
                    $_SESSION['USU_ID'] = $FilaResultado['USU_ID'];
                    break;
                }
                mysqli_free_result($ResultadoSQL);
                mysqli_close($ConexionSQL);
                echo "<body class='bg-dark'>
                <script src='https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.4/sweetalert2.all.js'></script>
                <script>
                    Swal.fire({
                        title: '¡Error De Validacion!  🤔',
                        text: '¡Fallo La Validacion De Credenciales!',
                        icon: 'error',
                        showConfirmButton: true,
                        confirmButtonColor: '#3085d6',
                        timer: false
                    }).then(() => {
                        window.location= 'Logout.php';
                    })
                </script>
                </body>";
            }
        }else{
            // Sin Resultados
            mysqli_close($ConexionSQL);
            if(isset($_SESSION)){
                session_destroy();
            }
            $php_response = array("msg" => "0");
            echo json_encode($php_response);
            exit;
        }
    }else {
        // Error en la Consulta
        $ErrorConsulta = mysqli_error($ConexionSQL);
        mysqli_close($ConexionSQL);
        if(isset($_SESSION)){
            session_destroy();
        }
        echo $ErrorConsulta;
    }

?>