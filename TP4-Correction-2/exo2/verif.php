<?php

function age_check(){
  if(isset($_POST['age'])){
    $age = $_POST['age'];
    if ($age < 0 || $age > 130){
      return 0;
    }
    else{
      return 1;
    }
  }
}

function mail_check(){
  if(isset($_POST['email'])){
    $email = $_POST['email'];
    if(!preg_match("/\S+@univ-avignon\.fr/",$email)){
      return 0;
    }
    else{
      return 1;
    }
  }
} 

function pass_check(){
  if(isset($_POST['pass'])){
    $pass = $_POST['pass'];
    $pass2 = $_POST['confirmation'];
    if($pass != $pass2){
      return 0;
    }
    else{
      return 1;
    }
  }
} 
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

    $text = "";

    if(age_check() && mail_check() && pass_check()){

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
    }else{
      $text = "ERREUR! Il faut verifier l'age, le mail et les mots de passes.";
    }
    
    echo $text;
  }

} 

welcome();  
?>