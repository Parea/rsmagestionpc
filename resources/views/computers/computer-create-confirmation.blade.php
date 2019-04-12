@extends('layouts.app')

@section('content')
    <br>
	<div class="col-sm-offset-3 col-sm-8">
		<div class="panel panel-success">
			<div class="panel-heading">Association PC à client</div>
			<div class="panel-body"> 
				Merci votre association a été fait avec succés.
			</div>
			<div>
				<a href="{{ url('/home/computers') }}" button class="btn btn-primary btn-small pull-right">Retour</a>
			</div>
		</div>
	</div>
@endsection