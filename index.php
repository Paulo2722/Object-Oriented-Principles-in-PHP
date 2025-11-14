<?php

class PlayList{

    public function __construct(public $name, public $songs){
    }

    public function shuffle(){
        shuffle($this->songs);
    }
}

$playlists = [];

$playlists[] = new PlayList('80s Headbangers', [
    'Back in Black',
    'Hells Bells',
    'Highway to Hell'
]);

die(var_dump($playList));




/*
class Post{
    
    public function archive(){

    }

    public function share(){

    }
}

class Coment{

    public function respond(){

    }
}

class Photo{

    public function convert(){

    }

    public function upscalse(){

    }
}
*/