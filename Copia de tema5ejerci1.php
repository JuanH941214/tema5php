
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<h1>EJERCICIO 5 nivel *</h1>
</body>

</html>
<?php
abstract class Mascotas
{
    protected $sonido;
    public function __construct($sonido)
    {
        $this->sonido = $sonido;
    }
    abstract function makeNoise();
}

class Perro extends Mascotas
{
    function makeNoise(){
       echo $this->sonido;

    }
}

class Gato extends Mascotas
{
    function makeNoise(){
       echo $this->sonido;
    }
}

$miPerro=new Perro("woof");
$miGato=new Gato("miauuu");
echo "mi perro hace : <br>";
$miPerro->makeNoise();
echo "<br>";
echo "mi gato hace : <br>";
$miGato->makeNoise();


?>