<?= $this->extend('/plantillas/plantilla_adminlte') ?>
<?= $this->section('contenido') ?>
<div class="hold-transition login-page">
  <div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <?= $this->include("login/password_svg"); ?>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Iniciar sesión</p>
        <?= form_open("validar"); ?>
          <?= csrf_field() ?>
          <div class="input-group mb-3">
            <?= form_input("email","",["class"=>"form-control","placeholder"=>"Correo electrónico","required"=>"required"]);?>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
          <?= form_password("contrasena","",["class"=>"form-control","placeholder"=>"Contraseña"]);?>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember">
                  Recuerdame
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <?= form_submit("","Ingresar",["class"=>"btn btn-primary btn-block"]); ?>
            </div>
            <!-- /.col -->
          </div>
        <?= form_close(); ?>


        <!-- /.social-auth-links -->

        <p class="mb-1">
          <a href="olvidecontra.php">Olvide mi contraseña</a>
        </p>
        <p class="mb-0">
          <a href="registrar.php" class="text-center">Registrarse</a>
        </p>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>
<?= $this->endSection() ?>
