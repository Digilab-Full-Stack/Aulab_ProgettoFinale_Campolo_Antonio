<x-layout>
 
    <div class="container-fluid min-vh-100">
      <div class="row justify-content-center">
      @foreach ($users as $user)
       
            <div class="col-12 col-md-5 d-flex justify-content-center px-5 py-5">
            
             
            @if ($user->is_admin == 1)
            
            <div class="flip-card border border-warning  border-5 border-opacity-25 rounded-5">
               
                <div class="flip-card-inner">
                    <div class="flip-card-front rounded-5">
                  
                        <h3 class="mt-2">{{$user->name}} </h3>
                        <img src="/storage/images/logotap_adm.png" class="img-fluid">
                    </div>
                    <div class="flip-card-back rounded-5">
                      <h2>Amministratore</h2>
                      <p><a href="mailto:{{$user->email}}" class="text-white fw-bold m-0">{{$user->email}}</a></p>
                      <p>"Amo camminare fra la natura. Amo anche il teatro, la poesia e il cinema ed è per questo che mi occupo di <br>'The Aulab Post' " </p>
                    </div>
                </div>
            </div>
            @endif
            @if ($user->is_revisor == 1)
            <div class="flip-card border border-warning  border-5 border-opacity-25 rounded-5">
               
                <div class="flip-card-inner">
                    <div class="flip-card-front rounded-5">
                  
                     <h3 class="mt-2">{{$user->name}} </h3>
                      <img src="/storage/images/logotap_rev.png" class="img-fluid">
                    </div>
                   <div class="flip-card-back rounded-5">
                  <h1 class="my-3 text-dark">Scrivimi Ora</h1>
                  <p><a href=" mailto:{{$user->email}}" class="text-white fw-bold">{{$user->email}}</a></p>
                   </div>
              </div>
          </div>
            @endif            
            @if ($user->is_writer == 1)
            <div class="flip-card border border-warning  border-5 border-opacity-25 rounded-5">
               
              <div class="flip-card-inner">
                <div class="flip-card-front rounded-5">
                  
                  <h3 class="mt-2">{{$user->name}} </h3>
                  <img src="/storage/images/logotap_red.png" class="img-fluid">
                </div>
                <div class="flip-card-back rounded-5">
            <h1 class="my-3 text-dark">Scrivimi Ora</h1>
            <p><a href=" mailto:{{$user->email}}" class="text-white fw-bold">{{$user->email}}</a></p>
          </div>
        </div>
    </div>
            @endif         
                        {{-- <p>Architect & Engineer</p>
                        <p>We love that guy</p>
                     --}}
                    
{{--                     
                        </div>
              
                    </div>
                
                  </div> --}}
               
            </div>
        
            @endforeach
          </div>
    </div>
 
  

    
</x-layout>