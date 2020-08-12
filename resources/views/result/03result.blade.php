<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<H1>Numero ingresado</H1>

@for($i=1;$i<=$num;$i++)
@if($i%2==0)
<p>{{$i}}- es par</p>
@else
<p>{{$i}}- es impar</p>
@endif

 @endfor
</body>
</html>