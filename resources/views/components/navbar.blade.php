<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand px-5" href="{{route('homepage')}}">TAP</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          @auth
          <li class="nav-item dropdown d-none">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Login
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('login')}}">Accedi</a></li>
              <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
            </ul>
              <li class="nav-item">
                <a class="nav-link" href="{{route('article.create')}}" aria-disabled="true">Inserisci un articolo</a>
              </li>
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
                  
              <li class="nav-item">
              <a class="nav-link disabled" aria-disabled="true">Area Riservata</a>
              </li>
                
              
           @endauth
         
          <form class="d-flex px-5 mx-5 display-content-center " role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
           

         
        </form>
      </div>
    </div>
  </div>
  </nav>