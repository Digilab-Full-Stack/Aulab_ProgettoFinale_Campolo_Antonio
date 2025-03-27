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


<div class="container">
  <div class="row justify-content-center py-5 text-center">
      <div class="col-12">
          <h3>Inserisci i tuoi dati per registrarti</h3>
      </div>
  </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 w-25 text-center">

            <form action="{{route('register')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="inputName" class="form-label">Nome</label>
                    <input type="text" name="name" class="form-control" id="inputName" value="{{old('name')}}">
                  </div>
                <div class="mb-3">
                  <label for="inputEmail" class="form-label">Email address</label>
                  <input type="email" name="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" value="{{old('email')}}">
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                  <label for="inputPassword" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="inputPassword">
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Conferma Password</label>
                    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
                  </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <p class="mt-2">Sei già reigistrato? <a href="{{route('login')}}" class="text-secondary">Clicca Qui</a></p>


              </form>




        </div>
    </div>
</div>



    
</x-layout>