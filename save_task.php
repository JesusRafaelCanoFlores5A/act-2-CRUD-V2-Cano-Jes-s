<?php

include('db.php');

if (isset($_POST['save_task'])) {
  $id_producto = $_POST['id_producto'];
  $nombre_producto = $_POST['nombre_producto'];
  $precio = $_POST['precio'];
  $descuento = $_POST['descuento'];
  $categoria = $_POST['categoria'];
  $numero_existencias = $_POST['numero_existencias'];
  $proveedor = $_POST['proveedor'];
  $fecha_llegada = $_POST['fecha_llegada'];
  $query = "INSERT INTO tbl_producto(`id_producto`, `nombre_producto`, `precio`, `descuento`, `categoria`, `numero_existencias`, `proveedor`, `fecha_llegada`) VALUES ('$id_producto', '$nombre_producto','$precio', '$descuento','$categoria', '$numero_existencias','$proveedor', '$fecha_llegada')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Registrado correctamente';
  $_SESSION['message_type'] = 'Logrado';
  header('Location: index.php');

}

?>
