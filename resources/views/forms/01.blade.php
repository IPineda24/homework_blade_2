<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
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
<h1>Programa que hace un acuenta arregresiva desde tu edad actual</h1>
<p>ingresa tu edad</p>
<form action="{{ route('Result.a') }}" method="POST">
   @csrf
<input type="number" name="cont" min="1">    
<button>enviar</button>
</form>

</body>
</html>