<?php
error_reporting(E_ALL); // Error/Exception engine, always use E_ALL

ini_set('ignore_repeated_errors', TRUE); // always use TRUE

ini_set('display_errors', FALSE); // Error/Exception display, use FALSE only in production environment or real server. Use TRUE in development environment

ini_set('log_errors', TRUE); // Error/Exception file logging engine.

ini_set("error_log", "php-procesos.log");
error_log( "Inicio de Procesos" );

require_once 'core/database.php';
require_once 'core/messages.php';

require_once 'core/controller.php';
require_once 'core/view.php';
require_once 'core/model.php';
require_once 'core/app.php';


require_once 'classes/session.php';
require_once 'classes/sessionController.php';
require_once 'classes/errors.php';
require_once 'classes/success.php';


require_once 'config/config.php';

include_once 'models/usersFModel.php';
include_once 'models/userModel.php';
include_once 'models/funcionarioModel.php';
include_once 'models/jefeSecretariaModel.php';
include_once 'models/secretariaModel.php';
include_once 'models/adminModel.php';
include_once 'models/infractionsModel.php';

$app = new App();





?>