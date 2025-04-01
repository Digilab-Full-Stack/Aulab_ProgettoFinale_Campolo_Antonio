

<div class="container-fluid">
  <div class="row ">
    <div class="col-10">
                <div class="navbar-brand d-flex justify-content-center">
                  <img src="/storage/images/logotap.png" href="{{route('homepage')}}" alt="il logo di The Aulab Post">
                </div>
      </div>            
    <div class="col-2 d-flex align-items-center ">
          <form class="d-flex justify-content-center" role="search" action="{{route('article.search')}}" method="GET">
            <input class="form-control me-auto" type="search" name="query" placeholder="Cerca" aria-label="Search">
            <button class="btn btn-outline-success " type="submit" title="Cerca fra gli articoli pubblicati...">Cerca</button>
          </form>
        
    </div>
  </div>
</div>
    
  <nav class="navbar navbar-expand-lg bg-body-tertiary w-100">
  
  <div class="container-fluid">
     
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{route('homepage')}}">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{route('article.index')}}">Tutti gli articoli</a>
            </li>
       
 
                
                


            @auth
                <li class="nav-item">
                  <a class="nav-link" href="{{route('article.create')}}" aria-disabled="true">Inserisci un articolo</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="{{route('careers')}}">Collabora</a>
                </li>
                @if(Auth::user()->is_admin)
                <li class="nav-item"><a class="nav-link" href="{{route('admin.dashboard')}} ">DashBoard Amministratore</a></li>
                @endif
                @if(Auth::user()->is_revisor)
                <li class="nav-item"><a class="nav-link" href="{{route('revisor.dashboard')}} ">DashBoard Revisore</a></li>
                @endif
                @if(Auth::user()->is_writer)
                <li class="nav-item"><a class="nav-link" href="{{route('writer.dashboard')}} ">DashBoard Redattore</a></li>
                @endif
                <li class="nav-item disconnect">
                  {{-- <button class="btn btn-outline-danger "> --}}
                 <a class="nav-link text-danger fw-bold" href="" onclick="event.preventDefault(); document.querySelector('#form-logout').submit()">Disconnetti</a>
                {{-- </button> --}}
                   <form id="form-logout" action="{{route('logout')}}" method="POST" class="d-none">@csrf</form>
                </li>   
              @else
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Login
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{route('login')}}">Accedi</a></li>
                  <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
                </ul>
              </li>
              
           @endauth
        </div>

    </div>
    
  </nav>