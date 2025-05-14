<?php

// Интерфейс для объектов, которые могут вычислять площадь
interface CalculateSquare {
    public function calculateSquare(): float;
}

class Square implements CalculateSquare {
    private $side;

    public function __construct(float $side)
    {
        $this->side = $side;
    }

    public function calculateSquare(): float
    {
        return $this->side * $this->side;
    }
}

class Circle {
    private $radius;

    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }

    public function calculateArea(): float
    {
        return pi() * $this->radius * $this->radius;
    }
}

function printObjectInfo($object)
{
    $className = get_class($object);

    echo "Это объект класса: $className\n";

    if ($object instanceof CalculateSquare) {
        echo "Объект класса $className реализует интерфейс CalculateSquare.\n";
        echo "Площадь: " . $object->calculateSquare() . "\n";
    } else {
        echo "Объект класса $className не реализует интерфейс CalculateSquare.\n";
    }
}


$square = new Square(4);
$circle = new Circle(3);

printObjectInfo($square);
printObjectInfo($circle);
?>
