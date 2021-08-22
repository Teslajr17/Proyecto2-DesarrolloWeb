<?php
  unset($_SESSION["cui"]);
  session_destroy();
  header("Location: sesion.php");
  exit;
?>
