@extends('layouts.app')

@section('content')
    <br>
	<div class="col-sm-offset-3 col-sm-8">
		<div class="panel panel-success">
			<div class="panel-heading">Ajout d'un nouveau visiteur</div>
			<div class="panel-body"> 
				Merci. Le visiteur à bien été ajouté.
			</div>
			<div>
				<a href="{{ url('/home/clients') }}" button class="btn btn-primary btn-small pull-right">Retour</a>
			</div>
		</div>
	</div>
@endsection