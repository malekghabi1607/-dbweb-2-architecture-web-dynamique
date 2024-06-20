<!DOCTYPE html>
<html lang="fr-FR">
     <head>
        <title>Correction TP3-partie1</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
       
    <style>
        hr{
            height: 3px;
            background-color: teal;
        }
    </style>
     </head>
     <body>
         <main class="w3-container  w3-content ">
         
        <p>
         <h2 class="w3-text-teal">1. Prise en main de XAMPP</h2>
         <?php echo "Hello world en PHP!"; ?>
        </p>
         
        <hr>

         <h2 class="w3-text-teal">2. Premiers codes PHP</h2>
         <h3 class="w3-text-teal">Affichage et type de variables</h3>
         <?php 
            $i=2; 
            $j=3; 
            echo "i = $i <br>"; 
            echo "j = $j <br>"; 
            echo "i * j = ". $i * $j ."<br>"; 
            $k=$i; 
            $i=$j; 
            $j=$k; 
            echo "<br>";
            echo "Les valeurs des variables échangées : <br>";
            echo "i = $i <br>"; 
            echo "j = $j <br>"; 
            echo "i * j = ". $i * $j ." <br>"; 
         ?> 

         <hr>
         <h3 class="w3-text-teal">Opérateurs et variables</h3>
         <?php 
            $a = "Bonjour ";
            $b = " à tous,";
            $c = " Ceci est la solution de la partie  ";
            $x = 1;
            $msg = $a.$b.$c.$x. " du TP ";
            $x = $x*2;
            echo ("<p>$msg $x!</p>");
         ?>
         <hr>
         <h3 class="w3-text-teal">Fonctions système</h3>
         <?php
            # Version 1 
            $jour = date("d-m-Y");
            $heure = date("H:i:s");
            echo "Nous sommes le $jour et il est $heure. <br>";
            
            /*
            # Version 2
            setlocale(LC_TIME, "fr_FR");
            echo (strftime ("<H3>Ici, nous sommes le %A %d %B, "));
            echo (strftime ("il est %H h %M min %S sec.</H3>\n"));
            */


            # Date de demain
            $hier = time () - 86400; # 24h = 86400 secondes
            $hier = date("d-m-Y", $hier);
            echo "<span style ='text-decoration : underline;'>La date d'hier est ($hier)</span>"; 
         ?>
         <hr>
         <h3 class="w3-text-teal">Structure conditionnelle</h3>
         <?php
            $seconds = time();
            $seconds = $seconds % 60;
            if ($seconds > 0 and $seconds <= 6) {
                echo "<p style='color:blue;'>Exemple de texte qui change de couleur en fonction de l'instant en cours, pris à $seconds seconde</p>";
            }
            elseif ($seconds >6 and $seconds <= 12) {
                echo "<p style='color:red;'>Exemple de texte qui change de couleur en fonction de l'instant en cours, pris à $seconds seconde</p>";
            }
            elseif ($seconds > 12 and $seconds <= 18) {
                echo "<p style='color:salmon;'>Exemple de texte qui change de couleur en fonction de l'instant en cours, pris à $seconds seconde</p>";
            }
            elseif ($seconds > 18 and $seconds <= 24) {
                echo "<p style='color:gray;'>Exemple de texte qui change de couleur en fonction de l'instant en cours, pris à $seconds seconde</p>";
            }
            elseif ($seconds > 24 and $seconds <= 30) {
                echo "<p style='color:lime;'>Exemple de texte qui change de couleur en fonction de l'instant en cours, pris à $seconds seconde</p>";
            }
            elseif ($seconds > 30 and $seconds <= 36) {
                echo "<p style='color:maroon;'>Exemple de texte qui change de couleur en fonction de l'instant en cours, pris à $seconds seconde</p>";
            }
            elseif ($seconds > 36 and $seconds <= 42) {
                echo "<p style='color:black;'>Exemple de texte qui change de couleur en fonction de l'instant en cours, pris à $seconds seconde</p>";
            }
            elseif ($seconds > 42 and $seconds <= 48) {
                echo "<p style='color:green;'>Exemple de texte qui change de couleur en fonction de l'instant en cours, pris à $seconds seconde</p>";
            }
            elseif ($seconds > 48 and $seconds <= 54) {
                echo "<p style='color:pink;'>Exemple de texte qui change de couleur en fonction de l'instant en cours, pris à $seconds seconde</p>";
            }
            else {
                echo "<p style='color:yellow;'>Exemple de texte qui change de couleur en fonction de l'instant en cours, pris à $seconds seconde</p>";
            }
         ?>
         <hr>
         <h3 class="w3-text-teal">Structures itératives</h3>
         <?php
            $r = rand(0,255);
            $g = rand(0,255);
            $b = rand(0,255);
         
            for ($i = 0 ; $i <= 46 ; $i++) {
                if ( ($i % 7) == 0){
                    $r = rand(0,255);
                    $g = rand(0,255);
                    $b = rand(0,255);
                }
                echo "<p style='color:rgb($r,$g,$b);'> Voici un exemple.</p>";
            } 
            ?>   
      
         <hr>

         <h2 class="w3-text-teal">3. Définition des tableaux PHP</h2>
         <h3 class="w3-text-teal">Tableaux simples</h3>
         <?php
            // Declaration 1
            $tab_a[0] = "J";
            $tab_a[1] = "E";
            $tab_a[2] = "A";
            $tab_a[3] = "N";
        
            echo "<p>Tableau A = ";
            print_r($tab_a);
           
	        
            // Declaration 2 
            $tab_b = array("H", "E", "N", "R", "I");
            echo "<p>Tableau B = ";
            print_r($tab_b);
            
	        
            // Declaration 3
            $tab_c[] = "F";
            $tab_c[] = "A";
            $tab_c[] = "B";
            $tab_c[] = "R";
            $tab_c[] = "E";
            echo "<p>Tableau C = ";
            print_r($tab_c);
            
         ?>
         <hr>
         <h3 class="w3-text-teal">Tableaux associatifs</h3>
         <?php
            // Declaration 1
            $site_a[0] = "http://fr.wikipedia.org";
            $site_a[1] = "http://www.lemonde.fr";
            $site_a[2] = "http://www.google.com";
            $site_a[3] = "http://www.youtube.com";
            
            $site_b[0] = "Wikipedia";
            $site_b[1] = "Le Monde";
            $site_b[2] = "Google";
            $site_b[3] = "Youtube";
            echo "Sites : ";
            echo "<ul>";
            for ($i = 0 ; $i <= 3 ; $i++) {
                echo "<li><a href='$site_a[$i]'>$site_b[$i]</a></li>";
            }
            echo "</ul>";
           

            // Declaration 2
            $sites = array (
            "Wikipedia" => "http://fr.wikipedia.org",
            "Le Monde" => "http://www.lemonde.fr",
            "Google" => "http://www.google.com",
            "Youtube" => "http://www.youtube.com");
            
            echo "Les sites : <br>";
          
            print_r($sites);
         ?>

            <hr>

         <h2 class="w3-text-teal">Parcours des tableaux</h2>
         <h3 class="w3-text-teal">Tableaux simples</h3>

         <?php
            // Declaration 1
    
            
            $i=0;
            foreach ($tab_a as $c) {
               
                echo "$c";

                $i++;
                if ($i != count($tab_a)) {
                    echo '<span style ="text-decoration : underline;">&times</span>';
                }
                
            }

                    echo '<span style ="word-spacing : 10px;"> </span>';
                    $i=0;
            foreach ($tab_b as $c) {
                echo "$c"; 
                $i++;
                if ($i != count($tab_b)) {
                    echo '<span style ="text-decoration : underline;">&times</span>';
                }
            }

                    echo '<span style ="word-spacing : 10px;"> </span>';
                    $i=0;
            foreach ($tab_c as $c) {
                echo "$c"; 
                $i++;
                if ($i != count($tab_c)) {
                    echo '<span style ="text-decoration : underline;">&times</span>';
                }
                }
         ?>


         <hr>
         <h3 class="w3-text-teal">Tableaux associatifs</h3>

         <?php
            // Declaration 1
            $marques["Mercedes"] = "https://www.mercedes-benz.fr";
            $marques["Volkswagen"] = "https://www.volkswagen.fr";
            $marques["Tesla"] = "https://www.tesla.com";
            $marques["Ferrari"] = "https:/www.ferrari.com";

            echo "<p style ='text-decoration : underline;'>La liste des marques av la boucle while : ";

            echo "<ul>";
            while (list($nom, $site) = each($marques)) {
                echo "<li><a href='$site'>$nom</a></li>";
            }

            echo "</ul>";
            echo "</p>";
            

            echo "<p style ='text-decoration : underline;'>La liste des marques avec foreach : ";

            echo "<ul>";
            foreach ($marques as $nom => $site) {
                echo "<li><a href='$site'>$nom</a></li>";
            }

            echo "</ul>";
            echo "</p>";
            
            # tri selon les clés 
            ksort($marques);
            echo "<p style ='text-decoration : underline;'>La liste des marques triée par nom : ";
            echo "<ul>";

            foreach ($marques as $nom => $site) {
                echo "<li>$nom (<a href=\"$site\">$site</a>)</li>";
            }
            echo "</ul>";
            echo "</p><br>";

         ?>
         </main>
     </body>
</html>
