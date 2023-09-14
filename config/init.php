<?php

// start session
session_start();

// Config File
require_once 'config.php';

//Include Helpers
require_once 'helpers/system_helper.php';


// Autoloader
spl_autoload_register(function ($class) {
    require_once 'lib/' . $class . '.php';
});

