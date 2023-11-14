<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>

<main class="container p-4">
  <div class="row">
    <div class="col-md-4">
      <!-- MESSAGES -->

      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>

      <!-- ADD TASK FORM -->
      <div class="card card-body">
        <form action="save_task.php" method="POST">
          <div class="form-group">
          <label>Id_Producto</label>
            <input type="number" min="1" name="id_producto" class="form-control" placeholder="Id_Producto" autofocus>
          </div>
          <div class="form-group">
          <label>Nombre_Producto</label>
            <input type="text" name="nombre_producto" class="form-control" placeholder="Nombre_Producto" autofocus>
          </div>
          <div class="form-group">
          <label>Precio</label>
            <input type="number" min="1" name="precio" class="form-control" placeholder="Precio" autofocus>
          </div>
          <div class="form-group">
          <label>Descuento</label>
            <input type="number" min="1" name="descuento" class="form-control" placeholder="Descuento" autofocus>
          </div>
          <div class="form-group">
          <label>Categoría</label>
            <input type="text" name="categoria" class="form-control" placeholder="Categoría" autofocus>
          </div>
          <div class="form-group">
          <label>Numero de Existencias</label>
            <input type="number" min="1" name="numero_existencias" class="form-control" placeholder="Numero de Existencias" autofocus>
          </div>
          <div class="form-group">
          <label>Proveedor</label>
            <input type="text" name="proveedor" class="form-control" placeholder="Proveedor" autofocus>
          </div>
          <div class="form-group">
            <label>Fecha de Llegada</label>
            <input type="date" name="fecha_llegada" class="form-control" placeholder="Fecha_llegada" autofocus>
          </div>
          <input type="submit" name="save_task" class="btn btn-success btn-block" value="Registrar">
        </form>
      </div>
    </div>
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Id_Producto</th>
            <th>Nombre_Producto</th>
            <th>Precio</th>
            <th>Descuento</th>
            <th>Categoría</th>
            <th>Existencias</th>
            <th>Proveedor</th>
            <th>Fecha_llegada</th>
            <th>Acción</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM tbl_producto";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['id_producto']; ?></td>
            <td><?php echo $row['nombre_producto']; ?></td>
            <td><?php echo $row['precio']; ?></td>
            <td><?php echo $row['descuento']; ?></td>
            <td><?php echo $row['categoria']; ?></td>
            <td><?php echo $row['numero_existencias']; ?></td>
            <td><?php echo $row['proveedor']; ?></td>
            <td><?php echo $row['fecha_llegada']; ?></td>
            <td>
              <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="delete_task.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<?php include('includes/footer.php'); ?>
