<?php

include_once "../AppConfig.php";
include_once 'DB.php';
$db = new DB();

$prep = $db->prepare("select * from projects");
$res = $prep->execute();

echo json_encode($res);

?>