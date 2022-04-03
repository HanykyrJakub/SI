<?php

    namespace demo\verse1;
    
    error_reporting(E_ALL);
    define("APP_DIR", "/APP");

    spl_autoload_register(function (string $classname) {
        $classname = str_replace("demo\\verse1\\", "", $classname);
        if (file_exists(APP_DIR . "$classname.php")) {
            require APP_DIR . "$classname.php";
        } else{
            die("Nemohu Nahrát $classname.");
        }
    });

    $RiverCity = new Place(10, 65);
    $Vault_101 = new Place(24, 50);
    $VaultDweller = new Player (23,43,100,7,9,8);
    $Wastelander = new Player (60,53, 75,4,2,5);
    var_dump($Wastelander->getDistance($Vault_101));
    var_dump($VaultDweller->getDistance($RiverCity));