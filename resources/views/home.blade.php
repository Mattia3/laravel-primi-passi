@php
$titolo = "Hello Word";
$titoloDellaPagina = "laravel-primi-passi";
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $titoloDellaPagina }}</title>
</head>

<body>
  <div class="container">
    <h1>{{ $titolo }}</h1>
    <a  class="link" href="{{route('nomeUtente')}}">Nome e Cognome</a>
    <a class="link" href="{{route('emailUtente')}}">Lista Email</a>
  </div>
</body>


<style>
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
.container{
  text-align: center;
  background-color: lightgray;
  height: 100px;
  padding-top: 20px;
}

.link{
  margin: 50px 20px;
}



</style>
</html>

