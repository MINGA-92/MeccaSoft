
<?php
    require("../Controllers/ConsultaRanking.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>:: Ranking :: </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
<body class="bg-dark">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-black static-top shadow">
        <div class="container bg-black">
            <a class="text-white" href="../"><h2 class="text-info"> <img src="../img/LogoPrueba.gif" class="logo" width="20%"/> </a> 
            <h2 class="navbar-brand text-white" style="margin-left: -50%; font-size: 32px;"> <?php echo $NombreUsuario;?> </h2>
            <button class="navbar-toggler bg-info" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-brand collapse navbar-collapse" id="navbarResponsive">
                <?php require("Nav.php") ?>
            </div>
        </div>
    </nav>

    <section class="pricing py-2">
        <div class="container">
            <div style="margin-top: 2%;"></div>     
                <a class="btn btn-outline-info float-left" href="../Controllers/CrearUsuario.php"> Crear Usuario <i class="fa-solid fa-user-plus"></i></a>
                <button type="button" id="BtnPDF" class="btn bg-black float-end text-info">PDF 🖨 </button>
                <div class="col-md-12 table-responsive">
                    <table id="TblUsuarios" class="table table-bordered table-striped text-center mt-3 dataTable">
                        <thead class="bg-info">
                            <tr> 
                                <th>DOCUMENTO</th>    
                                <th>NOMBRE</th>
                                <th>CIUDAD</th>
                                <th>PUNTOS</th>
                                <th>FECHA DE REGISTRO</th>
                                <th hidden>ID</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                for($i = 0; $i < count($DatosRanking); $i++) {
                                    echo '<tr>';
                                    for ($d = 0; $d < count($DatosRanking[$i]); $d++) {
                                        //print_r($d);
                                        if ($d == 5) {
                                            echo '<td style="position: relative;" hidden>' . $DatosRanking[$i][$d] . '</td>';
                                        } else {
                                            echo '<td class="text-white" style="text-align: center;">' . $DatosRanking[$i][$d] . '</td>';
                                        }
                                    }
                                    echo '</tr>';
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" style="margin-top: 2%">  
        <iframe id="FrameExample" src="" height="68" width="100%"> </iframe>
    </div>

    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 bg-dark">  
        <section class="pricing py-7">
            <MARQUEE ScrollAmount="11">
                <h2 href="/" style="color: #2892DB;">📅
                <?php
                    date_default_timezone_set("America/Bogota");
                    echo date ("l d F Y -⏰ h:i a");
                ?>
                </h2>
            </MARQUEE>
        </section>
    </div>

    <!-- Copyright -->
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" style="margin-top: 11%;">  
        <iframe id="FrameFooter" src="footer.html" height="68" width="100%"> </iframe>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.4/sweetalert2.all.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script>
        $("#BtnPDF").click(function(){
            print();
        });
    </script>

</body>
</html>
