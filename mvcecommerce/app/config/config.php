<?php

    //Database params
    define('DB_HOST', 'localhost'); //Add your db host
    define('DB_USER', 'root'); // Add your DB root
    define('DB_PASS', ''); //Add your DB pass
    define('DB_NAME', 'mvcecommerce'); //Add your DB Name

    //APPROOT
    define('APPROOT', dirname(dirname(__FILE__)));
    define('PUBROOT', dirname(APPROOT) . '/public/');

    //URLROOT (Dynamic links)
    define('URLROOT', 'http://localhost/mvcecommerce');

    //Sitename
    define('SITENAME', 'Ebreo Ecommerce');
