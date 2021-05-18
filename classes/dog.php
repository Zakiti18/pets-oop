<?php

class Dog extends Pet
{
    //private $_breed;

    function fetch()
    {
        echo "{$this->getName()} is fetching<br>";
    }
}