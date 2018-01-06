<?php
/**
 * Created by PhpStorm.
 * User: Mogbeyi David
 * Date: 27/10/2017
 * Time: 22:03
 */

class DbOperations{

    public static function query($table , $data , $connection){
        $sql = "INSERT INTO {$table} ";
        foreach ($data as $column => $value){
            $sql .= "({$column}) VALUES (:{$column});";
        }
        $statement = $connection->prepare($sql);
        $statement->execute(array(':'.$column => $value));
        print "<h1>User Added Successfully</h1>";
    }

    public static function insert($connection , $sql){
        $result = mysqli_query($connection , $sql);
        if($result){
            return $result;
        }else{
            return False;
        }
    }


}

?>