<?php

class PlayList{
    /**
     * @param Song[] $songs
     */

    public function __construct(public $name, public array $songs){
    }
}


class Song{
    public function __construct(public string $name, public string $artist){

    }

}

$songs = [
    new Song('My Heart Will Go On', 'Celine Dion')
];

$playlist = new PlayList('90s Movie Soundtracks', $songs);

foreach($playlist->songs as $song){
    var_dump($song->artist);
}