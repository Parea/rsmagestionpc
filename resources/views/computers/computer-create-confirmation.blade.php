@extends('layouts.app')

@section('content')
<div class="container">
	<div class="col-sm-12">
		<div class="panel panel-info">
			<div class="panel panel-success">
				<div class="panel-heading">Association PC à visiteur
					<div class="panel-body"> 
						Merci votre association a été fait avec succés.
					</div>
				</div>
			<div>
				<a href="{{ url('/home/assignments') }}" button class="btn btn-primary btn-small pull-right">Retour</a>
			</div>
		</div>
	</div>
</div>
@endsection