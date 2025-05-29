<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  </head>
  <body>
    <div class="container text-center">
    <div class="row">
      <div class="col">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </li>
              </ul>
              <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </div>
          </div>
        </nav>
      </div>
    </div>
    <div class="mt-3 row">
      <div class="col-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Active</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
          </li>
        </ul>
      </div>
    <div class="col-9">
        <p class="fs-1">Listado de proyectos</p>
            <form action="{{ route('project.store') }}" method="POST">
                @csrf
                @method('POST')
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Tema</span>
                    <input type="text" class="form-control" id="tema" name="tema" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="input-group">
                    <span class="input-group-text">Descripcion</span>
                    <textarea class="form-control" id="descripcion" name="descripcion" aria-label="With textarea"></textarea>
                </div>
                <div class="input-group mb-3 mt-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Area</span>
                    <select class="form-select" id="area" name="area" aria-label="Default select example">
                        <option selected>Selecciona un area</option>
                        <option value="1">TI</option>
                        <option value="2">Cont.</option>
                        <option value="3">Adminis.</option>
                        <option value="4">Operat.</option>
                    </select>
                </div>
                <div class="input-group mb-3 mt-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Estado</span>
                    <select class="form-select" id="estado" name="estado" aria-label="Default select example">
                        <option selected>Selecciona un estado</option>
                        <option value="1">Solicitado</option>
                        <option value="2">Aprobado</option>
                        <option value="3">Rechazado</option>
                    </select>
                </div>
                <div class="input-group mb-3 mt-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Observacion</span>
                    <textarea class="form-control" id="observacion" name="observacion" aria-label="With textarea"></textarea>
                </div>
                <div class="input-group mb-3 mt-3">
  <input type="hidden" name="usuarioExterno" value="0">
  <div class="input-group-text">
    <input type="checkbox" class="form-check-input mt-0" id="usuarioExterno" name="usuarioExterno" value="1" aria-label="Checkbox para usuario externo">
  </div>
  <span class="form-control">Usuario Externo</span>
</div>

                <button type="submit" class="mt-3 btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
    <div class="mt-3 row">
      <div class="col">
        <nav aria-label="...">
          <ul class="pagination justify-content-center">
            <li class="page-item disabled">
              <a class="page-link">Previous</a>
            </li>
            <li class="page-item active">
              <a class="page-link" href="#" aria-current="page">1</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#">Next</a>
            </li>
          </ul>
        </nav>
        <p class="font-monospace">© Fabian 2025. Todos los derechos reservados</p>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  </body>
</html>