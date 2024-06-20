
<footer class="w3-container w3-cyan w3-center w3-bottom"> 
<?php
        $fichier = "";
        if (isset($_GET['page'])){
        $fichier = $_GET['page'];
        }
        else{
        $fichier = 'Home.php';
        }
        echo "Cette page a été modifié le : " . date ("F d Y H:i:s.", filemtime($fichier));
?>

</footer>