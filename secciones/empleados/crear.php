<?php include('../../templates/header.php');?>

<h4>Agregar Empleado</h4>

<div class="card mt-3">
    <div class="card-header">
        Datos del empleado
    </div>
    <div class="card-body">
        
        <form action="" method="post" enctype="multipart/form-data">

            <div class="mb-3">
              <label for="PrimerNombre" class="form-label">Primer nombre:</label>
              <input type="text"
                class="form-control" name="PrimerNombre" id="PrimerNombre" aria-describedby="helpId" placeholder="Primer nombre...">
            </div>

            <div class="mb-3">
              <label for="segundoNombre" class="form-label">Segundo nombre:</label>
              <input type="text"
                class="form-control" name="segundoNombre" id="segundoNombre" aria-describedby="helpId" placeholder="Segundo nombre...">
            </div>

            <div class="mb-3">
              <label for="primerApellido" class="form-label">Primer apellido:</label>
              <input type="text"
                class="form-control" name="primerApellido" id="primerApellido" aria-describedby="helpId" placeholder="Primer apellido...">
            </div>

            <div class="mb-3">
              <label for="segundoApellido" class="form-label">Segundo apellido:</label>
              <input type="text"
                class="form-control" name="segundoApellido" id="segundoApellido" aria-describedby="helpId" placeholder="Segundo apellido">
            </div>
            
            <div class="mb-3">
              <label for="foto" class="form-label">Foto</label>
              <input type="file"
                class="form-control" name="foto" id="foto" aria-describedby="helpId" placeholder="Fotografia">
            </div>
            
            <div class="mb-3">
              <label for="foto" class="form-label">CV</label>
              <input type="file"
                class="form-control" name="cv" id="cv" aria-describedby="helpId" placeholder="Curriculum vitae">
            </div>

            <div class="mb-3">
              <label for="idPuesto" class="form-label">Puesto:</label>
              <select class="form-select form-select-lg" name="idPuesto" id="idPuesto">
                <option selected>Seleccione</option>
                <option value="">New Delhi</option>
                <option value="">Istanbul</option>
                <option value="">Jakarta</option>
              </select>
            </div>

            <div class="mb-3">
              <label for="fechaDeIngreso" class="form-label">FEcha de ingreso:</label>
              <input type="date" class="form-control" name="fechaDeIngreso" id="fechaDeIngreso" aria-describedby="emailHelpId" placeholder="Fecha de ingreso en la empresa">
            </div>

            <button type="submit" class="btn btn-primary">Agregar</button>
            <a name="" id="" class="btn btn-danger" href="index.php" role="button">Cancelar</a>

        </form>

    </div>
</div>


<?php include('../../templates/footer.php');?>