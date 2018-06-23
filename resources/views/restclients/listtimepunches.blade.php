@extends('layouts.main')
@section('container')

@if(empty($reports))
<div class="alert alert-danger">
  No data to see.
</div>
@else
<center> <h1>Punches Information from {{$firstName}} {{$lastName}} </h1>
<div class="table-responsive">
<table id="minhaTabela" class="display table" width="100%" >
    <thead>  
        <tr>  
           <th>id</th> 
           <th>clockedIn</th>  
           <th>clockedOut</th>  
           <th>created</th>  
           <th>hourlyWage</th>  
           <th>locationId</th>  
           <th>modified</th>  
           <th>userId</th>  
        </tr>  
    </thead>  
    <tbody>  
      @foreach ($reports as $key => $value)
         @if(($value->userId = $user) && ($value->locationId = $location))
            <tr> 
                <td>{{$value->id}}</td> 
                <td>{{$value->clockedIn}}</td>  
                <td>{{$value->clockedOut}}</td>  
                <td>{{$value->created}}</td>  
                <td>{{$value->hourlyWage}}</td>  
                <td>{{$value->locationId}}</td>  
                <td>{{$value->modified}}</td>  
                <td>{{$value->userId}}</td> 
            </tr>  
         @endif  
      @endforeach       
    </tbody>           
</table>
</div><!-- /.box-body -->
@endif
@stop