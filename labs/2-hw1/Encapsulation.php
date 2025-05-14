<?php

class Cat {
    private $name;
    private $color;

    public function __construct(string $name, string $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function getName(): string
    {
        return $this->name;
    }
    
    public function getColor(): string
    {
        return $this->color;
    }
    
    public function setName(string $name): string
    {
        return $this->name = $name;
    }
    
    public function setColor(string $color): string
    {
        return $this->color = $color;
    }

    public function sayHello() {
        return 'Привет я ' . $this->getName() . ', и я ' . $this->getColor();
    }
}

$cat = new Cat('Кнопа', 'серая');
echo $cat->sayHello();
$cat->setColor('розовая');
echo $cat->sayHello();