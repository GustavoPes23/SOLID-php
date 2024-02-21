<?php

interface Category
{

}

class DramaCategory implements Category
{
}

class XCategory implements Category
{
}

class Movie
{
    private string $title;
    private Category $category;

    //Quando for usar como param, usa uma abstração como Category
    public function __construct(string $title, Category $category)
    {
        $this->title = $title;
        $this->category = $category;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getCategory(): Category
    {
        return $this->category;
    }
}

//eu passo minha depedência na hora de instanciar meu objeto Movie
$movie = new Movie("The Big Lebowski", new DramaCategory());
$movie2 = new Movie("The Big Lebowski", new XCategory()); //injenção de depêndência resolve isso
// $movie = new Movie("The Big Lebowski", "teste"); --> vai funcionar