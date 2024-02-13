<?php

namespace App;

class User {
    private $user;
    private $password;
    protected $email;
    protected $nombre;

    function __construct( $nombre, $email, $password, $user) {
        $this->nombre = $nombre;
        $this->email = $email;
        $this->password = $password;
        $this->user = $user;

    }

    public function setUser($user){
        $this->user = $user;
    }

    public function setPassword($password){
        $this->password = $password;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

}