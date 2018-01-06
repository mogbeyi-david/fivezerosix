<?php
/**
 * Created by PhpStorm.
 * User: Mogbeyi David
 * Date: 28/10/2017
 * Time: 10:36
 */
include "../init.php";
class LoginController{

    private $username;
    private $password;

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getPassword()
    {
        return $this->password;
    }
}

if(isset($_POST['login'])){
    $server = new Server();
    $connection = $server->connect();
    $login = new LoginController();
    $login->setPassword($_POST['username']);
    $login->setUsername($_POST['password']);
    $username = $login->getUsername();
    $password = $login->getPassword();
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $output = DbOperations::insert($connection , $query);
    if($output){
        header("location:../views/pages/profile.php");
    }else{
        print $connection->error;
    }
}


?>