<?php
include("db.php");
$title = '';
$description= '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM tbl_producto WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $id_producto = $row['id_producto']; 
    $nombre_producto = $row['nombre_producto']; 
    $precio = $row['precio']; 
    $descuento = $row['descuento'];
    $categoria = $row['categoria']; 
    $numero_existencias = $row['numero_existencias']; 
    $proveedor = $row['proveedor']; 
    $fecha_llegada = $row['fecha_llegada'];

  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $id_producto = $_POST['id_producto'];
  $nombre_producto = $_POST['nombre_producto'];
  $precio = $_POST['precio'];
  $descuento = $_POST['descuento'];
  $categoria = $_POST['categoria'];
  $numero_existencias = $_POST['numero_existencias'];
  $proveedor = $_POST['proveedor'];
  $fecha_llegada = $_POST['fecha_llegada'];

  $query = "UPDATE tbl_producto set id_producto = '$id_producto', nombre_producto = '$nombre_producto', precio = '$precio', descuento = '$descuento', categoria = '$categoria', numero_existencias = '$numero_existencias', proveedor = '$proveedor', fecha_llegada = '$fecha_llegada' WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Registro Actualizado Correctamente';
  $_SESSION['message_type'] = 'Advertencia';
  header('Location: index.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="form-group">
          <label>Id_Producto</label>
            <input type="number" min="1" name="id_producto" class="form-control" value="<?php echo $id_producto; ?>" placeholder="actualizar id_producto">
          </div>
          <div class="form-group">
          <label>Nombre_Producto</label>
            <input type="text" name="nombre_producto" class="form-control" value="<?php echo $nombre_producto; ?>" placeholder="actualizar nombre_producto" >
          </div>
          <div class="form-group">
          <label>Precio</label>
            <input type="number" min="1" name="precio" class="form-control" value="<?php echo $precio; ?>" placeholder="actualizar precio" >
          </div>
          <div class="form-group">
          <label>Descuento</label>
            <input type="number" min="1" name="descuento" class="form-control" value="<?php echo $descuento; ?>" placeholder="actualizar descuento" >
          </div>
          <div class="form-group">
          <label>Categoría</label>
            <input type="text" name="categoria" class="form-control" value="<?php echo $categoria; ?>" placeholder="actualizar categoria" >
          </div>
          <div class="form-group">
          <label>Numero de Existencias</label>
            <input type="number" min="1" name="numero_existencias" class="form-control" value="<?php echo $numero_existencias; ?>" placeholder="actualizar numero_existencias" >
          </div>
          <div class="form-group">
          <label>Proveedor</label>
            <input type="text" name="proveedor" class="form-control" value="<?php echo $proveedor; ?>" placeholder="actualizar proveedor" >
          </div>
          <div class="form-group">
            <label>Fecha de Llegada</label>
            <input type="date" name="fecha_llegada" class="form-control" value="<?php echo $fecha_llegada; ?>" placeholder="actualizar fecha_llegada" >
          </div>
        <button class="btn-success" name="update">
          Actualizar
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>
