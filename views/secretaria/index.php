<?php

$pagina = isset($_GET['p']) ? strtolower($_GET['p']): 'main';

require_once 'dashboard/index.php';

require_once 'enviroments/'. $pagina .'.php';






?>
