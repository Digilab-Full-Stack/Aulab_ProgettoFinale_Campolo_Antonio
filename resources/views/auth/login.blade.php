
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
   
    
    <div class="container-fluid vh-100">
        <div class="row justify-content-center mt-5 text-center">
            <div class="col-12 ">
                <h3>Inserisci i tuoi dati per accedere</h3>
            </div>
        {{-- </div> --}}
    {{-- </div> --}}
{{-- <div class="container">
    <div class="row justify-content-center"> --}}
        <div class="col-9 col-md-4 text-center">

            <form action="{{route('login')}}" method="POST">
                @csrf
              
                <div class="mb-3 mt-3 text-danger fw-bold fs-5">
                  <label for="inputEmail" class="form-label">Indirizzo e-mail</label>
                  <input type="email" name="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" value="{{old('inputEmail')}}">
                  <div id="emailHelp" class="form-text">Inserisci l'e-mail inserita in fase di registrazione</div>
                </div>
                <div class="mb-3 text-danger fw-bold fs-5">
                  <label for="inputPassword" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="inputPassword" value="{{old('inputPassword')}}">
                </div>
             
                <button type="submit" class="btn btn-primary">Invia</button>
              </form>




        </div>
    </div>
</div>

</x-layout>