<div class="section-main">
    <p class="main-text">UNI-MULTAS</p>
    <p class="welcome-text">Bienvenido <?php echo $user->getName() ?>!</p>
    
    <?php

    $debtUser = $user->getDebt();
    if ($debtUser > 0) {


    ?>
     <p class="message-text">Ten mas cuidado la proxima..</p>
        <img class="sad" src="<?php echo constant('URL'); ?>public/gifs/sad.gif">
        <img class="sad-white" src="<?php echo constant('URL'); ?>public/gifs/sad-white.gif">
    <?php } else {  ?>
        <p class="slogan-text">¡Tu seguridad, nuestro compromiso!</p>
        <img class='good' src='<?php echo constant('URL'); ?>public/gifs/good.gif'>
        <img class='welcome-img' src='<?php echo constant('URL'); ?>public/gifs/welcome.gif'>

    <?php } ?>

</div>