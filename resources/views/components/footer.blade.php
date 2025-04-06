<footer class="mt-3 bg-secondary-subtle position-end">
    <div class="modal fade" id="termini" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel">Termini del servizio </h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
             
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="faqs" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel">FAQS</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
             
            </div>
          </div>
        </div>
      </div>

    <div class="container-fluid border-top m-0">
        <div class="row justify-content-center align-items-center">
            <div class="col-12  col-md-3 col-lg-2 text-center">
                <h3>The Aulab Post®</h3>
                {{-- <p></p>
                <p> <a href=""><i class="fa-brands fa-facebook text-secondary text-secondary fs-3 px-3"></i></a>
                    <a href=""><i class="fa-brands fa-instagram text-secondary text-secondary fs-3 px-3"></i></a>
                    <a href=""><i class="fa-brands fa-tiktok text-secondary text-secondary fs-3 px-3"></i></a>
                    <a href=""><i class="fa-brands fa-youtube text-secondary text-secondary fs-3 px-3"></i></a>
                </p> --}}
            </div>
            
            <div class="col-12 col-md-2 col-lg-2 py-2 text-center">
                <h3>Help & Info</h3>
                <ul class="menu-list list-unstyled">
                    <li class="menu-item"><a class="a-custom text-dark fw-bold" href="{{route('aboutus')}}" >Su di noi</a></li>
                    <li class="menu-item"><a class="a-custom text-dark fw-bold" href="{{route('editorial_team')}}">La redazione</a></li>
                    {{-- <li class="menu-item"><a class="a-custom text-dark fw-bold" href="">Merchandising</a></li> --}}
                    <li class="menu-item"><a class="a-custom text-dark fw-bold" href="" data-bs-toggle="modal" data-bs-target="#termini">Termini del servizio</a></li>
                    <li class="menu-item"><a class="a-custom text-dark fw-bold" href="{{route('faqs')}}">FAQS</a></li>
                </ul>
            </div>
            <div class="col-12 col-md-4 col-lg-4 py-2 text-center">
                <h3>Contattaci</h3>
                <p>Hai qualche suggerimento per migliorare il nostro lavoro? Contattaci alla mail
                    <strong>info@theaulabpost.it</strong>
                </p>
                <p>Se hai bisogno di supporto, chiamaci al numero <strong>+39 XXX.XXXXXXX</strong></p>
            </div>
            <div class="col-12  col-md-1 col-lg-1 py-2 text-center">
                {{-- <h3>Social</h3> --}}
                <ul class="menu-list list-unstyled d-inline">
                    <div>
                    <li class="menu-item"><a href="#"><i class="fa-brands fa-facebook text-secondary text-secondary fs-3 py-1"></i></a></li>
                    <li class="menu-item"><a href="#"><i class="fa-brands fa-instagram text-secondary text-secondary fs-3 py-1"></i></a></li>
                     </div>
                    <li class="menu-item"><a href="#"><i class="fa-brands fa-tiktok text-secondary text-secondary fs-3 py-1"></i></a></li>
                    <li class="menu-item"><a href="#"><i class="fa-brands fa-youtube text-secondary text-secondary fs-3 py-1"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid border-top">
        <div class="row justify-content-center align-items-center">
            {{-- <div class="col-6">
                The Aulab Post® 2025
            </div> --}}
            <div class="col-12">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-end">
                            © Copyright 2025 The Aulab Post®
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>