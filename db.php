<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'bd_comex'
) or die(mysqli_erro($mysqli));

?>
