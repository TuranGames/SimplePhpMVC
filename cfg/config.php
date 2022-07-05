<?php
	$hostname = 'localhost';
	$username = 'root';
	$passWord = '';
	$dbName = 'id12896972_itproger';
 $db = mysqli_connect($hostname,$username,$password,$dbName ) or die("ERROR"); 


define('sl', DIRECTORY_SEPARATOR); // -----  slash "" \ ""
define('ROOT', dirname(__DIR__).sl);
define('controllers', "controllers".sl);
define('models', "models".sl);
define('views', "views".sl);
define('sysImages', "images\img".sl);
define('Avatars', "images\avatars".sl);

   