<?php

include_once '../includes/Db.php';

class User extends DB {
    
    private $name;
    private $username;

    public function userExist($username, $pass) {
        $md5password = md5($pass);
        $query = $this->connect()->prepare('SELECT * FROM users WHERE username = :username AND password = :pass');
        $query->execute(['username' => $username, 'pass' => $md5password]);

        if ($query->rowCount()) {
            return true;
        } else {
            return false;
        }
    }

    public function setUser($user) {
        $query = $this->connect()->prepare('SELECT * FROM users WHERE username = :username');
        $query->execute(['username' => $user]);

        foreach ($query as $currentUser) {
            $this->name = $currentUser['name'];
            $this->username = $currentUser['username'];
        }
    }

    public function getName() {
        return $this->name;
    }
}

?>