
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<x-layout>
   
    
    <div class="container">
        <div class="row justify-content-center py-5 text-center">
            <div class="col-12">
                <h3>Inserisci i tuoi dati per accedere</h3>
            </div>
        </div>
    </div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 w-25 text-center">

            <form action="{{route('login')}}" method="POST">
                @csrf
              
                <div class="mb-3">
                  <label for="inputEmail" class="form-label">Indirizzo email</label>
                  <input type="email" name="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" value="{{old('inputEmail')}}">
                  <div id="emailHelp" class="form-text">Inserisci l'e-mail inserita in fase di registrazione</div>
                </div>
                <div class="mb-3">
                  <label for="inputPassword" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="inputPassword" value="{{old('inputPassword')}}">
                </div>
             
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>




        </div>
    </div>
</div>

</x-layout>