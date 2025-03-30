<x-layout>
    @if (session('message'))
    <div class=" alert alert-success">
        {{session('message')}}
    </div>
    @endif
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 class="display-5 py-5 text-center">
    Bentornato, Redattore {{Auth::user()->name}}
                </h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Articoli da revisionare</h2>
                <x-writer-articles-table  :articles="$unrevisionedArticles"></x-writer-articles-table>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Articoli pubblicati</h2>
                <x-writer-articles-table  :articles="$acceptedArticles"></x-writer-articles-table>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Articoli respinti</h2>
                <x-writer-articles-table  :articles="$rejectedArticles"></x-writer-articles-table>
            </div>
        </div>
    </div>
    
    </x-layout>