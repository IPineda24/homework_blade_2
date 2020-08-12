<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>libros que debes leer</h1>
    <ul>
    @foreach ($sread as $item)
    <li>{{ " $item" }} </li>
    @endforeach
  </ul>

  <h1>libros no seleccionados</h1>
  <ul>
    @foreach ($noread as  $item)
    <li>{{ "$item" }}</li>
    @endforeach
  </ul>
</body>
</html>