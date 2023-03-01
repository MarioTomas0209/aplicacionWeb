<?php
include("../../bd.php");

$setencia = $conexion -> prepare("SELECT * FROM `puestos`");
$setencia -> execute();
$listaPuestos = $setencia -> fetchAll(PDO::FETCH_ASSOC);

print_r($listaPuestos);
?>

<?php include('../../templates/header.php');?>
<h4>Puesto</h4>

<div class="card mt-3">
    <div class="card-header">
        <a name="" id="" class="btn btn-primary" href="crear.php" role="button">Agregar</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Nombre puesto</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td scope="row">R1C1</td>
                        <td>R1C2</td>
                        <td>
                            <a name="btnEditar" id="btnEditar" class="btn btn-warning" href="#" role="button">Editar</a>
                            <a name="btnEliminar" id="btnEliminar" class="btn btn-danger" href="#" role="button">Eliminar</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        
    </div>

</div>


<?php include('../../templates/footer.php');?>