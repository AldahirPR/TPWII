<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #33FF7D;">
  <a class="navbar-brand" href="#">Hotel Quanax</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Clientes
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Iniciar sesión</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Regístrate</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Habitaciones
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Individual</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Matrimonial</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Suite</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Acciones
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="../Home/mostrarRegistrosC">Ver registros</a></li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>  
      </li>
    </ul>

    <form method="POST" action="../Home/buscarRegistroC" class="d-flex">
      <label>ID</label>
      <input class="form-control mr-sm-2" type="search" placeholder="Buscar..." aria-label="Search" id="id_cliente" name="id_cliente">
      <button class="btn btn-outline-success" type="submit">Buscar</button>
    </form>
  </div>
</nav>