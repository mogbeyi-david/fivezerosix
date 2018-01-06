<?php
include "../init.php";
/**
 * Created by PhpStorm.
 * User: Mogbeyi David
 * Date: 27/10/2017
 * Time: 19:55
 */
class RegisterController{

    private $username;
    private $email;
    private $password;

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
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
if(isset($_POST['register'])){
    $server = new Server();
    $connection = $server->connect();
    $registerController = new RegisterController();
    $registerController->setUsername($_POST['username']);
    $registerController->setEmail($_POST['email']);
    $registerController->setPassword($_POST['password']);
    $username = $registerController->getUsername();
    $email = $registerController->getEmail();
    $password = $registerController->getPassword();
//$user_data = array(
//    "username" => $username,
//    "email" => $email,
//    "password" => $password
//);
    $query = "INSERT INTO users(username , email , password) VALUES('$username' , '$email' , '$password')";
    $output = DbOperations::insert($connection , $query);
    if($output){
        print True;
    }else{
        print False;
    }
}

?>