<?php

class User {
    
    //public  -- se puede acceder desde cuanquier parte
    //protected -- solo lo pueden acceder las clases que heredan de mi
    //private  -- solo puedo acceder yo como clase, nadie mas ni siquiera los hijos que heredan de mi

    public const PAGINATE = 25;
    public $username;
    protected $password;

    public function getUsername() {
        // ...
    }
}