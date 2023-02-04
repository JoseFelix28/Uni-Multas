<?php

$user = $this->d['user'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uni-Multas - Dashboard</title>
    <link rel="icon" href="<?php echo constant('URL'); ?>public/icons/logo-icon.ico">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/SecretaryDashboard.css">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/userInfractions.css">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/userHistory.css">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/userProfile.css">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/userMain.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

<body>
    <?php $this->showMessages(); ?>
    <div class="parent">

        <div class="nav-menu">
            <div class="div1">
                <img class="img-logo" src="<?php echo constant('URL'); ?>public/img/logo.png">
                <img class="img-onda" src="<?php echo constant('URL'); ?>public/img/q.svg">
            </div>

            <div class="div2 navigation sub-menu">


                <ul>
                    <li class="<?php echo $pagina ==  'profile' ? 'active' : ''; ?>">
                        <a href="?p=profile">
                            <span class="icon ">
                                <ion-icon name="person-circle-outline"></ion-icon>
                            </span>
                            <span class="text">Bienvenido!<br><?php echo $user->getName() ?><br>DNI<br><?php echo $user->getNationalID() ?></span>
                            <span><img class="user-img" src="<?php echo constant('URL'); ?>public/img/user_white.png" />


                        </a>
                    </li>
                    <li class="list <?php echo $pagina ==  'main' ? 'active' : ''; ?>">
                        <a href="?p=main">
                            <span class="text ">Inicio</span>
                            <span class="icon ">
                                <ion-icon name="home-outline"></ion-icon>
                            </span>
                        </a>
                    </li>
                    <li class="list <?php echo $pagina ==  'jefes' ? 'active' : ''; ?>">
                        <a href="?p=NJFSecretaria">
                            <span class="text">Administrar Jefes de Secretarias</span>
                            <span class="icon">
                                <ion-icon name="add-circle-outline"></ion-icon>
                            </span>
                        </a>
                    </li>
                    <li class="list <?php echo $pagina ==  'summary' ? 'active' : ''; ?>">
                        <a href="?p=summary">
                            <span class="text">Resumen</span>
                            <span class="icon">
                                <ion-icon name="stats-chart-outline"></ion-icon>
                            </span>
                        </a>
                    </li>
                    <li class="list <?php echo $pagina ==  'history' ? 'active' : ''; ?>">
                        <a href="?p=history">
                            <span id="boton" class="text">Historico</span>
                            <span class="icon ">
                                <ion-icon name="document-text-outline"></ion-icon>
                            </span>

                        </a>
                    </li>
                    <li class="list">
                        <a href="<?php echo constant('URL'); ?>logout">

                            <span class="text">Cerrar sesión</span>
                            <span class="icon">
                                <ion-icon name="log-out-outline"></ion-icon>
                            </span>
                        </a>
                    </li>

                    <div class="indicator"></div>
                </ul>
            </div>
        </div>
    </div>

</body>


</html>

<script>
    const list = document.querySelectorAll('.list');

    function activeLink() {
        list.forEach((item) =>
            item.classList.remove('active'));
        this.classList.add('active')
    }
    list.forEach((item) =>
        item.addEventListener('click', activeLink));
</script>
<script const url=location.href; type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script const url=location.href; nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>