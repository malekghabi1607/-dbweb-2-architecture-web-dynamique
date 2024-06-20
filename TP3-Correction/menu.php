<nav class="w3-bar w3-margin-bottom w3-theme-d5 w3-cyan">
   
 <?php
        $site_a["Home"] = "index.php?page=Home.php";
        

        $site_a["TP1"] = "index.php?page=TP1.html";
        $site_a["TP2"] = "index.php?page=TP2.html";
        $site_a["TP3-1"] = "index.php?page=TP3-partie1.php";


        $site_a["w3schools"] = "https://www.w3schools.com";
       


        while (list($nom, $site) = each($site_a)) {


                if ($nom=="w3schools") { 
                        echo " <span class='w3-red'> <a href=\"$site\" class='w3-bar-item w3-button'>$nom</a> </span>"; break;
                }

                echo "  <a href=\"$site\" class='w3-bar-item w3-button'>$nom</a>";
               
        
        }
     ?>

</nav>



