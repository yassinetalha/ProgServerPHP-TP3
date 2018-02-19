<?php
/**
 * Created by PhpStorm.
 * User: session2
 * Date: 08/02/2018
 * Time: 15:07
 */

//Database Connection Constants.
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','gallery_db');
$connection =
    mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
//Test the connection by mysqli_connect().
if($connection) {
    echo "true";
}else {
    echo "die";

}