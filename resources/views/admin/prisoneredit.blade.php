<DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
            <title>Edycja</title>
</head>
<body>
    <form action="/update/{{ $prisoner[0]->id}}" method="post">
        {{csrf_field()}}
<div class="container">
    <div class="jumbotron" style="margin-top: 5%;">
    <h1> Edycja informacji o więźniu</h1>
    <hr>
    <div class="form-group">
        <label for="id">Id</label>
        <input id="id" type="number" class="form-control" name="id" id="id" value="{{ $prisoner[0]->id}}" placeholder="Wpisz id" >
    </div>
    <div class="form-group">
        <label for="Imie">Imie</label>
        <input id="Imie" type="text" class="form-control" name="Imie" value="{{ $prisoner[0]->Imie}}" placeholder="Wpisz imię" >
    </div>
    <div class="form-group">
        <label for="Nazwisko">Nazwisko</label>
        <input id="Nazwisko" type="text" class="form-control" name="Nazwisko" value="{{ $prisoner[0]->Nazwisko}}" placeholder="Wpisz nazwisko" >
    </div>
    <div class="form-group">
        <label for="Miasto">Miasto</label>
        <input id="Miasto" type="text" class="form-control" name="Miasto" value="{{ $prisoner[0]->Miasto}}" placeholder="Wpisz miasto" >
    </div>
    <div class="form-group">
        <label for="Ulica">Ulica</label>
        <input id="Ulica" type="text" class="form-control" name="Ulica" value="{{ $prisoner[0]->Ulica}}" placeholder="Wpisz ulicę" >
    </div>
    <div class="form-group">
        <label for="Waga">Waga</label>
        <input id="Waga" type="number" class="form-control" name="Waga" value="{{ $prisoner[0]->Waga}}" placeholder="Wpisz wagę" >
    </div>
    <div class="form-group">
        <label for="Wzrost">Wzrost</label>
        <input id="Wzrost" type="number" class="form-control" name="Wzrost" value="{{ $prisoner[0]->Wzrost}}" placeholder="Wpisz wzrost" >
    </div>
    <div class="form-group">
        <label for="Telefon">Telefon</label>
        <input id="Telefon" type="number" class="form-control" name="Telefon" value="{{ $prisoner[0]->Telefon}}" placeholder="Wpisz telefon" >
    </div>
    <div class="form-group">
        <label for="id_celi">id_celi</label>
        <input id="id_celi" type="number" class="form-control" name="id_celi" value="{{ $prisoner[0]->id_celi}}" placeholder="Wpisz id_celi" >
    </div>
    <div class="form-group">
        <label for="mozliwosc_wizyt">mozliwosc_wizyt</label>
        <input id="mozliwosc_wizyt" type="number" class="form-control" name="mozliwosc_wizyt" value="{{ $prisoner[0]->mozliwosc_wizyt}}" placeholder="Wpisz mozliwosc wizyt" >
    </div>
    <div class="form-group">
        <label for="mozliwosc_przepustek">mozliwosc_przepustek</label>
        <input id="mozliwosc_przepustek" type="number" class="form-control" name="mozliwosc_przepustek" value="{{ $prisoner[0]->mozliwosc_przepustek}}" placeholder="Wpisz mozliwosc przepustek" >
    </div>
    <div class="form-group">
        <label for="Status_celi">Status_celi</label>
        <input id="Status_celi" type="text" class="form-control" name="Status_celi" value="{{ $prisoner[0]->Status_celi}}" placeholder="Wpisz status celi" >
    </div>

    <input type="submit" name="submit" class="btn btn-success" value="Zapisz dane">
  <a class="float-right" href="/prisoner_list">
    <button type="button" class="btn btn-primary">Cofnij</button>
</a>
</div>
</div>
</form>
</body>
</html>
