<?php //Ejemplo aprenderaprogramar.com
$precio1 = $_POST['precio1'];
$precio2 = $_POST['precio2'];
$precio3 = $_POST['precio3'];
$media = ($precio1+$precio2+$precio3)/3;
echo "<br/> &nbsp; DATOS RECIBIDOS";
echo "<br/> &nbsp; Precio producto 1: $$". $precio1. " pesos";
echo "<br/> &nbsp; Precio producto 2: $$". $precio2. " pesos";
echo "<br/> &nbsp; Precio producto 3: $$". $precio3. " pesos <br/>";
echo "<br/> &nbsp; El precio promedio de los producto es de: ". $media. " euros";
?>
