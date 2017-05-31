<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Semiotica - Ramas</title>
    <link href="css/bootstrap.css" rel="stylesheet">


    <style>
      body{position: relative;}
      #section1 {padding-top:100px;height:400px;color: #fff; background-color: #1E88E5;}
      #section2 {padding-top:130px;height:400px;color: #fff; background-color: #673ab7;}
      #section3 {padding-top:130px;height:400px;color: #fff; background-color: #ff9800;}
      #section4 {padding-top:130px;height:400px;color: #fff; background-color: #00bcd4;}
      #section5 {padding-top:60px;height:400px;color: #fff; background-color: #009688;}
      .affix {top: 55px; width: 100%;}
      .affix + .container-fluid {padding-top: 1100px;}
    </style>
  </head>
  <body>
    <!--Encabezado -->
    <?php include('contenido/cabecera.php'); ?>
    <!-- -->
    <div class="container">
      <ul class="nav nav-tabs  navbar "data-spy="affix" data-offset-top="397">
        <li role="presentation" class="active"><a href="#section1">Semasiología</a></li>
        <li role="presentation" class="active"><a href="#section2">Pragmática</a></li>
        <li role="presentation" class="active"><a href="#section3">Sintaxis</a></li>
        <li role="presentation" class="active"><a href="#section4">Onomasiología</a></li>
        <li role="presentation" class="active"><a href="#section5">Semántica</a></li>
      </ul>
    </div>


    <div id="section1" class= "container container-fluid">
      <h3>La semasiología</h3>
      <p>La semasiología, al contrario, estudia la relación que existe entre un objeto y su nombre. En el caso del diálogo, parte del receptor al emisor para el estudio del mismo/p>
    </div>
    <div id="section2" class= "container container-fluid">
      <h3>La pragmática</h3>
      <p>Es la encargada de estudiar las relaciones entre significantes y usuarios; es decir de qué forma emplean los seres humanos los diferentes signos a la hora de comunicarse.</p>
    </div>
    <div id="section3" class= "container container-fluid">
      <h3>Sintaxis</h3>
      <p>La parte de la semiótica que se encarga de estudiar las relaciones que se establecen entre los diversos significantes</p>
    </div>
    <div id="section4" class= "container container-fluid">
      <h3>La onomasiología</h3>
      <p>Se encarga de nombrar a los objetos y establecer las diferentes denominaciones para una misma cosa.</p>
    </div>
    <div id="section5" class= "container container-fluid">
      <h3>La semántica</h3>
      <p>Encargada de estudiar qué relaciones existen entre significantes y significados; es decir el significado de las palabras, de los enunciados y de las oraciones.</p>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>




    <!--Pie de pagina -->
    <?php include('contenido/pie.php'); ?>
    <!-- -->
</body>
  </html>
