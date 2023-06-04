<?php
session_start();
include('../model/m_login.php');

class Controller {

    public function check($user)
    {
        $isAuthenticated = $user->login();
        if ($isAuthenticated) {
            $_SESSION['username'] = $user->getUsername();
            $_SESSION['helloGreet'] = 'halo';
            header('Location: ../view/v_dashboard.php');
            exit;
        } else {
            $_SESSION['status'] = 'errorlogin';
            header('Location: ../view/v_autentication.php');
            exit;
        }
    }

    public function goToSignup($user){
        $user->signup($user);
        header('Location: ../view/v_autentication.php');
        exit;
    }

    public function goToUpdate($user){
        $user->update($user);
        $_SESSION['action'] = 'update';
        header('Location: ../view/v_profile.php');
        exit;
    }

    public function goToDelete($user){
        $user->delete($user);
        header('Location: ../index.php');
        session_destroy();
        exit;
    }
}

if (isset($_SESSION['username'])) {

    if(isset($_POST['update'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $telepon = $_POST['telepon'];

        $user = new User();
        $user->setUsername($username);
        $user->setPassword($password);
        $user->setEmail($email);
        $user->setTelepon($telepon);

        $controller = new Controller();
        $controller->goToUpdate($user);

    }

    if(isset($_POST['delete'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $telepon = $_POST['telepon'];

        $user = new User();
        $user->setUsername($username);
        $user->setPassword($password);
        $user->setEmail($email);
        $user->setTelepon($telepon);


        $controller = new Controller();
        $controller->goToDelete($user);

    }



    header('Location: ../view/v_dashboard.php');
    exit;
} else {
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $user = new User();
        $user->setUsername($username);
        $user->setPassword($password);

        $controller = new Controller();
        $controller->check($user);
    }

    if(isset($_POST['signup'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $telepon = $_POST['telepon'];

        $user = new User();
        $user->setUsername($username);
        $user->setPassword($password);
        $user->setEmail($email);
        $user->setTelepon($telepon);


        $controller = new Controller();
        $controller->goToSignup($user);

    }


    





}
