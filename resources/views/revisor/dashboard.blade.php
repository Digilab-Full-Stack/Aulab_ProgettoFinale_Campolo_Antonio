<x-layout>
    @if (session('message'))
    <div class=" alert alert-success">
        {{session('message')}}
    </div>
    @endif

    <div class="container-fluid pt-3 text-center">
        <div class="row justify-content-center">
            <div class="col-12">
                
                <h1 class="display-1 fontCorsive ">Dashboard Revisore</h1>
          
            </div>
    
        </div>
    </div>  




    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-5 py-5 text-center">
    Ciao, {{Auth::user()->name}} !
                </h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 text-danger pb-2">
                <h2>Articoli da revisionare</h2>
                <x-articles-table :articles="$unrevisionedArticles"></x-articles-table>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 text-danger pb-2">
                <h2>Articoli pubblicati</h2>
                <x-articles-table :articles="$acceptedArticles"></x-articles-table>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 text-danger pb-2">
                <h2>Articoli respinti</h2>
                <x-articles-table :articles="$rejectedArticles"></x-articles-table>
            </div>
        </div>
    </div>
    
    </x-layout>