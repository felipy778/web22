<?php


  function criarSessao($usuario){
    session_start();
    $_SESSION['usuario'] = $usuario
    header(Location:participantes/areaparticipantes.php)
    exit;
  }
  if (isset($_POST['login'])) {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    try {
      $bd = new PDO(mysql:host=localhost; dbname=secitec", 'ifpb', 'ifpb');
      $consulta = "select usuario, senha from usuario where usuario = '$usuario' and senha = '$senha'";

      foreach ($bd->query($consulta) as $tupla) {
      }
    }
    catch(PDOException $e) {
      echo $e->getMessage();
    }
  }
  include "login.html"
?>
