<?php include('../../templates/header.php');?>

<h4>Empleados</h4>


<div class="card mt-3">
    <div class="card-header">
        <a name="" id="" class="btn btn-primary" href="crear.php" role="button">Agregar</a>
    </div>
    <div class="card-body">
        <div class="table-responsive-sm">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Foto</th>
                        <th scope="col">CV</th>
                        <th scope="col">Puesto</th>
                        <th scope="col">Fecha de ingreso</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td scope="row">Mario Tomas</td>
                        <td>Imagen</td>
                        <td>R1C3</td>
                        <td>Programador</td>
                        <td>12 de diciembre de 2020</td>
                        <td>
                            <a name="" id="" class="btn btn-primary" href="#" role="button">Carta</a>
                            <a name="" id="" class="btn btn-warning" href="#" role="button">Editar</a>
                            <a name="" id="" class="btn btn-danger" href="#" role="button">Eliminar</a>
                        </td>
                    </tr>
                   
                </tbody>
            </table>
        </div>
        
    </div>

</div>


<?php include('../../templates/footer.php');?>