<?php

//Uma classe não é obrigada a implementar interfaces que ela não utilizará

interface MovieAction
{
    public function play();
    public function increaseVolume();
}

class TheLionKing implements MovieAction
{
    public function play()
    {

    }

    public function increaseVolume()
    {
        
    }
}

class ModernTimes implements MovieAction
{
    public function play()
    {
    }

    public function increasevolume()
    {
        //Não será utilizado já que o filme é mudo
        //Ele obriga a implementar um método por conta da interface
    }
}