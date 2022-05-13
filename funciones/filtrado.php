<?php
/*
  Clase filtrado para evitar ataques de XSS
  @author Alberto Bravo
 */
function filtrado($texto) {
    $texto = trim($texto);
    $texto = htmlspecialchars($texto);
    $texto = stripslashes($texto);
    return $texto;
}

?>