@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		@if($employees)
			<div class="col-md-12">
				<h2>Employees in All Departments</h2>
				<hr>
				<table class="table">
					<tr>
						<td>Name</td>
						<td>Age</td>
						<td>Gender</td>
						<td>Department</td>
						<td>Created Date</td>
					</tr>
					@foreach($employees as $employee)
					<tr>
						<td>{{ $employee->name }}</td>
						<td>{{ $employee->age }}</td>
						<td>{{ $employee->gender }}</td>
						<td>{{ $employee->department->name }}</td>
						<td>{{ $employee->created_at->format('d/m/Y') }}</td>
					</tr>
					@endforeach
				</table>
			</div>
		{{ $employees->links() }}
		@else
			<div class="bg-alert">There is no employee in your database.</div>
		@endif
	</div>
</div>
@endsection