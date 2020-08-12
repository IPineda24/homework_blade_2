<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@for ($i=$num1; $i <=$num2 ; $i++) 
         @if ($i%4==0) 
              @if ($i%100==0 && $i%400==0) 
                <p>el año {{$i}} es bisisesto </p>
              @else 
              <p>el año {{$i}} si es bisisesto </p>
              @endif
        @else 
        <p>el año {{$i}} no  es bisisesto </p>
             
 @endif
     @endfor
</body>
</html>