<?php 
    $id_nombre = $datos[0]['id_nombre'];
    $nombre = $datos[0]['nombre'];
    $paterno = $datos[0]['paterno'];
    $materno = $datos[0]['materno'];
?>

<?= $this->extend('layouts/core'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <h1>Actualizar</h1>

    <div class="row">
        <div class="col-sm-12">
            <form method="POST" action="<?php echo base_url().'/actualizar' ?>">
                <input type="text" name="idNombre" hidden value="<?= $id_nombre ?>">
                <div class="mb-3">
                    <label for="" class="form-label">Nombre</label>
                    <input  name="nombre" type="text" class="form-control" value="<?= $nombre ?>" required>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Apellido Paterno</label>
                    <input  name="paterno" type="text" class="form-control" value="<?= $paterno ?>" required>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Apellido Materno</label>
                    <input  name="materno" type="text" class="form-control" value="<?= $materno ?>" required>
                </div>    

                <button type="submit" class="btn btn-warning">Guardar</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>