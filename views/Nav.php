
<?php
    if($NombreUsuario != ''){
        echo '<ul class="navbar-nav ms-auto">
            <li class="nav-item active">
                <a class="nav-link text-info" href="../Controllers/CrearUsuario.php">👨🏽‍💼 Crear Usuario </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-info" href="Ranking.php">📋 Ranking</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-danger" href="../Controllers/Logout.php"> ☠ Cerrar Sesion </a>
            </li>
        </ul>';
    }else{
        echo '<li>
            <a href="../views/Ranking.php">
                <span>👈🏽 Atras</span>
            </a>
        </li>';
    }

?>
