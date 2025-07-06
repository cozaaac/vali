<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Usuarios</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    :root {
      --primary-color: #007bff;
      --secondary-color: #6c757d;
      --light-gray: #f8f9fa;
      --dark-gray: #343a40;
      --background-color: #f0f2f5; /* Softer background */
      --text-color: #212529; /* Darker text for better readability */
      --card-bg: #ffffff;
      --card-border-color: #e9ecef; /* Lighter border for cards */
      --card-shadow: 0 4px 15px rgba(0, 0, 0, 0.07); /* Softer, more diffused shadow */
      --font-family-sans-serif: 'Poppins', sans-serif;
      --border-radius: 0.375rem; /* Bootstrap's default, can be customized */
    }

    body {
      font-family: var(--font-family-sans-serif);
      background-color: var(--background-color);
      color: var(--text-color);
      line-height: 1.6;
    }

    .placeholder-header {
      background-color: var(--card-bg);
      padding: 1rem 0;
      border-bottom: 1px solid var(--card-border-color);
      margin-bottom: 2.5rem;
      box-shadow: 0 2px 8px rgba(0,0,0,0.06); /* Subtle shadow for header */
    }

    .placeholder-header .container {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .placeholder-header .logo {
      font-size: 1.75rem;
      font-weight: 600;
      color: var(--primary-color);
    }

    .placeholder-header nav a {
      margin-left: 20px;
      text-decoration: none;
      color: var(--secondary-color);
      font-weight: 500;
      transition: color 0.2s ease-in-out;
    }
    .placeholder-header nav a:hover,
    .placeholder-header nav a.active {
      color: var(--primary-color);
    }

    .main-content-area {
      /* Ensures footer doesn't overlap if content is short */
      min-height: calc(100vh - 200px); /* Adjust based on actual header/footer height */
    }

    .page-title {
      color: var(--dark-gray);
      font-weight: 600;
      font-size: 2rem; /* Slightly reduced for balance */
      margin-bottom: 1.5rem; /* Added margin below title */
    }

    /* Styling for Bootstrap buttons to match theme */
    .btn-primary {
        background-color: var(--primary-color);
        border-color: var(--primary-color);
        font-weight: 500;
        padding: 0.5rem 1rem; /* Adjust padding */
        transition: background-color 0.2s ease, border-color 0.2s ease;
    }
    .btn-primary:hover {
        background-color: #0056b3; /* Darken primary color on hover */
        border-color: #0056b3;
    }

    .btn-success { /* In case you use it elsewhere, or for the original button */
        background-color: #198754; /* Bootstrap green */
        border-color: #198754;
        font-weight: 500;
        padding: 0.5rem 1rem;
        transition: background-color 0.2s ease, border-color 0.2s ease;
    }
    .btn-success:hover {
        background-color: #157347;
        border-color: #157347;
    }

    .btn-outline-success {
        color: var(--primary-color);
        border-color: var(--primary-color);
    }
    .btn-outline-success:hover {
        background-color: var(--primary-color);
        color: white;
    }
    .btn-outline-danger {
        color: #dc3545;
        border-color: #dc3545;
    }
    .btn-outline-danger:hover {
        background-color: #dc3545;
        color: white;
    }

    /* Card custom styling */
    .card {
      border: 1px solid var(--card-border-color);
      border-radius: var(--border-radius);
      box-shadow: var(--card-shadow);
      transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
    }
    .card:hover {
        transform: translateY(-5px); /* Subtle lift effect */
        box-shadow: 0 8px 20px rgba(0,0,0,0.1); /* Enhanced shadow on hover */
    }

    .card-title {
      font-size: 1.25rem;
      font-weight: 600;
      color: var(--primary-color);
      margin-bottom: 1rem; /* More space below card title */
    }
    .card p {
        color: #555; /* Slightly lighter paragraph text in cards */
        font-size: 0.95rem;
    }
    .card p strong {
        color: var(--text-color); /* Keep strong text darker */
    }

    /* Modal Styling */
    .modal-content {
        border-radius: var(--border-radius);
        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        border: none;
    }
    .modal-header {
        background-color: var(--primary-color);
        color: var(--card-bg); /* White text on primary color bg */
        border-bottom: none;
        border-top-left-radius: var(--border-radius);
        border-top-right-radius: var(--border-radius);
    }
    .modal-header .btn-close {
        filter: invert(1) grayscale(100%) brightness(200%); /* Makes close button white */
    }
    .modal-title {
        font-weight: 500;
    }
    .modal-footer {
        border-top: 1px solid var(--card-border-color);
    }

    .placeholder-footer {
      background-color: var(--dark-gray);
      color: var(--light-gray);
      padding: 2.5rem 0; /* Increased padding */
      text-align: center;
      margin-top: 4rem; /* More space above footer */
      font-size: 0.9rem;
      border-top: 1px solid #495057; /* Subtle top border */
    }
    .placeholder-footer p {
        margin-bottom: 0;
    }
  </style>
</head>

<body> <!-- Removed bg-light, controlled by CSS variables now -->

  <header class="placeholder-header">
    <div class="container">
      <div class="logo">AppPagos</div>
      <nav>
        <a href="#" class="active">Inicio</a>
        <a href="#">Reportes</a>
        <a href="#">Configuración</a>
      </nav>
    </div>
  </header>

  <main class="container py-4 main-content-area"> <!-- Added 'main' tag and adjusted padding -->
    <div class="row mb-4">
      <div class="col-12 d-flex justify-content-between align-items-center">
        <h1 class="mb-0 page-title">Pagos</h1> <!-- Changed h2 to h1 for semantic main page title -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#nuevoUsuarioModal">
          <i class="bi bi-plus-circle me-1"></i> Nuevo Usuario
        </button>
      </div>
    </div>

    <div class="row">
      <!-- Tarjeta de usuario -->
      <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">admin@correo.com</h5>
            <p class="mb-1"><strong>Nombre:</strong> Administrador</p>
            <p class="mb-3"><strong>Rol:</strong> Administrador</p>
            <div class="d-flex justify-content-end gap-1">
              <a href="#" class="btn btn-sm btn-outline-success"><i class="bi bi-pencil-square"></i> Editar</a>
              <a href="#" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i> Eliminar</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Duplicated cards for example - in real app this would be dynamic -->
      <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">usuario1@correo.com</h5>
            <p class="mb-1"><strong>Nombre:</strong> Usuario Uno</p>
            <p class="mb-3"><strong>Rol:</strong> Usuario</p>
            <div class="d-flex justify-content-end gap-1">
              <a href="#" class="btn btn-sm btn-outline-success"><i class="bi bi-pencil-square"></i> Editar</a>
              <a href="#" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i> Eliminar</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">cliente.nuevo@correo.com</h5>
            <p class="mb-1"><strong>Nombre:</strong> Cliente Nuevo</p>
            <p class="mb-3"><strong>Rol:</strong> Cliente</p>
            <div class="d-flex justify-content-end gap-1">
              <a href="#" class="btn btn-sm btn-outline-success"><i class="bi bi-pencil-square"></i> Editar</a>
              <a href="#" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i> Eliminar</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">encargado.area@correo.com</h5>
            <p class="mb-1"><strong>Nombre:</strong> Encargado Área 51</p>
            <p class="mb-3"><strong>Rol:</strong> Encargado</p>
            <div class="d-flex justify-content-end gap-1">
              <a href="#" class="btn btn-sm btn-outline-success"><i class="bi bi-pencil-square"></i> Editar</a>
              <a href="#" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i> Eliminar</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">otro.admin@correo.com</h5>
            <p class="mb-1"><strong>Nombre:</strong> Admin Secundario</p>
            <p class="mb-3"><strong>Rol:</strong> Administrador</p>
            <div class="d-flex justify-content-end gap-1">
              <a href="#" class="btn btn-sm btn-outline-success"><i class="bi bi-pencil-square"></i> Editar</a>
              <a href="#" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i> Eliminar</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">soporte.ti@correo.com</h5>
            <p class="mb-1"><strong>Nombre:</strong> Soporte Técnico</p>
            <p class="mb-3"><strong>Rol:</strong> Usuario</p>
            <div class="d-flex justify-content-end gap-1">
              <a href="#" class="btn btn-sm btn-outline-success"><i class="bi bi-pencil-square"></i> Editar</a>
              <a href="#" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i> Eliminar</a>
            </div>
          </div>
        </div>
      </div>
      <!-- End duplicated cards -->

    </div> <!-- End .row for cards -->
  </main> <!-- End main content area -->

  <!-- Modal para nuevo usuario -->
  <div class="modal fade" id="nuevoUsuarioModal">
    <div class="modal-dialog modal-dialog-centered"> <!-- Added modal-dialog-centered -->
      <div class="modal-content">
        <form>
          <div class="modal-header">
            <h5 class="modal-title">Nuevo usuario</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
              <label for="emailUsuario" class="form-label">Correo electrónico</label>
              <input type="email" class="form-control" id="emailUsuario" placeholder="usuario@correo.com" required>
            </div>
            <div class="mb-3">
              <label for="nombreUsuario" class="form-label">Nombre</label>
              <input type="text" class="form-control" id="nombreUsuario" placeholder="Nombre completo" required>
            </div>
            <div class="mb-3">
              <label for="contrasenaUsuario" class="form-label">Contraseña</label>
              <input type="password" class="form-control" id="contrasenaUsuario" placeholder="Contraseña" required>
            </div>
            <div class="mb-3">
              <label for="rolUsuario" class="form-label">Rol</label>
              <select class="form-select" id="rolUsuario" required>
                <option value="" disabled selected>Seleccione un rol</option> <!-- Improved placeholder -->
                <option value="Administrador">Administrador</option>
                <option value="Usuario">Usuario</option>
                <option value="Cliente">Cliente</option>
                <option value="Encargado">Encargado</option>
              </select>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button> <!-- Changed to btn-secondary -->
            <button type="submit" class="btn btn-primary">Guardar Usuario</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <footer class="placeholder-footer">
    <div class="container">
      <p>&copy; <?php echo date("Y"); ?> MyWebApp. Todos los derechos reservados.</p>
      <p>Diseñado con <i class="bi bi-heart-fill text-danger"></i> y Bootstrap.</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
