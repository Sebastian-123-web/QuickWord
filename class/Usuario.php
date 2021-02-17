<?php
  /**
   *
   */
  class Usuario{
    public function UsuarioAutentificacion($usuario, $contraseña){
      $sql = "SELECT * FROM usuario WHERE username = '$usuario' AND password = '$contraseña'";
      include 'conexion.php';
      $consulta = mysqli_query($link, $sql);
      $arreglo = mysqli_fetch_array($consulta);
    }
  }

?>
