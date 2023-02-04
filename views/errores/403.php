<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Error 403</title>
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/ErrorStyle.css">
    
</head>

<body>

    <div class="conten">
        <div class="conten__img">
            <img src="<?php echo constant('URL'); ?>public/img/carro.png" alt="">
            <p class="conten__number">
                403
            </p>
        </div>
        <div class="conten__Description">
            <p class="conten__error">
                Acceso denegado 
            </p>
          
        <a href="#" class="conten__button" onClick="history.go(-1);">Volver al Inicio</a>
        </div>
    </div>
   
</body>
</html>