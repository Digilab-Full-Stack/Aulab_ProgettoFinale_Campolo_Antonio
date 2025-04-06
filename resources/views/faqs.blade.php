<x-layout>

    <div class="container-fluid vh-100">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 mt-5">
                <button class="accordion">Che differenza c'è fra revisore e redattore?</button>
                <div class="panel">
                <p>Un redattore può inserire nuovi articoli, ma non saranno subito visibili. Tocca invece al revisore deciderne la pubblicazione</p>
                </div>

                <button class="accordion">Cosa può fare un amministratore?</button>
                <div class="panel">
                <p>L'amministratore oltre ad assegnare i ruoli di revisore e redattore, ha il controllo completo del sito e per esempio può inserire nuove categorie per gli articoli</p>
                </div>

                <button class="accordion">Come posso diventare revisore o redattore?</button>
                <div class="panel">
                <p>Puoi chiedere all'amministratore di diventarlo, ma dovrai prima <a href="{{route('register')}}">registrarti</a> e poi tramite la pagina <a href="{{route('careers')}} ">"Collabora con noi"</a></p>
                </div>

                <button class="accordion">Che dati ho bisogno per registrarmi?</button>
                <div class="panel">
                <p>Puoi registrarti alla pagina <a href="{{route('register')}}">"Registrati"</a> e inserire Nome e Cognome, E-Mail e una password</p>
                </div>

                <button class="accordion">Posso inserire quanti articoli voglio?</button>
                <div class="panel">
                <p>Certamente, ma ricordati che gli articoli prima di essere visualizzati dovranno essere passati al vaglio del revisore.</p>
                </div>




            </div>
        </div>
    </div>






</x-layout>