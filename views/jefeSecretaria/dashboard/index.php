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
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/secretaryBossDashboard.css">
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
                    <li class="list  echo $pagina ==  'profile' ? 'active':''; ?>">
                        <a href="?p=profile">
                            <span class="text">Bienvenido!<br><?php echo $user->getName() ?><br>DNI<br><?php echo $user->getNationalID() ?></span>
                            <span><img class="user-img" src="<?php echo constant('URL'); ?>public/img/user_white.png" />
                            </span>
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
                    <li class="list <?php echo $pagina ==  'multas' ? 'active' : ''; ?>">
                        <a href="?p=multas">
                            <span class="text">Administrar Secretarias</span>
                            <span class="icon">
                                <ion-icon name="add-circle-outline"></ion-icon>
                            </span>
                        </a>
                    </li>
                    <li class="list <?php echo $pagina ==  'history' ? 'active' : ''; ?>">
                        <a href="?p=history">
                            <span id="boton" class="text">Administrar Funcionarios</span>
                            <span class="icon ">
                                <ion-icon name="document-text-outline"></ion-icon>
                            </span>

                        </a>
                    </li>
                    <li class="list <?php echo $pagina ==  'history' ? 'active' : ''; ?>">
                        <a href="?p=history">
                            <span id="boton" class="text">Nueva Secretaria</span>
                            <span class="icon ">
                                <ion-icon name="document-text-outline"></ion-icon>
                            </span>

                        </a>
                    </li>
                    <li class="list <?php echo $pagina ==  'history' ? 'active' : ''; ?>">
                        <a href="?p=history">
                            <span id="boton" class="text">Histórico</span>
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
    <div id="content">

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