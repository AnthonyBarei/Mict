<?php
if($_POST["todeletefile"]){
  unlink($_POST["todeletefile"]);
}
header('Location: ../back/index.php');
?>
