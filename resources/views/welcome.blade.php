<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Modak&display=swap" rel="stylesheet">
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
        font-size:80px;
        color: #4e05a9;
        
    }
    .container{
        display:flex;
        justify-content: space-between;
        font-size: 20px;
        color: #4e05a9;
    }
    a{
     text-decoration: none;
     color: #4e05a9;
    }
    a:hover{
     
     color:#2e0067;
    }

  
</style>
<body>
    <h1>TAREA BLADE</h1>
   <div class="container">
<p><a href="<?php echo route('exercise.a')?>">Ejercicio 01</a></p>
<p><a href="<?php echo route('exercise.b')?>">Ejercicio 02</a></p>
<p><a href="<?php echo route('exercise.c')?>">Ejercicio 03</a></p>
<p><a href="<?php echo route('exercise.d')?>">Ejercicio 04</a></p>
<p><a href="<?php echo route('exercise.e')?>">Ejercicio 05</a></p>
<p><a href="<?php echo route('exercise.f')?>">Ejercicio 06</a></p>
<p><a href="<?php echo route('exercise.g')?>">Ejercicio 07</a></p>
<p><a href="<?php echo route('exercise.h')?>">Ejercicio 08</a></p>
   </div>

<br><br><br><br>
<h3>Comentarios del creador</h3>
<p>-en esta tarea cree una vista y un controlador para cada ejercicio con el fin de aprenderme bien como manejar rutas controladores funciones enviar y recibir datos</p>
<p>-se que pude poner todas las funciones en un solo controlador,pero en cuanto a aprendisaje creo que valio la pena crear el monton de controladores y vistas</p>
</body>
</html>