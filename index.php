<?php

class User{
    public private(set) string $email{
        get => str_replace('@', '(at)', $this->email);
    }

    public function __construct(string $email){
        $this->email = $email;
    }

    public function updateEmail(string $email){
        $this->email = $email;
    }
}

$user = new User('paulo@escanellas.com');

$user->updateEmail('ndainijnijsd');

echo $user->email;