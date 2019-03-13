<?php
$json = file_get_contents('resenhas.json');
//echo $lista_resenhasjson;
$lista_resenhas = json_decode($json, TRUE);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Resenhados Online</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body class="bg-light">

<?php require_once 'menu.php'; ?>	

<br><br><br>

<div class="container">            
            
        <div id="jogos" class="row">          
            
            <div id="resenha" class="col-sm-4 mb-5">
                <div  class="card">
                    <img class="card-img" src="img/x.jpg" height="150px" >
                </div>
            </div>

			<div id="resenha" class="col-sm-4 mb-5">
                <div  class="card">
                    <img class="card-img" src="img/x.jpg" height="150px" >
                </div>
            </div>

			<div id="resenha" class="col-sm-4 mb-5">
                <div  class="card">
                    <img class="card-img" src="img/x.jpg" height="150px" >
                </div>
            </div>
					
        </div>

        <div id="jogos" class="row">

			<div id="resenha" class="col-sm-2 mb-5">
                   <article class="bg-dark"></article>
            </div>

            
            <div id="resenha" class="col-sm-4 mb-5">
                <div  class="card">
                    <img class="card-img" src="img/x.jpg" height="150px" >
                </div>
            </div>

            <div id="resenha" class="col-sm-4 mb-5">
                <div  class="card">
                    <img class="card-img" src="img/x.jpg" height="150px" >
                </div>
            </div>

        </div>
            
</div>
</body>
</html>