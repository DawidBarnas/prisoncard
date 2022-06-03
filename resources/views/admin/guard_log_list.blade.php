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
{{ $DelGuards->links() }}
</div>


@endsection('contentdashb')