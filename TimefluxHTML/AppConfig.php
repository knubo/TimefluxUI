<?php

class AppConfig {
    const DB_HOST_NAME="localhost:3306";
    const DB_USER="root";
    const DB_PASSWORD="";
    const DB_NAME="test";

    function db($dbSelect) {
        return array(AppConfig::DB_HOST_NAME, AppConfig::DB_USER, AppConfig::DB_PASSWORD, AppConfig::DB_NAME);
    }
    
    const LOG_DB_STATEMENTS = false;
}

?>
