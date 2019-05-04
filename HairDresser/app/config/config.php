<?php
define('DS', DIRECTORY_SEPARATOR);
//check root! manipulate ammount of dirname function.
define('ROOT', dirname(dirname(dirname(__FILE__).DS.'... ')));
define('URL', 'http://localhost:8080/GitHub/Website_Hair_dresser/HairDresser/');

// in core.php file to define varible URL position / url index
define('URL1', 3);
define('URL2', 4);
define('URLparam', 5);

//in database.php
define('HOST', 'localhost');
define('DB_NAME', '...');
define('DB_PASSWORD', '...');
define('DB_USER_NAME', '...');
define('DSN', "mysql:host=".HOST.";dbname=".DB_NAME); 


include_once ROOT.'/control/Core.php';
include_once ROOT.'/control/Database.php';



