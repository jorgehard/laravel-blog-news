<div id="newsletter">
  <div class="container d-flex justify-content-center align-items-center">
    <div class="row justify-content-around">
      <div class="col-sm-4 pt-4 newsletter-box">
        <h2>Fique por dentro</h2>
        <p>Receba nossos melhores conteúdos.</p>
        <form id="navSearchForm" autocomplete="off">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Nome Completo" id="nameNewsletter">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" placeholder="Email" id="emailNewsletter">
          </div>
          <button class="btn btn-xs" type="submit">Submit</button>
        </form>
      </div>
      <div class="col-sm-4 pt-4 newsletter-img">
        <img class="img-fluid" src="{{ asset('assets/images/footer-humans.svg')}}" alt="logo fenix"/>
      </div>
    </div>
  </div>
</div>
<footer>
  <div class="container">
    <div class="row">
      <div class="col-sm d-flex footer-logo bottom-bg justify-content-center align-items-start">
        <img class="img-fluid" width="170px" src="{{ asset('assets/images/fenix-hookah.svg')}}" alt="logo fenix"/>
      </div>
    </div>
    <div class="row">
      <div class="col-sm d-flex footer-logo justify-content-center align-items-start svg-images">
        <img class="img-fluid mr-4" width="25px" src="{{ asset('assets/icons/facebook.svg')}}" alt="logo fenix"/>
        <img class="img-fluid mr-4" width="25px" src="{{ asset('assets/icons/instagram.svg')}}" alt="logo fenix"/>
        <img class="img-fluid" width="25px" src="{{ asset('assets/icons/youtube.svg')}}" alt="logo fenix"/>
      </div>
    </div>
    <div class="row">
      <p class="w-100 text-center footer-text">Copyright © 2020 Fênix Hookah. Todos direitos reservados.</p>
    </div>
  </div>
</footer>