<?php
/**
 * Created by PhpStorm.
 * User: Mogbeyi David
 * Date: 29/10/2017
 * Time: 20:39
 */
include ("../models/server.php");
include ("../views/includes/header.php");
include ("../views/includes/dashboard.php");
$query = "SELECT * FROM records";
$result = mysqli_query($connection , $query);
if($result){
    $row = mysqli_fetch_assoc($result);
}

print "<pre>";
print_r($row);
print "</pre>"
?>