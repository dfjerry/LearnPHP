<?php
class Controller{

    public function login(){
        require_once "View/login.php";
    }
    public function postLogin(){
        //nhan thong tin tu form
        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = new \Model\User();
        $user = $user->attempt($email, $password);
        if(!is_null($user)){//neu user ko null
            $_SESSION['user'] = $user;
            header('Location: ?route=users');
        }else{
            header('Location: ?route=login');
        }
    }
    public function register(){
        require_once "View/register.php";
    }
    public function postRegister(){
        //nhan thong tin tu form
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        //insert to table
        $user = new \Model\User(null, $name, $email, $password);
        $user->save();
        header("Location: ?route=users");
    }
    public function users(){
        require_once "View/users.php";
    }
}