@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Bienvenue sur le gestionnaire d'ordinateur {{ Auth::User()->firstname }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    Vous êtes bien connecté!
                        @if ($users->id == 1 )<div class="panel-heading"><a href="home/news">Voir tous les ordinateurs utilisées</a><br/></div>@endif
                        @if ($users->id == 1 )<div class="panel-heading"><a href="home/news/new">Associé un client vers un ordinateur</a><br/></div>@endif
                        @if ($users->id == 1 )<div class="panel-heading"><a href="home/client/new">Ajouter un nouveau client</a></div>@endif
                        @if ($users->id == 1 )<div class="panel-heading"><a href="home/clients">Voir tous les clients</a></div>@endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection