<?php
    require_once("c://xampp/htdocs/proyecto/view/head/head.php");
    require_once("c://xampp/htdocs/proyecto/controller/clienteController.php");
    $obj = new clienteController();
    $client = $obj->show($_GET['id']);
?>
  <form action="update.php" method="post" autocomplete="off">
    <h2>Modificando Registro</h2>
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Id</label>
        <div class="col-sm-10">
        <input type="text" name="id" readonly class="form-control-plaintext" id="staticEmail" value="<?= $client[0]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo Nombre</label>
        <div class="col-sm-10">
            <input type="text" name="nombre" class="form-control" id="inputPassword" value="<?= $client[1]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Nueva direccion</label>
        <div class="col-sm-10">
        <input type="text" name="direccion" class="form-control" id="inputPassword" value="<?= $client[2]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo codigo postal</label>
        <div class="col-sm-10">
        <input type="text" name="cp" class="form-control" id="inputPassword" value="<?= $client[3]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Nueva ciudad </label>
        <div class="col-sm-10">
        <input type="text" name="ciudad" class="form-control" id="inputPassword" value="<?= $client[4]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo email</label>
        <div class="col-sm-10">
        <input type="text" name="email" class="form-control" id="inputPassword" value="<?= $client[5]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Nuevo telefono</label>
        <div class="col-sm-10">
        <input type="text" name="telefono" class="form-control" id="inputPassword" value="<?= $client[6]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo apellido</label>
        <div class="col-sm-10">
        <input type="text" name="apellidos" class="form-control" id="inputPassword" value="<?= $client[7]?>">
        </div>
    </div>
    <div>
        <input type="submit" class="btn btn-success" value="Actualizar">
        <a class="btn btn-danger" href="show.php?id=<?= $client[0]?>">Cancelar</a>
    </div>
  </form>
<?php
    require_once("c://xampp/htdocs/proyecto/view/head/footer.php");
?>