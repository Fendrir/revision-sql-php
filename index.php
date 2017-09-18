<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<?php include(__DIR__.'/pages/header.php'); ?>
    
    <div class="container">
    
        <div class="row">
        
            <div class="col-md-6 col-md-offset-3">
            
                <h1>La belle révision du SQL Chouette ...</h1>
            
            </div>

        </div>

    <?php

        include('./Template/requete.php');
?>
    
    </div>

    <script src="node_modules/jquery/dist/jquery.js" ></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js" ></script>
    <script src="app.js" ></script>
</body>
</html>


