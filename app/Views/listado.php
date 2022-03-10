<?= $this->extend('layouts/core'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <h1>Humilde CRUD con CodeIgniter :)</h1>

    <div class="row">
        <div class="col-sm-12">
            <form method="POST" action="<?php echo base_url() . '/crear' ?>" >
                <div class="mb-3">
                    <label for="" class="form-label">Nombre</label>
                    <input name="nombre" type="text" class="form-control" autocomplete="off" required>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Apellido Paterno</label>
                    <input name="paterno" type="text" class="form-control" autocomplete="off" required>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Apellido Materno</label>
                    <input name="materno" type="text" class="form-control" autocomplete="off" required>
                </div>


                <button type="submit" class="btn btn-primary">Crear</button>
            </form>
        </div>
    </div>

    <div class="row mt-4">
        <h2>Listado de personas</h2>
        <div class="col-sm-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido Paterno</th>
                        <th scope="col">Apellido Materno</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Eliminar</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($datos as $key): ?>
                        <tr>
                            <td><?= $key -> nombre ?></td>
                            <td><?= $key -> paterno ?></td>
                            <td><?= $key -> materno ?></td>
                            <td><a href="<?= base_url().'/obtenerNombre/'.$key->id_nombre ?>" class="btn btn-warning">Editar</a></td>
                            <td><a href="<?= base_url().'/eliminar/'.$key->id_nombre ?>" class="btn btn-danger">Eliminar</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
    let mensaje = parseInt('<?= $mensaje ?>');

    if (mensaje === 1) {
      swal(':D', 'Agregado con exito', 'success');
    } else if (mensaje === 0) {
      swal(':(', 'Fallo al agregar', 'error');
    }else if(mensaje === 2){
        swal(':D', 'Registro actualizado con exito', 'success');
    }else if(mensaje === 3){
        swal(':(', 'Hubo un error al actualizar el registro', 'error');
    }else if(mensaje === 4){
        swal(':D', 'Registro eliminado con exito', 'success');
    }else if(mensaje === 5){
        swal(':(', 'Hubo un error al eliminar el registro', 'error');
    }


  </script>

<?= $this-> endSection(); ?>