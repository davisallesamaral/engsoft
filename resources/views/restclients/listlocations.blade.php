@extends('layouts.main')
@section('container')

@if(empty($reports))
<div class="alert alert-danger">
  No data to see.
</div>
@else
<center> <h1>Lacations Information</h1> </center>
<div class="table-responsive">
<table id="minhaTabela" class="display table" width="100%" >
    <thead>  
        <tr>  
           <th>address</th>  
           <th>city</th>  
           <th>country</th>  
           <th>created</th>  
           <th>modified</th>  
           <th>state</th>  
           <th>dailyOvertimeMultiplier</th>  
           <th>dailyOvertimeThreshold</th>  
           <th>overtime</th>  
           <th>weeklyOvertimeMultiplier</th>  
           <th>weeklyOvertimeThreshold</th>  
           <th>Users</th>                     
        </tr>  
    </thead>  
    <tbody>  
      @foreach ($reports as $key => $value)
        
        {{$dailyOvertimeMultiplier = $value->labourSettings->dailyOvertimeMultiplier }}
        {{$dailyOvertimeThreshold = $value->labourSettings->dailyOvertimeThreshold }}
        {{$overtime = $value->labourSettings->overtime }}
        {{$weeklyOvertimeMultiplier = $value->labourSettings->weeklyOvertimeMultiplier }}
        {{$weeklyOvertimeThreshold = $value->labourSettings->weeklyOvertimeThreshold }}
        <tr> 
            <td>{{$value->address}}</td>  
            <td>{{$value->city}}</td>  
            <td>{{$value->country}}</td>  
            <td>{{$value->created}}</td>  
            <td>{{$value->modified}}</td>  
            <td>{{$value->state}}</td>  
            <td>{{$dailyOvertimeMultiplier}}</td> 
            <td>{{$dailyOvertimeThreshold}}</td> 
            <td>{{$overtime}}</td> 
            <td>{{$weeklyOvertimeMultiplier}}</td>            
            <td>{{$weeklyOvertimeThreshold}}</td>           
            <td><a href="/rests/users/{{$value->id}}/{{$dailyOvertimeMultiplier}}/{{$dailyOvertimeThreshold}}/{{$overtime}}/{{$weeklyOvertimeMultiplier}}/{{$weeklyOvertimeThreshold}}"> <span class="glyphicon glyphicon-search" aria-hidden="true"> </span></a></td>
        </tr>  
      @endforeach       
    </tbody>           
</table>
</div><!-- /.box-body -->
@endif
@stop