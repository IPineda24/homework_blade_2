<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
   
  body{
      background-color: white;
      font-family: 'Fredoka One', cursive;
     
  }
    h1{
        display:flex;
        justify-content: center;
        font-size:20px;
        color: #4e05a9;
        
    }

    p{
     text-decoration: none;
     color: #4e05a9;
    }
  button{
      border-radius: 5px;
      color: white;
      background-color:#4e05a9;
  }
  input{
      width: 200px;
      height: 20px;
    border-radius: 5px;
      color: white;
      background-color:#4e05a9; 
  }
  
</style>
<body>
<H1>tabla de division del 2,desde 25 hasta 0 y sus residuos</H1>



 @for($i=25;$i>=0;$i--)
@if($i%2==0)
<p>{{$i}} entre 2 es: {{$i/2}} y me sobra: {{$i%2}}</p>
@else
<p>{{$i}} entre 2 es: {{($i-1)/2}} y me sobra: {{$i%2}}</p>
@endif
 @endfor
</body>
</html>