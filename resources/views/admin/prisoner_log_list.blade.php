@extends('layouts.dashboard')
@section('contentdashb')

<div class="row">
  <div class="col-6">
    Lista strażników
  </div>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Osoba usuwająca</th>
      <th scope="col">Id więźnia</th>
      <th scope="col">Imie więźnia</th>
      <th scope="col">Nazwisko więźnia</th>
      <th scope="col">Data usunięcia więźnia</th>
    </tr>
  </thead>
  <tbody>
    @foreach($DelPrisoners as $DelPrisoner)
      <tr>
        <th scope="row">{{$DelPrisoner->id}}</th>
        <td>{{$DelPrisoner->user_ac}}</td>
        <td>{{$DelPrisoner->id_n}}</td>
        <td>{{$DelPrisoner->name}}</td>
        <td>{{$DelPrisoner->surname}}</td>
        <td>{{$DelPrisoner->date}}</td>     
      </tr>
      
    @endforeach
  </tbody>
</table>
{{ $DelPrisoners->links() }}
</div>


@endsection('contentdashb')