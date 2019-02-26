@extends('master');


@section('content')


<h2> Create New student Database </h2>



<form class="form-horizontal" action="{{ route('store')}}" method="post">

{{ csrf_field() }}

  <div class="form-group">
    <label class="control-label col-sm-2" for="Name">Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="name" id="name" placeholder="Name">
    </div>
  </div>
  

   <div class="form-group">
    <label class="control-label col-sm-2" for="regestration_id">Registration Number:</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name="regestration_id" id="regestration_id" placeholder="Registration_NO">
    </div>
  </div>
  


<div class="form-group">
    <label class="control-label col-sm-2" for="department_name">Department Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="department_name" id="department_name" placeholder="Department Name">
    </div>
  </div>
  

<div class="form-group">
    <label class="control-label col-sm-2" for="text">Information:</label>
    <div class="col-sm-10">
      <textarea class="form-control" name="text" id="text" rows="10"></textarea>
    </div>
  </div>
  


   
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-danger">Submit Register student </button>
    </div>
  </div>
</form>









@endsection


