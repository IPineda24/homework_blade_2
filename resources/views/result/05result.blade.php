<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>frecuencias de edades</h1>

<ul>
    @foreach ($texto as $k => $item)
    <li>la edad  {{ "$k se repite  $item" }} veces</li>
    @endforeach
  </ul>
</body>
</html>