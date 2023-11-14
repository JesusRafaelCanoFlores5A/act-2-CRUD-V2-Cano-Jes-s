<?php

include("db.php");

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM tbl_producto WHERE id = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Registro Removido Correctamente';
  $_SESSION['message_type'] = 'Peligro';
  header('Location: index.php');
}

?>
