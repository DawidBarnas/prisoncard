@extends('layouts.dashboard')
@section('contentdashb')

<div class="row">
  <div class="col-6">
    <h2> Logi dodań miejsc więźniów </h2>
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
    @foreach($PrisonerPlaceAdds as $PrisonerPlaceAdd)
      <tr>
        <th scope="row">{{$PrisonerPlaceAdd->id}}</th>
        <td>{{$PrisonerPlaceAdd->user_ac}}</td>
        <td>{{$PrisonerPlaceAdd->id_n}}</td>
        <td>{{$PrisonerPlaceAdd->name}}</td>
        <td>{{$PrisonerPlaceAdd->surname}}</td>
        <td>{{$PrisonerPlaceAdd->Miejsceprisoner}}</td>
        <td>{{$PrisonerPlaceAdd->date}}</td>     
      </tr>
      
    @endforeach
  </tbody>
</table>
{{ $PrisonerPlaceAdds->appends(['DPP' => $PrisonerPlaceDeletes->currentPage()])->links() }}
</div>

<div class="row">
  <div class="col-6">
    <h2> Logi usunięć miejsc więźniów </h2>
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
    @foreach($PrisonerPlaceDeletes as $PrisonerPlaceDelete)
      <tr>
        <th scope="row">{{$PrisonerPlaceDelete->id}}</th>
        <td>{{$PrisonerPlaceDelete->user_ac}}</td>
        <td>{{$PrisonerPlaceDelete->id_n}}</td>
        <td>{{$PrisonerPlaceDelete->name}}</td>
        <td>{{$PrisonerPlaceDelete->surname}}</td>
        <td>{{$PrisonerPlaceDelete->Miejsceprisoner}}</td>
        <td>{{$PrisonerPlaceDelete->date}}</td>     
      </tr>
      
    @endforeach
  </tbody>
</table>
{{ $PrisonerPlaceDeletes->appends(['APP' => $PrisonerPlaceAdds->currentPage()])->links() }}
</div>



@endsection('contentdashb')