<x-layout>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{-- 
<div class="container">
  <div class="row justify-content-center py-5 text-center">
      <div class="col-12">
        
      </div>
  </div>
</div> --}}

<div class="container-fluid vh-100">
    <div class="row justify-content-center">
        <div class="col-8 col-md-5 text-center">     
          <h3 class="mt-5">Inserisci i tuoi dati per registrarti</h3>
            <form action="{{route('register')}}" method="POST">
                @csrf
                <div class="mt-5 mb-3 text-danger fw-bold fs-5">
                    <label for="inputName" class="form-label">Nome</label>
                    <input type="text" name="name" class="form-control" id="inputName" value="{{old('name')}}">
                  </div>
                <div class="mb-3 text-danger fw-bold fs-5">
                  <label for="inputEmail" class="form-label">E-mail address</label>
                  <input type="email" name="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" value="{{old('email')}}">
                  <div id="emailHelp" class="form-text">Non condividere con nessuno i tuoi dati</div>
                </div>
                <div class="mb-3 text-danger fw-bold fs-5">
                  <label for="inputPassword" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="inputPassword">
                </div>
                <div class="mb-3 text-danger fw-bold fs-5">
                    <label for="password_confirmation" class="form-label">Conferma Password</label>
                    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
                  </div>
                <button type="submit" class="btn btn-primary ">Invia</button>
                <p class="mt-2 bg-secondary  text-center">Sei già registrato?   <a href="{{route('login')}}" class="text-white mx-2">Clicca Qui</a></p>


              </form>




        </div>
    </div>
</div>



    
</x-layout>