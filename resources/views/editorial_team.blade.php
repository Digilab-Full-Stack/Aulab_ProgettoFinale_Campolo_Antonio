<x-layout>
 
    <div class="container-fluid vh-100 d-flex justify-content-center">
      @foreach ($users as $user)
        <div class="row justify-content-center">
       
            <div class="col-12 d-flex justify-content-center  px-5 py-5">
            
             
            @if ($user->is_admin == 1)
            
            <div class="flip-card">
               
              <div class="flip-card-inner">
                <div class="flip-card-front">
                  
                 <h3 class="my-3">{{$user->name}} </h3>
                  <img src="/storage/images/logotap_adm.png">
                </div>
                <div class="flip-card-back">
            <h1>Amministratore</h1>
            <p><a href=" mailto:{{$user->email}}" class="text-white fw-bold">{{$user->email}}</a></p>
            <p>"Amo camminare fra i boschi, la poesia, la natura. Amo anche il teatro e il cinema, ed è per questo che mi occupo di <br>'The Aulab Post' " </p>
            @endif
            @if ($user->is_revisor == 1)
            <div class="flip-card">
               
              <div class="flip-card-inner">
                <div class="flip-card-front">
                  
                  <h3 class="my-3">{{$user->name}} </h3>
                  <img src="/storage/images/logotap_rev.png">
                </div>
                <div class="flip-card-back">
                  <h1 class="my-3 text-dark">Scrivimi Ora</h1>
                  <p><a href=" mailto:{{$user->email}}" class="text-white fw-bold">{{$user->email}}</a></p>
            @endif            
            @if ($user->is_writer == 1)
            <div class="flip-card">
               
              <div class="flip-card-inner">
                <div class="flip-card-front">
                  
                  <h3 class="my-3">{{$user->name}} </h3>
                  <img src="/storage/images/logotap_red.png">
                </div>
                <div class="flip-card-back">
            <h1 class="my-3 text-dark">Scrivimi Ora</h1>
            <p><a href=" mailto:{{$user->email}}" class="text-white fw-bold">{{$user->email}}</a></p>
            @endif         
                        {{-- <p>Architect & Engineer</p>
                        <p>We love that guy</p>
                     --}}
                    
                    
                        </div>
              
                    </div>
                
                  </div>
               
            </div>
        
        </div>
        @endforeach
    </div>
 
  

    
</x-layout>