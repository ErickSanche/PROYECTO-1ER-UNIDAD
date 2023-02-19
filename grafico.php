<?php
	session_start();
?><html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="'width=device-width, initial-scale=1.0">
    <title> SPIDERSHOP </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style.css"/>
    <meta charset="UTF-8">
    <meta http-equiv="x-UA-Compatible " content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1. e">
    <title>Tienda Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    rel="stylesheet "
    integrity="sha384-1BmE4kWBq78ivh FldvkuhfTAU6auUStT94WrHftjDbrCEXSU1OBoqy120VZ6jIw3"
    crossorigin="anonymous ">
</head>

<header>
     <link rel="stylesheet" href="../proyecto1/syles/css/barra.css">
    <div class="interior">
      <a href="index.php" class="logo" ><img src="../proyecto1/imagenes/spiderlogo.png" width="100" height="60">  </a>
      <nav class="navegacion">
        <ul>
          <li><a href="index.php" >ROPA</a></li>
          <li><a href="juguetes.php" >JUGUETES</a></li>
          <li><a href="grafico.php" >GRAFICA </a></li>
        </ul>
      </nav>
    </div>
  </header>

  <body>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['VENTAS', 'VENTAS POR MESES'],
          ['POLOS',     11],
          ['CAMISAS',      2],
          ['ROMPECABEZAS',  2],
          ['CUBOS', 2],
          ['PELUCHES',    7]
        ]);

        var options = {
          title: 'VENTAS POR MESES',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>

    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
  </body>
</html>