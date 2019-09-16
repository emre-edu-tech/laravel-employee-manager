@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		@if($departments)
			<div class="col-md-12">
				<h2>Departments</h2>
				<hr>
				<table class="table">
					<tr>
						<td>Name</td>
						<td>Description</td>
						<td>Created Date</td>
					</tr>
					@foreach($departments as $department)
					<tr>
						<td>{{ $department->name }}</td>
						<td>{{ $department->description }}</td>
						<td>{{ $department->created_at->format('d/m/Y') }}</td>
					</tr>
					@endforeach
				</table>
			</div>
		{{ $departments->links() }}
		@else
			<div class="bg-alert">There is no department in your database.</div>
		@endif
	</div>
</div>
@endsection