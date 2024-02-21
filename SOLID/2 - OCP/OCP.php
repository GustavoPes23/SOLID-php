<?php

//Classe abstrata não pode ser instanciada, é apenas um modelo
abstract class Video
{
    abstract public function calculaInteresse();
}

class Movie extends Video
{
    public function calculaInteresse(): void
    {

    }
}

class TVShow extends Video
{
    public function calculaInteresse(): void
    {

    }
}