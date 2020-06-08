<?php
require_once( 'flutterapi.php' );
$db = new BD();
$db->connect();

$users=$db->getuser();

echo json_encode($users);


?>
