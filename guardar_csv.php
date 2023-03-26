<?php
// Verifica si se recibió una solicitud POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Recupera la fila enviada por el usuario
  $nuevaFila = $_POST["fila"];
  
  // Nombre del archivo CSV a utilizar
  $nombreArchivo = "registros.csv";
  
  // Abre el archivo CSV en modo de escritura y apuntador al final del archivo
  $archivoCSV = fopen($nombreArchivo, "a");
  
  // Escribe la nueva fila en el archivo CSV
  fwrite($archivoCSV, $nuevaFila);
  
  // Cierra el archivo CSV
  fclose($archivoCSV);
}
?>
