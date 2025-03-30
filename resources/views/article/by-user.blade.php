<x-layout>
    @if (session('message'))
    <div class="alert alert-success">
        {{session('message')}}
    
    </div>
    @endif
    
    <div class="container-fluid p5 bg-secondary-subtle text-center">
        <div class="row justify-content-center">
            <div class="col-12">
                
                <h1 class="display-1">Tutti gli articoli di </h1>
                <h2>"{{$user->name}}"</h2>
           
            </div>
    
        </div>
    </div>
    
    <div class="container my-5">
        <div class="row justify-content-evenly">
            @foreach ($articles as $article)
            <div class="col-12 col-md-3">
    
    
                <div class="card" style="width: 18rem;">
                    <img src="{{Storage::url($article->image)}}" class="card-img-top" alt="Immagine {{$article->title}}">
                        <div class="card-body">
                            <h5 class="card-title">{{$article->title}} </h5>
                            <p class="card-subtitle">{{$article->subtitle}} </p>
                            @if ($article->category)
                            <p class="fs-5">
                                Categoria:
                                <a href="{{route('article.byCategory', $article->category)}}" class="text-capitalize fw-bold text-muted">{{$article->category->name}} </a>
                            </p>
                            @else
                            <p class="fs-5">Nessuna categoria</p>
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
    </div>


</x-layout>