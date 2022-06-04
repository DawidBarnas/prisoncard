@extends('layouts.dashboard')
@section('contentdashb')

<div class="row">
  <div class="col-6">
    <h1> Logi usunięć strażników </h1>
  </div>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Osoba usuwająca</th>
      <th scope="col">Id strażnika</th>
      <th scope="col">Imie strażnika</th>
      <th scope="col">Nazwisko strażnika</th>
      <th scope="col">Data usunięcia strażnika</th>
    </tr>
  </thead>
  <tbody>
    @foreach($DelGuards as $DelGuard)
      <tr>
        <th scope="row">{{$DelGuard->id}}</th>
        <td>{{$DelGuard->user_ac}}</td>
        <td>{{$DelGuard->id_n}}</td>
        <td>{{$DelGuard->name}}</td>
        <td>{{$DelGuard->surname}}</td>
        <td>{{$DelGuard->date}}</td>     
      </tr>
      
    @endforeach
  </tbody>
</table>
{{ $DelGuards->appends(['EG' => $EditGuards->currentPage()])->links() }}
</div>

<div class="row">
  <div class="col-6">
  <h1> Logi edycji strażników </h1>
  </div>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Osoba edytująca</th>
      <th scope="col">Id strażnika</th>
      <th scope="col">Imie strażnika</th>
      <th scope="col">Nazwisko strażnika</th>
      <th scope="col">Data edycji strażnika</th>
    </tr>
  </thead>
  <tbody>
    @foreach($EditGuards as $EditGuard)
      <tr>
        <th scope="row">{{$EditGuard->id}}</th>
        <td>{{$EditGuard->user_ac}}</td>
        <td>{{$EditGuard->id_n}}</td>
        <td>{{$EditGuard->name}}</td>
        <td>{{$EditGuard->surname}}</td>
        <td>{{$EditGuard->date}}</td>     
      </tr>
      
    @endforeach
  </tbody>
</table>
{{ $EditGuards->appends(['DG' => $DelGuards->currentPage()])->links() }}
</div>


@endsection('contentdashb')