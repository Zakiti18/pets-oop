<?php

/**
 * Class Pet
 * Represents a pet object with name and color
 * @author Phillip Ball
 * @copyright 2021
 */
class Pet
{
    // fields
    private $_name;
    private $_color;

    // methods

    /**
     * Pet constructor.
     * @param String $name The pet's name
     * @param string $color The pet's color, default unknown
     * @return void
     */
    function __construct($name, $color="unknown")
    {
        $this->_name = $name;
        $this->_color = $color;
    }

    function eat()
    {
        echo "{$this->_name} is eating<br>";
    }

    function talk()
    {
        echo "{$this->_name} is talking<br>";
    }

    function sleep()
    {
        echo "{$this->_name} is sleeping<br>";
    }

    // getters

    /**
     * getName()
     * @return String The pet's name
     */
    function getName()
    {
        return $this->_name;
    }

    function getColor()
    {
        return $this->_color;
    }

    // setters
    /**
     * getName()
     * @param String The pet's name
     * @return void
     */
    function setName($name)
    {
        $this->_name = $name;
    }

    function setColor($color)
    {
        $this->_color = $color;
    }
}