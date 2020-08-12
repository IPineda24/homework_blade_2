<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>la conversion se ha realizado con exito</h1>
<table>
  <tr>
    <td>
    
      @foreach ($nw  as $item)
    <p> {{ " $item " }}</p>
    @endforeach
    
   
  </td>
    <td>   @foreach ($word  as $k => $item)
    <p> {{ " $item" }}</p>
    @endforeach
   
  </td>
  </tr>
</table>






  




</body>
</html>