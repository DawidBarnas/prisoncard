<DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
            <title>Dodawanie</title>
</head>
<body>
    <form action="/add_delete_guard" method="post">
        {{csrf_field()}}
<div class="container">
    <div class="jumbotron" style="margin-top: 5%;">
    <h1> Dodawanie straznika</h1>
    <hr>
    <div class="form-group">
        <label for="name">Imie</label>
        <input id="name" type="text" class="form-control" name="name" placeholder="Wpisz imię" >
    </div>
    <div class="form-group">
        <label for="surname">Nazwisko</label>
        <input id="surname" type="text" class="form-control" name="surname" placeholder="Wpisz nazwisko" >
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input id="email" type="email" class="form-control" name="email" placeholder="Wpisz email" >
        
    </div>
    <div class="form-group">
        <label for="password">Hasło</label>
        <input id="password" type="password" class="form-control" name="password" placeholder="Wpisz haslo" >

    </div>
    
    <div class="form-group">
        <label for="Stopien">Stopien</label>
        <input id="Stopien" type="text" class="form-control" name="Stopien" placeholder="Wpisz stopien" >
    </div>
    <div class="form-group">
        <label for="Telefon">Telefon</label>
        <input id="Telefon" type="number" class="form-control" name="Telefon" placeholder="Wpisz telefon" >
    </div>
    <div class="form-group">
        <label for="Status">Status</label>
        <input id="Status" type="text" class="form-control" name="Status" placeholder="Wpisz Status" >
    </div>
    

    <input type="submit" name="submit" class="btn btn-success" value="Zapisz zmiany">
  <a class="float-right" href="/guard_list">
    <button type="button" class="btn btn-primary">Cofnij</button>
</a>
</div>
</div>
</form>
</body>


</html>
