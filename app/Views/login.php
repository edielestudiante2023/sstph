<?= $this->extend("layouts/app") ?>

<?= $this->section("body") ?>

<div class="container" style="margin-top:20px;">
    
    <div class="row">
        
    <div>
        <div class="col-sm-3">
            <a  class="navbar-brand" href="https://cycloidtalent.com/" target="_blank">
            <img class="img-thumbnail" src="../imagenes/CYCLOID_ TALENT_SIN_FONDO.png"  alt="Logo Página">
            </a>
        </div>
        <div class="col-sm-3">
            <a  class="navbar-brand" href="https://cycloidtalent.com/" target="_blank">
            <img class="img-thumbnail" src="../imagenes/LOGO_SST.png"  alt="Logo Página">
            </a>
        </div>
        <div class="col-sm-6">
            <div class="panel panel-primary">
                <div class="panel-heading">Ingreso a Clientes</div>
                <div class="panel-body">
                    <?php if (isset($validation)) : ?>
                        <div class="col-12">
                            <div class="alert alert-danger" role="alert">
                                <?= $validation->listErrors() ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <form class="" action="<?= base_url('login') ?>" method="post">
                        <div class="form-group">
                            <label for="email">Correo del Conjunto</label>
                            <input type="email" class="form-control" name="email" id="email">
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input type="password" class="form-control" name="password" id="password">
                        </div>
                        <button type="submit" class="btn btn-success">Acceder a su SG-SST</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>