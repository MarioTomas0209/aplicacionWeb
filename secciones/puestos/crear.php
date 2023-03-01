<?php include('../../templates/header.php');?>
<h4>Agregar puesto</h4>

<div class="card mt-3">
    <div class="card-header">
        Puestos
    </div>
    <div class="card-body">
       <form action="" method="post" enctype="multipart/form-data">

            <div class="mb-3">
              <label for="nombrePuesto" class="form-label">Nombre puesto:</label>
              <input type="text"
                class="form-control" name="nombrePuesto" id="nombrePuesto" aria-describedby="helpId" placeholder="Nombre del puesto">
            </div>

            <button type="submit" class="btn btn-primary">Agregar</button>
            <a name="" id="" class="btn btn-danger" href="index.php" role="button">Cancelar</a>

       </form>
    </div>
</div>


<?php include('../../templates/footer.php');?>