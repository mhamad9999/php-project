<?php
  setcookie('name', '', time() - (86400 * 2), "/"); 
  setcookie('pass', '', time() - (86400 * 2), "/"); 
  header("Location: login");

?>
