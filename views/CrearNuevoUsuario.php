
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>:: Crear Usuario :: </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
<body class="bg-dark">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-black static-top shadow">
        <div class="container bg-black">
            <a class="text-white" href="../"><h2 class="text-info"> <img src="../img/LogoPrueba.gif" class="logo" width="20%"/> </a> 
            <h2 class="navbar-brand text-white" style="margin-left: -50%; font-size: 32px;"> <?php //echo $NombreUsuario;?> </h2>
            <button class="navbar-toggler bg-info" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-brand collapse navbar-collapse" id="navbarResponsive">
                <?php require("Nav.php") ?>
            </div>
        </div>
    </nav>

    <section class="pricing py-7">
        <div class="container col-md-8 col-lg-7 col-xl-10" style="margin-top: 2%;"> 
            <div class="card-header bg-info text-center text-uppercase"><b>Nuevo Usuario</b></div>           
            <div class="card-body bg-light">
                <form id="frmCrearUsuario" class="col-md-12 mb-12" style="margin-top: 2%;">
                    <div class="row">
                        <div class="col-md-3">
                            <label class="form-label">Tipo De Documento</label>
                            <div class="form-group">
                                <select class="form-select" id="SelectTipoDocu" name="SelectTipoDocu">
                                    <option disabled selected>Elige Una Opcion</option>
                                    <?php //echo $ListadoTipoDocumento; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label" for="InputDocumento">Documento</label>
                            <input type="text" class="form-control" id="InputDocumento" placeholder="Numero Documento"/>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="InputNombre">Nombre Usuario</label>
                            <input type="text" class="form-control" id="InputNombre" placeholder="Nombre Completo"/>
                        </div>
                    </div>

                    <div class="row" style="margin-top: 2%;">
                        <div class="col-md-4">
                            <label class="form-label" for="InputNombreCiudad">Ciudad</label>
                            <input type="text" class="form-control" id="InputNombreCiudad" placeholder="Nombre Ciudad"/>
                        </div>
                        <div class="col-md-4" style="margin-top: 3%; margin-left: 11%;">
                            <button type="button" id="BtnGuardar" class="btn btn-info text-white">💾 Guardar </button>
                            <a href="../" class="btn btn-secondary">❌ Cancelar </a>
                        </div>
                    </div>

                </form>
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
