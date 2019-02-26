@extends('master')


@section('content')

<table class ="table table-responsive table-hover">
  
  <tr>
  	<th>SI</th>
    <th>Name</th>
    <th>Regestration</th> 
    <th>Department Name</th>
    <th>Information</th>
    <th>Action</th>
  </tr>

  @php $i=0;  @endphp 

  @foreach ($students as $student)
 
 	@php $i++ @endphp
 


<tr>
	<td>{{ $i }}</td>
	<td>{{ $student->name }}</td>
	<td>{{ $student->regestration_id }}</td>
	<td>{{ $student->department_name}}</td>
	<td>{{ $student->text}}</td>
	<td> <a href="{{route('edit', $student->id)}}" class="btn btn-success">Edit </a> 
	<form class="form-inline"  action="{{route('delete',$student->id)}}" method="post">
		{{csrf_field()}}

		<input type="submit" class="btn btn-danger" value="delete">
	</form>

	</td>
    
   
</tr>
@endforeach

</table>



@endsection


