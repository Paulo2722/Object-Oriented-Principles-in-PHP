<?php

class Person{
    public function __construct(public string $name){

    }

    public function job(){

    }

    public function favoriteTeam(){

    }

    protected function thingsThatKeepUpAtNight(){
        return 'Bob is afraid of dying';
    }
}

$bob = new Person('bob');

var_dump($bop->name);