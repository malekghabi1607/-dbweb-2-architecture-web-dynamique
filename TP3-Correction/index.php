<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <title>Correction TP3</title>
    </head>

    <body>
        <?php 
        include 'header.php';
        include 'menu.php';
       
         
        if (isset($_GET["page"])){
            include $_GET["page"];
        }
        else{
            include 'Home.php';
        }

        include 'footer.php';
        
        ?>

    </body>
</html>
