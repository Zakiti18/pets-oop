<?php

class Cat extends Pet
{
    function scratch()
    {
        echo "{$this->getName()} is scratching<br>";
    }
}