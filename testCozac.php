<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Inicio | ReparaFácil - Miami Vibe</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="miami-style.css">
</head>
<body class="d-flex flex-column min-vh-100"> <!-- Removed bg-body-tertiary -->
  <?php include(RUTA_APP . '/vistas/inc/header.php'); ?>

  <button id="theme-toggle" type="button" title="Toggle theme" class="btn">
    <i class="bi bi-moon-fill"></i>
    <i class="bi bi-sun-fill"></i>
  </button>

  <div class="container py-5 flex-grow-1">
    <div class="text-center mb-5">
      <h1 class="display-4">Panel de Control</h1>
      <p class="lead text-muted">Seleccione una opción para continuar.</p>
    </div>
    <div class="row g-4 justify-content-center">

      <?php if (tienePrivilegios($datos['usuario']->rol_id, [ROL_ADMINISTRADOR, ROL_ENCARGADO])): ?>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 my-2">
          <a href="usuarios" class="text-decoration-none">
            <div class="card text-center h-100 shadow-sm"> <!-- Removed border, CSS handles it -->
              <div class="card-body">
                <i class="bi bi-person fs-1"></i> <!-- Removed text-primary -->
                <h5 class="card-title mt-2">Usuarios</h5> <!-- Removed text-primary -->
              </div>
            </div>
          </a>
        </div>
      <?php endif; ?>

      <?php if (tienePrivilegios($datos['usuarioSesion']->rol_id, [ROL_ADMINISTRADOR, ROL_ENCARGADO])): ?>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 my-2">
          <a href="clientes" class="text-decoration-none">
            <div class="card text-center h-100 shadow-sm" id="clientes"> <!-- Removed border -->
              <div class="card-body">
                <i class="bi bi-person-check-fill fs-1"></i> <!-- Removed text-success -->
                <h5 class="card-title mt-2">Clientes</h5> <!-- Removed text-success -->
              </div>
            </div>
          </a>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3 my-2">
          <a href="encargados" class="text-decoration-none">
            <div class="card text-center h-100 shadow-sm" id="encargados"> <!-- Removed border -->
              <div class="card-body">
                <i class="bi bi-person-fill-gear fs-1"></i> <!-- Removed text-info -->
                <h5 class="card-title mt-2">Encargados</h5> <!-- Removed text-info -->
              </div>
            </div>
          </a>
        </div>
      <?php endif; ?>

      <div class="col-12 col-sm-6 col-md-4 col-lg-3 my-2">
        <a href="productos" class="text-decoration-none">
          <div class="card text-center h-100 shadow-sm" id="productos"> <!-- Removed border -->
            <div class="card-body">
              <i class="bi bi-box-seam fs-1"></i> <!-- Removed text-warning -->
              <h5 class="card-title mt-2">Productos</h5> <!-- Removed text-warning -->
            </div>
          </div>
        </a>
      </div>

      <div class="col-12 col-sm-6 col-md-4 col-lg-3 my-2">
        <a href="reparaciones" class="text-decoration-none">
          <div class="card text-center h-100 shadow-sm" id="reparaciones"> <!-- Removed border -->
            <div class="card-body">
              <i class="bi bi-wrench-adjustable fs-1"></i> <!-- Removed text-danger -->
              <h5 class="card-title mt-2">Reparaciones</h5> <!-- Removed text-danger -->
            </div>
          </div>
        </a>
      </div>

      <div class="col-12 col-sm-6 col-md-4 col-lg-3 my-2">
        <a href="materiales" class="text-decoration-none">
          <div class="card text-center h-100 shadow-sm" id="materiales"> <!-- Removed border -->
            <div class="card-body">
              <i class="bi bi-boxes fs-1"></i> <!-- Removed text-secondary -->
              <h5 class="card-title mt-2">Materiales</h5> <!-- Removed text-secondary -->
            </div>
          </div>
        </a>
      </div>

      <div class="col-12 col-sm-6 col-md-4 col-lg-3 my-2">
        <a href="pagos" class="text-decoration-none">
          <div class="card text-center h-100 shadow-sm" id="pagos"> <!-- Removed border -->
            <div class="card-body">
              <i class="bi bi-credit-card-2-front fs-1"></i> <!-- Removed text-dark -->
              <h5 class="card-title mt-2">Pagos</h5> <!-- Removed text-dark -->
            </div>
          </div>
        </a>
      </div>

    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const themeToggle = document.getElementById('theme-toggle');
    const body = document.body;
    const currentTheme = localStorage.getItem('theme');

    // Apply saved theme on load
    if (currentTheme === 'dark-mode-active') {
      body.classList.add('dark-mode-active');
    }

    themeToggle.addEventListener('click', () => {
      body.classList.toggle('dark-mode-active');
      // Save current theme preference
      if (body.classList.contains('dark-mode-active')) {
        localStorage.setItem('theme', 'dark-mode-active');
      } else {
        localStorage.removeItem('theme');
      }
    });
  </script>
  <?php include(RUTA_APP . '/vistas/inc/footer.php'); ?>
</body>
</html>
