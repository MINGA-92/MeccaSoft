
<?php
    require("Conexion.php");
    session_start();

    if (isset($_SESSION['USU_ID'])) { 
        $Passport= $_SESSION['USU_ID'];
        //print_r($Passport);
    } else {
        echo "<script>window.location='../Controllers/Logout.php';</script>";
        exit;
    }
    
    $ConsultaUsuario = "SELECT * FROM db_mecca.tbl_usuarios WHERE USU_ID= '". $Passport ."' AND USU_ESTADO= 'Activo';";
    if ($ResultadoUsuario = $ConexionSQL->query($ConsultaUsuario)) {
        $CantidadResultados = $ResultadoUsuario->num_rows;
        if ($CantidadResultados > 0) {
            while ($FilaResultado = $ResultadoUsuario->fetch_assoc()) {
                $DocumentoUsuario = $FilaResultado['USU_DOCUMENTO'];
                $NombreUsuario = $FilaResultado['USU_NOMBRE'];
                $CiudadUsuario = $FilaResultado['USU_CIUDAD'];

                $DatosRanking = array();
                $ConsultaRanking = "SELECT * FROM db_mecca.tbl_usuarios WHERE USU_CIUDAD= '". $CiudadUsuario ."' AND USU_ESTADO= 'Activo' ORDER BY USU_PUNTOS DESC;";
                if ($ResultadoRanking = $ConexionSQL->query($ConsultaRanking)) {
                    $CantidadResultados = $ResultadoRanking->num_rows;
                    if ($CantidadResultados > 0) {
                        while ($FilaResultado = $ResultadoRanking->fetch_assoc()) {
                            array_push($DatosRanking, array('0' => $FilaResultado['USU_DOCUMENTO'], '1' => $FilaResultado['USU_NOMBRE'], '2' => $FilaResultado['USU_CIUDAD'], '3' => $FilaResultado['USU_PUNTOS'], '4' => $FilaResultado['USU_FECHA_REGISTRO'], '5' => $FilaResultado['USU_ID']));
                        }
                    }else{
                        // Sin Resultados
                        mysqli_close($ConexionSQL);
                        echo "<script>window.location='../Controllers/Logout.php';</script>";
                        exit;
                    }
                }else{ 
                    // Error en la Consulta
                    $ErrorConsulta = mysqli_error($ConexionSQL);
                    echo '<script>alert("Error Falla -> ' . $ErrorConsulta . '");</script>';
                    mysqli_close($ConexionSQL);
                    echo "<script>window.location='../Controllers/Logout.php';</script>";
                    exit; 
                }   

            }
        }else{
            // Sin Resultados
            mysqli_close($ConexionSQL);
            echo "<script>window.location='logout.php';</script>";
            exit;
        }
    }else{ 
        // Error en la Consulta
        $ErrorConsulta = mysqli_error($ConexionSQL);
        echo '<script>alert("Error Falla -> ' . $ErrorConsulta . '");</script>';
        mysqli_close($ConexionSQL);
        echo "<script>window.location='logout.php';</script>";
        exit; 
    }


?>
