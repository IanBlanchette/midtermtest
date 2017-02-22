<?php

/* ////////////////////// */
/* DON'T TOUCH THIS FILE! */
/* ////////////////////// */

// cleardb access
$dsn = 'mysql:host=ca-cdbr-azure-central-a.cloudapp.net;dbname=videogamesdb';
$userName = 'b6ee96bd470785';
$password = 'dc381279';

// exception handling - use a try / catch
try {
// instantiates a new pdo - an db object
$db = new PDO($dsn, $userName, $password);

}
catch(PDOException $e) {
$message = $e->getMessage();
echo "An error occurred: " . $message;
}

?>
