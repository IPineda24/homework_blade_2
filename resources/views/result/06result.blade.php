<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<H1>Numeros primos</H1>


@for($i=0;$i<=$num;$i++)
@if($i==2||$i==3||$i==5||$i==7||$i==11||$i==13)
<p>{{$i}}</p>
@endif
@endfor


@for($i=0;$i<=$num;$i++)
@for($o=0;$o<=$num;$o++)
@if($i==($o*$o)+$o+17 || $i==($o*$o)+$o+41)
<p>{{$i}}</p>
@endif
@endfor
@endfor
</body>
</html>