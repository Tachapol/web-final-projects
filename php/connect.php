<?php
    error_reporting(E_ALL);
    // $conn = new mysqli('localhost','root','','dbcondo');
    $conn = new mysqli('localhost','rentdbco_admin','Rentdbco2','rentdbco_db');
    $conn->set_charset('utf8');
    if ($conn->connect_errno){
        echo "Connected Error : ".$conn->connect_error;
        exit();
    }
    $base_path_blog = '../assets/images/condo/';
    // Timezone
    date_default_timezone_set('Asia/Bangkok');

?>

