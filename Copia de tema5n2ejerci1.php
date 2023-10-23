<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
abstract class Shape
{
    protected $altura;
    protected $amplitud;
    public function __construct($altura, $amplitud)
    {
        $this->altura = $altura;
        $this->amplitud= $amplitud;
    }
    abstract function calculate();
}

class Triangulo extends Shape
{
    function calculate(){
       $area= ($this->altura * $this->amplitud)/2;
       echo $area;
     

    }
}

class Rectangulo extends Shape
{
    function calculate(){
        $area= $this->altura * $this->amplitud;
        echo $area;
  
    }
}

$miTriangulo=new Triangulo(2,4);
echo "el area del triangulo es : <br>";
$miTriangulo->calculate();
$miRectangulo= new Rectangulo(3,4);
echo "<br>el area del triangulo es : <br>";
$miRectangulo->calculate();



?>