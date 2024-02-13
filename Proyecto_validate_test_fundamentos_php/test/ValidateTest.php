<?php

use PHPUnit\Framework\TestCase;
use App\Validate;

class ValidateTest extends TestCase{
    # funcion que hace el test

    public function test_email(){
        $email = Validate::email('jeyaleonel@gmail.com');
        $this->assertTrue($email);

        $email = Validate::email('jeyaleonel@@gmail.com');
        $this->assertFalse($email);
    }

    public function test_url(){
        $url = Validate::url('https://hechoamano.wcreativa.site');
        $this->assertTrue($url);

        $url = Validate::url('hechoamano.webcreativa.site');
        $this->assertFalse($url);
    }

    public function test_password(){
        $password = Validate::password('pruebaPruebitaPrueba123');
        $this->assertTrue($password);

        $password = Validate::password('7a7BBkhkjfghur');
        $this->assertTrue($password);

        $password = Validate::password('pruebapruebitaprueba123');
        $this->assertFalse($password);

        $password = Validate::password('pruebaPruebitaPrueba');
        $this->assertFalse($password);

        $password = Validate::password('123Prueba');
        $this->assertFalse($password);
    }
}
