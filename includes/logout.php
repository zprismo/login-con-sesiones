<?php

    include_once '../includes/UserSession.php';

    $userSession = new UserSession();
    $userSession->closeSession();

    header('location: ../includes/index.php');

?>