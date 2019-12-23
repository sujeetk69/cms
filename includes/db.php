<?php
/* 
DB connection parameters
TODO: Read from from some kind of confuguration or properties file 
*/
$db['db_host'] = "localhost";
$db['db_user'] = "root";
$db['db_password'] = "";
$db['db_name'] = "cms";
/* Define constants to eliminate any chance of accidental modification of these params */
foreach($db as $param_name => $param_value) {
    /* We will have contants like DB_NAME, DB_USER etc */
    define(strtoupper($param_name), $param_value);
}


$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if($mysqli) {
//    echo "DB Connected";
}
else {
    echo "DB Connection Error";
}
?>