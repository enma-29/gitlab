<?php
ob_start();
require_once 'config.php';
if(isset($_POST['guardar'])){
  $nombres = htmlentities($_POST['nombres']);
  $apellidos = htmlentities($_POST['apellidos']);
  $pais = htmlentities($_POST['pais']);
  $programas = addslashes(implode(", ", $_POST['programas']));

  echo($programas);
  header("location: index.php");		
	}
?>