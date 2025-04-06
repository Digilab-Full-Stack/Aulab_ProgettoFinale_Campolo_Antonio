<x-layout>
    @foreach ($users as $user)
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 d-flex justify-content-center align-items-center px-5 py-5">
                <div class="flip-card">
                    <div class="flip-card-inner">
                      <div class="flip-card-front">
                       <h3>{{$user->name}} </h3>
                      </div>
                      <div class="flip-card-back">
                        <h1>John Doe</h1>
                        <p>Architect & Engineer</p>
                        <p>We love that guy</p>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
  
    @endforeach
    
</x-layout>