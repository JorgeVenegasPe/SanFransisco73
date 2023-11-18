
<header>
    <div class="nav-bar">
        <a href="index.php#home" class="logo"><img src="resources/images/LogoSF3.png" alt=""></a>
        <div class="navigation">
            <div class="nav-items">
                <div class="nav-close-btn"></div>
                <a href="index.php#nosotros">Nosotros</a>
                <a href="index.php#services">Servicios</a>
        <?php
        session_start();

        if (isset($_SESSION['usuario'])) {
            $usuario = $_SESSION['usuario'];
        ?>
                <a href="index.php#reserva">Reservar cita</a>
                <a href="Int-Art.php">IA</a>
            </div> 
        </div> 
            <div class="navigation2">
                <div class="nav-items2">
                    <a href="#"> <span>Bienvenido, <?php echo $usuario; ?></span> </a>
                    <a class="button-signup" href="views\logout.php">Salir</a>
                </div>
            </div>
        <?php
        } else {
        ?>
                <a href="index.php#reserva">Reservar cita</a>
                <a href="web-ia.php">IA</a>
            </div> 
        </div> 
            <div class="navigation2">
                <div class="nav-items2">
                    <a href="Login_Registro.php">Iniciar Sesión</a>
                    <a class="button-signup" href="Login_Registro.php">Registrar</a>
                </div>
            </div>
        <?php
        }
        ?>
        <div class="nav-menu-btn"></div>  
    </div>
</header>