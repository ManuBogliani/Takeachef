
<!DOCTYPE html>
<html lang="es">
<head>
    <!-- <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Completar los siguientes datos:</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 -->

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#07404B">
    <title>Take a chef</title>
    <!--Font awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css">
    <!--Google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&display=swap" rel="stylesheet">
    <!--Hoja de estilo-->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <!-- Menú de búsqueda con barra de navegación-->
    <?php include('plantillas/cabecera.php'); ?>
    <?php $url="http://".$_SERVER['HTTP_HOST']."/takeachef"  ?>
   
  <form action="registro.php" method="POST" class="form">
   <h1>Solicitar <span>Presupuesto</span></h2>
  <div class="form-seccion">
        
  <input type="hidden" name="id" class="input-form" placeholder="ID">
  </div>
  <div class="form-seccion">
      
  <input type="date" name="fecha" class="input-form">
  </div>
  <div class="form-seccion">
       
  <input placeholder="Nombre"  type="text" name="nombre"class="input-form" required>
  </div>
  <div class="form-seccion">
      
  <input placeholder="Telefono" type="tel" name="telefono" class="input-form" required>
  </div>
  <div class="form-seccion">
      
  <input placeholder="Email" type="email" name="email" class="input-form">
  </div>
  <div class="form-seccion consulta">
   <label>Consulta:</label>
  <textarea  class="textarea" name="consulta" rows="10" cols="50"></textarea>
  </div>
  <input type="submit" value="Enviar" class="btn-chef">
  <input type="reset" value="Borrar" class="btn-chef">   
                         
                
                        
  </form>
  <!--Script Js-->
  <script src="../script/index.js"></script> 
</body>
</html>
<?php include('plantillas/piedepagina.php');?>
