<?php


class Circle
{
    public $radius;
    public $color;

    public function __construct($radius, $color)
    {
        $this->radius = $radius;
        $this->color = $color;
    }

    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function calculateArea()
    {
        return pi() * $this->radius ** 2;
    }

    public function toString()
    {
        return "radius=" . $this->radius . " color=" . $this->color . " S= " . $this->calculateArea();
    }

}

class Cylinder extends Circle
{
    public $height;

    public function __construct($radius, $color, $height)
    {
        parent::__construct($radius, $color);
        $this->height = $height;
    }

    public function calculateV()
    {
        return parent::calculateArea() * $this->height;
    }

    public function toString()
    {
        return "radius=" . $this->radius . " color=" . $this->color . " S= " . $this->calculateV();
    }

}

$circle = new Circle(5, "blue");
$cylinder = new Cylinder(5, "red", 10);
echo $circle->toString();
echo $cylinder->toString();