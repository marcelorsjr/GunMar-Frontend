<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>GunMar</title>
  
  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
</head>
<body>
  </br>
  <form action="results.php" method="get">
      <a style="margin-left: 30px; cursor: pointer;" href="about.html">Sobre</a>
  <div class="container container-table">
    <div class="row vertical-center-row">
        <div class="text-center col-md-4 col-md-offset-4">
        <img src="logo.png" alt="GunMar" style="width:100%;">
        </div>
    </div>

    <div class="row vertical-center-row">
        <div class="text-center col-md-8 col-md-offset-2">
           <input type="text" name="query" class="form-control" id="usr">
        </div>
    </div>
    </br>
    <div class="row vertical-center-row">
        <div class="text-center col-md-4 col-md-offset-4">
            <input type="submit" class="btn btn-info" value="Pesquisar">
        </div>
    </div>
  </div>
  </form>




  <!-- jQuery (necessario para os plugins Javascript do Bootstrap) -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>