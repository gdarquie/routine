<?php

use \App\Controller\LaunchController;

require __DIR__.'/bootstrap.php';

$launchController = new LaunchController();
$launchController->launch();

//objectif - générer les logs d'une journée