<?php

include_once "../AppConfig.php";
include_once 'DB.php';
$db = new DB();

switch ($_REQUEST["action"]) {
    case "list":
        $prep = $db->prepare("select * from hours");
        echo json_encode($prep->execute());
        break;
    case "save":
        break;
}
?>
