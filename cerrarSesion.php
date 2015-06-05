<?php
  session_start();
  if (!isset($_SESSION['cliente']))
    header("location:index.html");
  else{
    /* usamos la función session_unset() para liberar la variable de sesión que se encuentra registrada */
    session_unset($_SESSION['cliente']);
    // Destruye la información de la sesión
    session_destroy();
    header("location:index.html");
  }
?>
