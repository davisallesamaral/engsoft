@extends('layouts.main')
@section('container')

@if(empty($reports))
<div class="alert alert-danger">
  No data to see.
</div>
@else
<center> <h1>Users Information</h1> </center>
<div class="table-responsive">
<table id="minhaTabela" class="display table" width="100%" >
    <thead>  
        <tr>  
           <th>id</th> 
           <th>active</th>  
           <th>email</th>  
           <th>firstName</th>  
           <th>hourlyWage</th>  
           <th>lastName</th>
           <th>locationId</th>               
           <th>modified</th>  
           <th>userType</th> 
           <th>worked hours</th>               
        </tr>  
    </thead>  
    <tbody>  
      @foreach ($reports as $key => $value)
        <tr> 
            <td>{{$value->id}}</td> 
            <td>{{$value->active}}</td>  
            <td>{{$value->email}}</td>  
            <td>{{$value->firstName}}</td>  
            <td>{{$value->hourlyWage}}</td>  
            <td>{{$value->lastName}}</td>  
            <td>{{$value->locationId}}</td>  
            <td>{{$value->modified}}</td>  
            <td>{{$value->userType}}</td> 
            <td><a href="/rests/timepunches/{{$value->locationId}}/{{$value->id}}/{{$value->firstName}}/{{$value->lastName}}"> <span class="glyphicon glyphicon-search" aria-hidden="true"> </span></a></td>       
        </tr>  
      @endforeach       
    </tbody>           
</table>
</div><!-- /.box-body -->
@endif
@stop