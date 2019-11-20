<?php
function errorLog($variable){
    $fecha_actual = date("Y-m-d H:i:s");
    $archivo = fopen("error-log.txt", "a+");
    fwrite($archivo, $fecha_actual." ".$variable."\r\n");
    fclose($archivo);
}
?>
