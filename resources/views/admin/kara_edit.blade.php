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
<form action="/kara_update/{{ $kara[0]->id}}" method="post">
        {{csrf_field()}}
<div class="container">
    <div class="jumbotron" style="margin-top: 5%;">
    <h1> Edycja kary</h1>
    <hr>
    <div class="form-group">
        <label for="id_wieznia">Id wieznia</label>
        <input id="id_wieznia" type="text" class="form-control" name="id_wieznia" placeholder="Wpisz id_wieznia" >
    </div>
    <div class="form-group">
        <label for="Typ">Typ</label>
        <input id="Typ" type="text" class="form-control" name="Typ" placeholder="Wpisz typ kary" >
    </div>
    <div class="form-group">
        <label for="data_rozpoczecia">Data rozpoczęcia</label>
        <input id="data_rozpoczecia" type="date" class="form-control" name="data_rozpoczecia" placeholder="Wpisz datę rozpoczęcia kary" >
        
    </div>
    <div class="form-group">
        <label for="planowana_data_zakonczenia">Planowana data zakończenia</label>
        <input id="planowana_data_zakonczenia" type="date" class="form-control" name="planowana_data_zakonczenia" placeholder="Wpisz planowaną datę zakończenia" >

    </div>
    
    <div class="form-group">
        <label for="dodatkowe_kary">Dodatkowe kary</label>
        <input id="dodatkowe_kary" type="number" class="form-control" name="dodatkowe_kary" placeholder="Wpisz ilość dni dodatkowej kary" >
    </div>

    
    <input type="submit" name="submit" class="btn btn-success" value="Zapisz zmiany">
  <a class="float-right" href="/kara">
    <button type="button" class="btn btn-primary">Cofnij</button>
</a>
</div>
</div>
</form>
</body>


</html>
