<?php

include_once '../includes/User.php';
include_once '../includes/UserSession.php';

$userSession = new UserSession();
$user = new User;

if (isset($_SESSION['username'])) {
    $user->setUser($userSession->getCurrentUser());
    include_once '../views/home.php';
}
else if (isset($_POST['username']) && isset($_POST['password'])) {
    $userForm = $_POST['username'];
    $passForm = $_POST['password'];

    if ($user->userExist($userForm, $passForm)){
        $userSession->setCurrentUser($userForm);
        $user->setUser($userForm);
        include_once '../views/home.php';

    }
    else {
        $errorLogin = "Incorrect username or password";
        include_once '../views/login.php';
    }
}
else {
    include_once '../views/login.php';
}

?>