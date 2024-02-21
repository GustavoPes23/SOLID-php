<?php

//As subclasses podem substituir suas classes pais sem modificar o comportamento do sistema

class Movie
{
    public function play()
    {

    }

    public function increaseVolume()
    {

    }
}

class TheLionKing extends Movie
{

}

//$movie = new Movie(); === $movie = new TheLionKing(); -> CERTO


class ModernTimes extends Movie
{
    public function increaseVolume()
    {
        
    }
}

//$movie = new Movie(); !== $movie = new ModernTimes(); -> ERRADO
//increaseVolume do ModernTimes viola a LSP - substitui o comportamento do Movie