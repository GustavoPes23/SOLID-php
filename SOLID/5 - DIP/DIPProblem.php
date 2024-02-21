<?php

//você deve depender de abastrações e não implementações
//implementações são classes concretas = new class()
//abstração é um modelo da classe

class DramaCategory
{

}

class MovieE
{
    private string $name;
    private string $category;

    public function setName(string $name): void
    {

    }

    //Estou forçando o tipo DramaCategory -> ela é um tipo de categoria, apenas drama
    //então todas as vezes eu sou obrigado a passar essa classe DramaCategory como param
    //é um laço de dependência -> dependo da implementação de DramaCategory
    public function setCategory(DramaCategory $category): void
    {
        
    }

    //Todas as vezes que eu chamar getCategory eu vou depender da implementação da classe DramaCategory
    public function getCategory(): DramaCategory
    {
        return new DramaCategory();
    }
}

//Eu instância DramaCategory dentro do meu objeto -> má pratica
$movie = new MovieE();
$movie->setName("The Big Lebowski");
$movie->setCategory(new DramaCategory());
// $movie->setCategory("teste"); -> não vai funcionar