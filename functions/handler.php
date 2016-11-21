<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 18.11.16
 * Time: 19:57
 */

require_once "func.php";
require_once "../configuration/database.conf.php";

switch ($_REQUEST['action']) {
    case 'checkUserExists':
        if(has($_REQUEST['input_login'])) {
            $connect = new mysqli($db_config['host_name'], $db_config['user_name'], $db_config['user_password'], $db_config['database']['name']);
            if(!$connect) {
                die('Очко с бд: ' . $connect->error);
            }
        }
        break;
}