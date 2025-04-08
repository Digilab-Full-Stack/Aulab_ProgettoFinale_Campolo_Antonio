<x-layout>

<div class="container-fluid text-center mt-3">
    <div class="row justify-content-center">
        <div class="col-12">
            <h1 class="display-1 fontCorsive">"{{$article->title}}"</h1>
        </div>
    </div>
</div>

<div class="container-fluid  mt-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 d-flex flex-column justify-content-center align-items-center">
            <img src="{{Storage::url($article->image)}}" class="img-fluid imageCustom mb-5" alt="Immagine {{$article->title}} ">
            <div class="col-12 col-md-8 d-flex flex-column justify-content-center align-items-center bg-secondary mb-5 border border-warning  border-5 border-opacity-25 rounded-5">
            <div class="text-center my-3 mx-3 ">
                <h2>{{$article->subtitle}} </h2>
                @if ($article->category)
                <p class="fs-7">
                    Categoria:
                    <a href="{{route('article.byCategory', $article->category)}}" class="text-capitalize fw-bold text-dark">{{$article->category->name}} </a>
                </p>
                @else
                <p class="fs-7">Nessuna categoria</p>
                @endif
                <div class="my-3">
                    <p>Redatto il {{$article->created_at->format('d/m/Y')}} da {{$article->user->name}} </p>

                </div>
            </div>
            <hr>
            <p class="mx-5 ">{{$article->body}} </p>
            @if ( Auth::user() && Auth::user()->is_revisor)
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <form action="{{route('revisor.acceptArticle', $article)}}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-success mx-2"> Accetta l'articolo

                            </button>
                        </form>
                        <form action="{{route('revisor.rejectArticle', $article)}}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger mx-2">Rifiuta l'articolo</button>
                        </form>
                    </div>
                </div>
            </div>
            @endif
            <div class="text-center my-5">
            <a href="{{route('article.index')}}" class="text-secondary">Vai alla lista degli articoli</a>
            </div>

        </div>


    </div>
    

</div>



</x-layout>