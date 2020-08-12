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
<p>ingresa las edades separadas por coma, ejemplo (1,2,3,4,1)</p>
<form action="{{ route('Result.e') }}" method="POST">
   @csrf
<input type="text" name="texto" >    
<button>enviar</button>
</form>

</body>
</html>