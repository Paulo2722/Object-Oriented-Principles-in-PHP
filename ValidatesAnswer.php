<?php

class Example{
    protected string $email;

    public function getEmail(): ?string{
        return $this->email;
    }
}

$ex = new Example();

$ex->email;