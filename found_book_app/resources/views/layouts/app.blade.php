<html>
    <head>
        <title>Found Book - @yield('title')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css " rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body>

        <div class="container">
            <!--Implementando un navbar-->
          <nav class="navbar navbar-expand-lg bg-primary-subtle">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Found Book</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/catalogos">Inicio</a>
                  </li>
                 <li class="nav-item">
                    <a class="nav-link" href="/catalogos/create">Catalogo de Libros</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/prestamos/create">Formulario Prestamo</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Contactame</a>
                  </li>
               </ul>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
              </div>
            </div>
          </nav>
            @yield('content')
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="archivo.js"></script>
    </body>
</html>
