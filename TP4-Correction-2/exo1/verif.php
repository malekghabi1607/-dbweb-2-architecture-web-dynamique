<?php

function m_mme($sexe){
  if($sexe == "homme"){
    return "M.";
  }
  else{
    return "Mme.";
  }
}

function get_hobbies($hobbies){
  $hobbies_texte = "";
  if($hobbies){
    foreach ($hobbies as $hobbie) {
      $hobbies_texte .= $hobbie.", ";
    }
  }
  return $hobbies_texte;
}

function welcome(){

  if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
    
    $hobbies_texte = "";
    if(isset($_POST['hobbies'])){
      $hobbies_texte = get_hobbies($_POST['hobbies']);  
    }else{
      $hobbies_texte = "rien";
    }
    

    $text = "Bonjour ".m_mme($_POST['sexe'])." ".$_POST["nom"]." ".$_POST["prenom"]." ,vous avez ".$_POST["age"]." ans et vous êtes ".$_POST["profession"].".Vous aimez ".$hobbies_texte." et vous préferéz vous déplacer en ".$_POST["transport"].".";
    
    if (isset($_POST['message']) && $_POST['message'] != "") {
      $text = $text."</br> Nous avons bien noté vos commentaires : ".$_POST["message"].".";
    }
    echo $text;
  }

} 

welcome();  
?>