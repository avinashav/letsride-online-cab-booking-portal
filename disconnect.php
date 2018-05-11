<?php
session_start();

unset($_SESSION['var']);        //unset() destroys the specified variables.

session_destroy();
  header("location: login.html");
  exit;
?>