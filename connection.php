<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'DamPeeForever');
define('DB_DATABASE', 'github');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

if($db) {
    echo "";
}
else {
    echo "DATABASE ERROR";
}
?>
