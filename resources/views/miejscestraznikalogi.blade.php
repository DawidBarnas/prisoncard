@extends('layouts.dashboard')
@section('contentdashb')

<div class="row">
  <div class="col-6">
    <h2> Logi dodań miejsc strażników </h2>
  </div>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Osoba dodająca</th>
      <th scope="col">Id strażnika</th>
      <th scope="col">Imie strażnika</th>
      <th scope="col">Nazwisko strażnika</th>
      <th scope="col">Miejsce</th>
      <th scope="col">Data</th>
    </tr>
  </thead>
  <tbody>
    @foreach($AddPlaceGuards as $AddPlaceGuard)
      <tr>
        <th scope="row">{{$AddPlaceGuard->id}}</th>
        <td>{{$AddPlaceGuard->user_ac}}</td>
        <td>{{$AddPlaceGuard->id_n}}</td>
        <td>{{$AddPlaceGuard->name}}</td>
        <td>{{$AddPlaceGuard->surname}}</td>
        <td>{{$AddPlaceGuard->Miejsceuser}}</td>
        <td>{{$AddPlaceGuard->date}}</td>     
      </tr>
      
    @endforeach
  </tbody>
</table>
{{ $AddPlaceGuards->appends(['DGP' => $GuardPlaceDeletes->currentPage()])->links() }}
</div>

<div class="row">
  <div class="col-6">
    <h2> Logi usunięć miejsc strażników </h2>
  </div>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Osoba dodająca</th>
      <th scope="col">Id strażnika</th>
      <th scope="col">Imie strażnika</th>
      <th scope="col">Nazwisko strażnika</th>
      <th scope="col">Miejsce</th>
      <th scope="col">Data</th>
    </tr>
  </thead>
  <tbody>
    @foreach($GuardPlaceDeletes as $GuardPlaceDelete)
      <tr>
        <th scope="row">{{$GuardPlaceDelete->id}}</th>
        <td>{{$GuardPlaceDelete->user_ac}}</td>
        <td>{{$GuardPlaceDelete->id_n}}</td>
        <td>{{$GuardPlaceDelete->name}}</td>
        <td>{{$GuardPlaceDelete->surname}}</td>
        <td>{{$GuardPlaceDelete->Miejsceuser}}</td>
        <td>{{$GuardPlaceDelete->date}}</td>     
      </tr>
      
    @endforeach
  </tbody>
</table>    
{{ $GuardPlaceDeletes->appends(['AGP' => $AddPlaceGuards->currentPage()])->links() }}
</div>



@endsection('contentdashb')