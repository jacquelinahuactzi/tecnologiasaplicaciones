<?= $this->extend('/plantillas/plantilla_adminlte') ?>
<?= $this->section('contenido') ?>

<div class="hold-transition login-page">
  <div class="login-box">
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
          <?= $this->include("login/password_svg"); ?>
      </div>
      <div class="card-body">
        <p class="login-box-msg">¿Olvidaste tu contraseña? Aquí puedes recuperarla.</p>
        <form action="recover-password.html" method="post">
          <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="Email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <button type="submit" class="btn btn-primary btn-block">Ingresa tu nueva contraseña</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
        <p class="mt-3 mb-1">
          <a href="login.html">Ingresar</a>
        </p>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
</div>
<?= $this->endSection() ?>
