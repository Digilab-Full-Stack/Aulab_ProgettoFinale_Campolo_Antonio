<x-layout>

@if (session('message'))
<div class="alert alert-success">
    {{session('message')}}

</div>
@endif

@if (session('alert'))
<div class="alert alert-danger">
    {{session('alert')}}

</div>
@endif

<div class="container pt-5">
  <div class="row">
    <div class="col-12 fontCorsive text-center ">
      <h3 class="fs-1 fw-bold">"E noi, compresi e amabili o offesi e succubi di demoni e lupi,<br>noi forti e abili o spenti all'angolo. <br>Noi cerchiamo la bellezza ovunque"</h3>
      <h4>Marlene Kuntz</h4>
    </div>
  </div>
</div>
<div class="container-fluid pt-5">
  <div class="row">
    <div class="col-12 d-flex justify-content-center">
      <img class="w-50" src="/storage/images/barrasopra.png" alt="">
    </div>
  </div>
</div>
<div class="container">
    <div class="row justify-content-center">
      <div class="col-1 d-flex justify-content-center row-reverse align-items-center ">
        <img class="layCustom" src="/storage/images/partesx.png" alt="">
      </div>
        <div class="col-10 d-flex justify-content-center mt-5">

            <div id="carouselExampleCaptions" class="carousel slide carouselCustom border border-dark border-5 border-shadows">
                <div class="carousel-indicators d-none">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item">
                    <img src="/storage/images/home1.png" class="d-block img-fluid" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Se non esistessero i camaleonti, riuscireste a immaginarli?</h5>
                      <p>Qui leggerai di camaleonti e altre storie... </p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="/storage/images/home2.png" class="d-block img-fluid" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>No non è Marte, però ci somiglia!</h5>
                      <p>Qui leggerai di vulcanologi e altre storie... </p>
                    </div>
                  </div>
                  <div class="carousel-item active">
                    <img src="/storage/images/home3.png" class="d-block img-fluid" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Pantarei, tutto scorre.</h5>
                      <p>Qui leggerai del fiume Okavango e altre storie...</p>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="">Indietro</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="">Avanti</span>
                </button>
              </div>
        </div>
        <div class="col-1 d-flex justify-content-center row-reverse align-items-center ">
          <img class="layCustom" src="/storage/images/partedx.png" alt="">
        </div>
    </div>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-12 d-flex justify-content-center">
      <img class="w-50 my-5" src="/storage/images/barrasotto.png" alt="">
    </div>
  </div>
</div>













{{-- <div class="container-fluid p5 bg-secondary-subtle text-center">
    <div class="row justify-content-center">
        <div class="col-12">
            <h1 class="display-1 fontCorsive">Fesso chi non legge</h1>
        </div>

    </div>
</div> --}}


{{-- < <div class="container my-5">
    <div class="row justify-content-evenly">
        @foreach ($articles as $article)
        <div class="col-12 col-md-3">


            <div class="card" style="width: 18rem;">
                <img src="{{Storage::url($article->image)}}" class="card-img-top" alt="Immagine {{$article->title}}">
                    <div class="card-body">
                        <h5 class="card-title">{{$article->title}} </h5>
                        <p class="card-subtitle">{{$article->subtitle}} </p>
                        @if ($article->category)
                        <p class="small text-muted">Categoria:
                        <a href="{{route('article.byCategory', $article->category)}}" class="text-capitalize text-muted"> {{$article->category->name}}</a>
                        </p>
                        @else
                        <p class="small text-muted">Nessuna Categoria </p>
                        @endif

                        <div class=" card-footer d-flex justify-content-between align-item-center">
                            <p>Redatto il {{$article->created_at->format('d/m/Y')}} <br>
                            da <a href="{{route('article.byUser', $article->user)}}" class="text-capitalize text-muted"> {{$article->user->name}}</a>    
                            </p>
                            <a href="{{route('article.show', $article)}}, $article" class="btn btn-outline-secondary px-1 py-1 ">Leggi</a>
                        </div>

                        <div class="my-1 d-flex">
                            @foreach ($article->tags as $tag)
                            <p class="fontCorsive fs-5 px-1">#{{$tag->name}}</p>
                            @endforeach
                        </div>
                

                    </div>
            </div>
             
        </div>
           
            @endforeach
       
    </div>
</div> --}}

</x-layout>