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
<p>digita un rango de años</p>
<form action="{{ route('Result.h') }}" method="POST">
   @csrf
   <p>año inicial</p>
<input type="number" name="number1" min="1300" required>   
<p>año final </p>
<input type="number" name="number2"  min="1301" required>   
<button>enviar</button>
</form>

</body>
</html>