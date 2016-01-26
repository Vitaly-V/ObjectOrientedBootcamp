<?php

/**
 * Created by PhpStorm.
 * User: Vitaly
 * Date: 1/26/2016
 * Time: 22:28
 */
abstract class Shape
{
    protected $color;

    public function __construct($color = 'red')
    {
        $this->color = $color;
    }

    abstract protected function getArea();
}

class Square extends Shape
{
    protected $length = 4;

    public function getArea()
    {
        return pow($this->length, 2);
    }

    public function getColor()
    {
        return $this->color;
    }
}

class Triangle extends Shape
{
    protected $base = 4;
    protected $height = 7;

    public function getArea()
    {
        return .5 * $this->base * $this->height;
    }
}

class Circle extends Shape
{
    protected $radius = 5;

    public function getArea()
    {
        return M_PI * pow($this->radius, 2);
    }
}


echo (new Square())->getColor();