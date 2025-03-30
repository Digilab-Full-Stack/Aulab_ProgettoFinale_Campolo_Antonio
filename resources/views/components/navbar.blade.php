
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        {{-- <a class="navbar-brand px-5" href="{{route('homepage')}}">TAP</a> --}}
        <div>
        <img src="/storage/images/logotap.png" href="{{route('homepage')}}" alt="il logo di The Aulab Post">
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 px-5">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{route('article.index')}}">Tutti gli articoli</a>
            </li>
       
 
                
                


            @auth
                <li class="nav-item">
                  <a class="nav-link active" href="{{route('article.create')}}" aria-disabled="true">Inserisci un articolo</a>
                </li>
                {{-- <li class="nav-item">
                  <a class="nav-link active" href="{{route('article.byUser', ['user' => auth()->user()])}}">I miei articoli</a>
                </li> --}}
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="{{route('careers')}}">Collabora</a>
                </li>
                @if(Auth::user()->is_admin)
                <li><a class="nav-link" href="{{route('admin.dashboard')}} ">DashBoard Amministratore</a></li>
                @endif
                @if(Auth::user()->is_revisor)
                <li><a class="nav-link" href="{{route('revisor.dashboard')}} ">DashBoard Revisore</a></li>
                @endif
                @if(Auth::user()->is_writer)
                <li><a class="nav-link" href="{{route('writer.dashboard')}} ">DashBoard Redattore</a></li>
                @endif
                <li class="nav-item">
                 <a class="nav-link px-5" href="" onclick="event.preventDefault(); document.querySelector('#form-logout').submit()">Disconnetti account</a>
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

          <form class="px-5 mx-5 d-flex justify-content-end" role="search" action="{{route('article.search')}}" method="GET">
            <input class="form-control me-2" type="search" name="query" placeholder="Cerca" aria-label="Search">
            <button class="btn btn-outline-success" type="submit" title="Cerca fra gli articoli pubblicati...">Cerca</button>
          </form>
    </div>
    
  </nav>