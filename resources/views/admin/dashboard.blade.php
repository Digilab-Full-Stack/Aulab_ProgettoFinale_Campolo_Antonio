<x-layout>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1 class="display-1">
Bentornato, Amministratore {{Auth::user()->name}}
            </h1>
        </div>
    </div>
</div>
@if(session('message'))
<div class="alert alert-success">
    {{session('message')}}
</div>
@endif
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>Richieste per il ruolo di amministatore</h2>
            <x-requests-table :roleRequests="$adminRequests" role="amministratore"></x-requests-table>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>Richieste per il ruolo di revisore</h2>
            <x-requests-table :roleRequests="$revisorRequests" role="revisore"></x-requests-table>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>Richieste per il ruolo di redattore</h2>
            <x-requests-table :roleRequests="$writerRequests" role="redattore"></x-requests-table>
        </div>
    </div>
</div>

</x-layout>