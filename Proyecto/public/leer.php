<?php
$dist = file('chat.json');
$largo=count($dist);
$str_datos = file_get_contents("datos.json");
for ($i = max(0, count($dist)-50); $i < count($dist); $i++) { // en counter almacena el numero total de lineas -50
															  // entonces si i=500 por ejemplo y menor a 550= total de lineas
  	                                                          // si eso es verdadero	
  $linea=$dist[$i];
  $datos = json_decode($linea,true);
  echo"<b>".$datos['usuario']."</b>"."dice: ".$datos['mensaje']."<br>";
}
?>