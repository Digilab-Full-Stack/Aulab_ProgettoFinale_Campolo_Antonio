<x-layout>

    <div class="container-fluid p5 bg-secondary-subtle text-center">
        <div class="row justify-content-center">
            <div class="col-12">
                
                <h1 class="display-5">Collabora</h1>
           
                {{-- <h2> {{$article->category}} </h2> --}}
            </div>
    
        </div>
    </div>

    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-6">
                <form action="{{route('careers.submit')}} " method="POST" class="card p-5 shadow">
                    @csrf
                       <div class="mb-3">
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
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{Auth::user()->email}}" readonly>
                            @error('email')
                            <span class="text-danger">{{$message}} </span>
                            @enderror
                        </div> 
                        <div class="mb-3">
                            <label for="message" class="form-label">Breve presentazione</label>
                            <textarea class="form-control" id="message" name="message" cols="30" rows="7">{{old('message')}}</textarea>
                            @error('message')
                            <span class="text-danger">{{$message}} </span>
                            @enderror
                        </div> 
                        <div class="mt-3 d-flex justify-content-center">
                            <button type="submit" class="btn btn-outline-secondary">Invia</button>

                        </div>



                </form>
            </div>
            <div class="col-12 col-md-6 p-5">
                
                <img src="/storage/images/teamwork.jpg" alt="" class="teamworkImage justify-content-center">
            
                <h2>Collabora come amministratore</h2>
                <p>Avrai i superpoteri!</p>
                <h2>Collabora come revisore</h2>
                <p>Revisiona gli articoli redatti e ne decide la pubblicazione</p>
                <h2>Collabora come redattore</h2>
                <p>Unisciti alla nostra redazione, potrai pubblicare anche tu i tuoi articoli</p>


            </div>

        </div>
    </div>








</x-layout>