<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Inicio | ReparaFácil</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="/public/css/inicio.css">
</head>
<body class="d-flex flex-column min-vh-100">
  <?php include(RUTA_APP . '/vistas/inc/header.php'); ?>

  <div class="container p-5 flex-grow-1">
    <div class="row g-4 justify-content-center">

      <?php if (tienePrivilegios($datos['usuario']->rol_id, [ROL_ADMINISTRADOR, ROL_ENCARGADO])): ?>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <a href="usuarios" class="text-decoration-none">
            <div class="card text-center h-100 bg-primary shadow-lg">
              <div class="card-body">
                <i class="bi bi-person fs-1 text-white"></i>
                <h5 class="card-title text-white">Usuarios</h5>
              </div>
            </div>
          </a>
        </div>
      <?php endif; ?>

      <?php if (tienePrivilegios($datos['usuarioSesion']->rol_id, [ROL_ADMINISTRADOR, ROL_ENCARGADO])): ?>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <a href="clientes" class="text-decoration-none">
            <div class="card text-center h-100 bg-success shadow-lg" id="clientes">
              <div class="card-body">
                <i class="bi bi-person-check-fill fs-1 text-white"></i>
                <h5 class="card-title text-white">Clientes</h5>
              </div>
            </div>
          </a>
        </div>
        
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <a href="encargados" class="text-decoration-none">
            <div class="card text-center h-100 shadow-lg" id="encargados">
              <div class="card-body">
                <i class="bi bi-person-fill-gear fs-1 text-white"></i>
                <h5 class="card-title text-white">Encargados</h5>
              </div>
            </div>
          </a>
        </div>
      <?php endif; ?>

      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <a href="productos" class="text-decoration-none">
          <div class="card text-center h-100 shadow-lg" id="productos">
            <div class="card-body">
              <i class="bi bi-box-seam fs-1 text-white"></i>
              <h5 class="card-title text-white">Productos</h5>
            </div>
          </div>
        </a>
      </div>

      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <a href="reparaciones" class="text-decoration-none">
          <div class="card text-center h-100 shadow-lg" id="reparaciones">
            <div class="card-body">
              <i class="bi bi-wrench-adjustable fs-1 text-white"></i>
              <h5 class="card-title text-white">Reparaciones</h5>
            </div>
          </div>
        </a>
      </div>

      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <a href="materiales" class="text-decoration-none">
          <div class="card text-center h-100 shadow-lg" id="materiales">
            <div class="card-body">
              <i class="bi bi-boxes fs-1 text-white"></i>
              <h5 class="card-title text-white">Materiales</h5>
            </div>
          </div>
        </a>
      </div>

      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <a href="pagos" class="text-decoration-none">
          <div class="card text-center h-100 shadow-lg" id="pagos">
            <div class="card-body">
              <i class="bi bi-credit-card-2-front fs-1 text-white"></i>
              <h5 class="card-title text-white">Pagos</h5>
            </div>
          </div>
        </a>
      </div>

    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <?php include(RUTA_APP . '/vistas/inc/footer.php'); ?>
</body>
</html>
