<x-layout>

    <div class="container-fluid p5 bg-secondary-subtle text-center">
        <div class="row justify-content-center">
            <div class="col-12">
                
                <h1 class="display-1 fontCorsive ">Collabora</h1>
          
            </div>
    
        </div>
    </div>

    <div class="container-fluid  my-5">
        <div class="row justify-content-center ">
            <div class="col-12 col-md-6">
                <form action="{{route('careers.submit')}} " method="POST" class="card p-5  bg-secondary bg-opacity-50 border border-warning  border-5 border-opacity-25 rounded-5">
                    @csrf
                       <div class="mb-3 fw-bold text-white">
                            <label for="role" class="form-label">Per quale ruolo ti candidi?</label>
                            <select name="role" id="role" class="form-control">
                                <option value="" selected disabled>Seleziona il ruolo</option>
                                @if (!Auth::user()->is_admin)
                                <option value="admin">Amministratore</option>
                                @endif
                                @if (!Auth::user()->is_revisor)
                                <option value="revisor">Revisore</option>
                                @endif
                                @if (!Auth::user()->is_writer)
                                <option value="writer">Redattore</option>
                                @endif
                            </select>
                            @error('role')
                            <span class="text-danger">{{$message}} </span>    
                            @enderror
                        </div>
                        <div class="mb-3 text-white fw-bold">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{Auth::user()->email}}" readonly>
                            @error('email')
                            <span class="text-danger">{{$message}} </span>
                            @enderror
                        </div> 
                        <div class="mb-3 fw-bold text-white">
                            <label for="message" class="form-label">Breve presentazione</label>
                            <textarea class="form-control" id="message" name="message" cols="30" rows="7">{{old('message')}}</textarea>
                            @error('message')
                            <span class="text-danger">{{$message}} </span>
                            @enderror
                        </div> 
                        <div class="mt-3 d-flex justify-content-center">
                            <button type="submit" class="btn btn-warning btn-outline-danger">Invia</button>

                        </div>



                </form>
            </div>
            <div class="col-12 col-md-5 d-flex align-items-center mt-3 justify-content-center">
                
               
            <div class=" border bg-secondary border-warning border-5 border-opacity-25 rounded-5 text-center px-3">
                <img src="/storage/images/teamwork.png" alt="" class="teamworkImage pb-3 text-center ">
                <h3 class="mt-2">Collabora come amministratore</h3>
                <p>Avrai i superpoteri!</p>
                <h3>Collabora come revisore</h3>
                <p>Revisiona gli articoli redatti e ne decide la pubblicazione</p>
                <h3>Collabora come redattore</h3>
                <p>Unisciti alla nostra redazione, <br>potrai pubblicare anche tu i tuoi articoli</p>
            </div>

            </div>

        </div>
    </div>








</x-layout>