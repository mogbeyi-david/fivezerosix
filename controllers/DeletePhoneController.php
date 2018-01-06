<?php
/**
 * Created by PhpStorm.
 * User: Mogbeyi David
 * Date: 29/10/2017
 * Time: 23:40
 */
include "../models/server.php";
if(isset($_POST['submit_delete'])){
    $enter_id_delete = $_POST["enter_id_delete"];
    $query = "DELETE FROM records WHERE id = '$enter_id_delete'";
    $result = mysqli_query($connection , $query);
    if($result){
        print "Record Successfully Deleted";
    }else{
        print $connection->error;
    }
}
?>