
@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<div class="panel panel-primary">
	<div class="panel-heading">Dashboard</div>


	<div class="panel-body">

		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Incidencias reportadas por mí</h3>
			</div>
			<div class="panel-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Código</th>
							<th>Severidad</th>
							<th>Estado</th>
							<th>Fecha creación</th>
							<th>Título</th>
							<th>Responsable</th>
						</tr>
					</thead>
					<tbody id="dashboard_my_incidents">
							@foreach ($incidents_by_me as $incident)
							<tr>
								<td>
									<a href="/ver/{{ $incident->id }}/incidencia">
										{{ $incident->id }}
									</a>
								</td>
								
								<td>{{ $incident->severity_full }}</td>
								<td>{{ $incident->state }}</td>
								<td>{{ $incident->created_at }}</td>
								<td>{{ $incident->title_short }}</td>
								<td>
									{{ $incident->support_id ? $incident->support->rdbtnombre." ".$incident->support->rdbtapellido : 'Sin asignar' }}
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>

			</div>
		</div>

	</div>
</div>
@endsection
