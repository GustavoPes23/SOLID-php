<?php

interface MyMovie
{
    public function play();
}

interface AudioControl
{
    public function increasevolume();
}

class TheLionKing implements MyMovie, AudioControl
{
    public function play()
    {
        //play
    }

    public function increaseVolume()
    {
        //increase volume
    }
}

class TheModernTime implements MyMovie
{
    public function play()
    {
        //play
    }
}