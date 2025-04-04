<x-layout>
    @if(session('message'))
    <div class="alert alert-success">
        {{session('message')}}
    </div>
    @endif
    
    <div class="container-fluid pt-3 text-center">
        <div class="row justify-content-center">
            <div class="col-12">
                
                <h1 class="display-1 fontCorsive ">Dashboard Amministratore</h1>
          
            </div>
    
        </div>
    </div>  
<div class="container-fluid mt-5 text-center">
    <div class="row">
        <div class="col-12">
            <h1 class="display-5">
            Ciao, {{Auth::user()->name}} !
            </h1>
        </div>
    </div>
</div>

<div class="container pt-3">
    <div class="row">
        <div class="col-12 text-danger">
            <h2>Richieste per il ruolo di amministatore</h2>
            <x-requests-table :roleRequests="$adminRequests" role="amministratore"></x-requests-table>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12 text-danger">
            <h2>Richieste per il ruolo di revisore</h2>
            <x-requests-table :roleRequests="$revisorRequests" role="revisore"></x-requests-table>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12 text-danger">
            <h2>Richieste per il ruolo di redattore</h2>
            <x-requests-table :roleRequests="$writerRequests" role="redattore"></x-requests-table>
        </div>
    </div>
</div>

<hr>
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12 text-danger">
            <h2>Tutti i tags</h2>
            <x-metainfo-table :metaInfos="$tags" metaType="tags"></x-metainfo-table>
        </div>
    </div>
</div>
<div class="container my-5">
    <div class="row justify-content-between">
        <div class="col-12 text-danger">
            <h2>Tutte le categorie</h2>
            <form action="{{route('admin.storeCategory')}}" method="POST" class="w50 d-flex justify-content-center m-3">
            @csrf
            <input type="text" name="name" class="form-control me-2 w-50" placeholder="Inserisci una nuova categoria">
            <button type="submit" class="btn btn-outline-alert btn-dark fw-bold">Inserisci</button>
        </form>
            <x-metainfo-table :metaInfos="$categories" metaType="categorie"></x-metainfo-table>
        </div>
    </div>
</div>


</x-layout>