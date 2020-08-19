<nav id="navbarHome" class="navbar navbar-expand-lg navbar-dark">
  <a class="navbar-brand" href="/"><img class="img-fluid" width="100px" src="{{ asset('assets/images/fenix-hookah.svg')}}" alt="logo fenix"/></a>

  <button class="custom-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-4">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/produtos">Sobre</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Novidades</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contato</a>
      </li>
    </ul>
    <div class="d-flex justify-content-end" style=" width: 100%;">
      <form id="navSearchForm" class="form-inline">
        <input class="form-control mr-2" type="search" placeholder="Pesquisar noticias" aria-label="Search">
        <button class="btn btn-xs" type="submit"><i class="material-icons">search</i></button>
      </form>
      </a>
    </div>
  </div>
</nav>