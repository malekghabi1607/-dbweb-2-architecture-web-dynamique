<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style type="text/css">
    .error{
     background-color : #B22222;
   }
 </style>
 <script language="Javascript">
  function ExitModal(event){
    var id_element = event.target.id;
    if(id_element == 'id01'){
      document.getElementById('id01').style.display='none';
    }
  }
  function AddOption() {
    var select = document.getElementById("profession");
    var new_opt = document.createElement("option");
    new_opt.value = document.getElementById('autre').value;
    new_opt.text = document.getElementById('autre').value;
    new_opt.selected = true;
    select.add(new_opt);
  }

  function VerifAll(){
    document.getElementById("contact").submit();
  }

</script>
<title>Correction DBWEB 2 - TP 1</title>
</head>

<body>
  <header class="w3-bar w3-teal w3-padding">
    <h1 class="w3-bar-item">Bienvenue sur ma page</h1>
    <button onclick="document.getElementById('id01').style.display='block'" style="position: relative; left:  50%"  class="w3-btn w3-teal">Contact</button>
  </br>
  <h3 class="w3-bar-item"><?php echo welcome() ?></h3>

</header>
<main  onclick="ExitModal(event)">
  <div class="w3-container w3-content">
    <div id="id01" class="w3-modal" style="display:block">

      <section  class="w3-modal-content w3-card-4  w3-display-container">
        <div class="w3-container w3-teal">
          <h2>Formulaire de contact</h2>
        </div>
        <form  method="POST" class="w3-container" id="contact" action="<?php echo $_SERVER['PHP_SELF']?>">
          <p>
            <label for="nom" class="w3-text-teal" >Nom</label>
            <input type="text" name="nom" id="nom" class="w3-input"  value="<?php if ( isset( $_POST[ 'nom' ] ) ) echo $_POST[ 'nom' ]; else echo 'Votre nom'?>"  onfocus="this.value=''"/>
          </p>
          <p>
            <label for="prenom" class="w3-text-teal">Prénom</label>
            <input type="text" name="prenom" id="prenom" class="w3-input" value="<?php if ( isset( $_POST[ 'prenom' ] ) ) echo $_POST[ 'prenom' ]; else echo 'Votre prénom'?>" onfocus="this.value=''"/>
          </p>
          <p>
            <label for="age" class="w3-text-teal">Âge</label>
            <input type="text" name="age" id="age" class="w3-input <?php if ( $_SERVER['REQUEST_METHOD'] == 'POST' ){if(!age_check()) echo 'error';}?>"  onkeypress="if(event.which==13){VerifAge()}" value="<?php if ( isset( $_POST[ 'age' ] ) ) echo $_POST[ 'age' ]?>" />
          </p>
          <p>
            <label for="email" class="w3-text-teal">Adresse e-mail</label>
            <input type="text" name="email" id="email" class="w3-input <?php if ( $_SERVER['REQUEST_METHOD'] == 'POST' ){if(!mail_check()) echo 'error';}?>"   onkeypress="if(event.which==13){VerifMail()}"/  value="<?php if ( isset( $_POST[ 'email' ] ) ) echo $_POST[ 'email' ]?>" />
          </p>
          <p>
            <label for="pass" class="w3-text-teal">Mot de passe</label>
            <input type="password" name="pass" id="pass" class="w3-input <?php if ( $_SERVER['REQUEST_METHOD'] == 'POST' ){if(!pass_check()) echo 'error';}?>" value="<?php if ( isset( $_POST[ 'pass' ] ) ) echo $_POST[ 'pass' ]?>" /> 
          </p>
          <p>
            <label for="confirmation" class="w3-text-teal">Retapez votre mot de passe</label>
            <input type="password" name="confirmation" id="confirmation" class="w3-input <?php if ( $_SERVER['REQUEST_METHOD'] == 'POST' ){if(!pass_check()) echo 'error';}?>" value="<?php if ( isset( $_POST[ 'confirmation' ] ) ) echo $_POST[ 'confirmation' ]?>" />
          </p>
          <p><span class="w3-text-teal w3-show-block">Sexe</span>
            <span class="w3-show-block">
              <input type="radio" name="sexe" value="homme" id="homme" class="w3-radio" <?php if ( isset( $_POST[ 'sexe' ] ) && $_POST[ 'sexe' ] == 'homme'  ) echo 'checked'; ?>/>
              <label for="homme">Homme</label>
            </span>
            <span class="w3-show-block">
              <input type="radio" name="sexe" value="femme" id="femme" class="w3-radio" <?php if ( (isset( $_POST[ 'sexe' ] ) && $_POST[ 'sexe' ] == 'femme') || !isset( $_POST[ 'sexe' ]) ) echo 'checked'; ?>/>
              <label for="femme">Femme</label>
            </span>
          </p>

          <p><span class="w3-text-teal w3-show-block">Hobbies</span>
            <span class="w3-half">
              <span class="w3-show-block">
                <input type="checkbox" name="hobbies[]" value="Cinéma" id="cinema" class="w3-check" <?php if ( isset( $_POST[ 'hobbies' ]) AND in_array("Cinéma", $_POST[ 'hobbies' ])) echo 'checked'; ?>/>
                <label for="cinema">Cinéma</label>
              </span>
              <span class="w3-show-block">
                <input type="checkbox" name="hobbies[]" value="Équitation" id="equitation" class="w3-check" <?php if ( isset( $_POST[ 'hobbies' ]) AND in_array("Équitation", $_POST[ 'hobbies' ])) echo 'checked'; ?>/>
                <label for="equitation">Équitation</label>
              </span>
              <span class="w3-show-block">
                <input type="checkbox" name="hobbies[]" value="Planche à voile" id="planche" class="w3-check" <?php if ( isset( $_POST[ 'hobbies' ]) AND in_array("Planche à voile", $_POST[ 'hobbies' ])) echo 'checked'; ?>/>
                <label for="planche">Planche à voile</label>
              </span>
            </span>
            <span class="w3-half">
              <span class="w3-show-block">
                <input type="checkbox" name="hobbies[]" value="Musique" id="musique" class="w3-check" <?php if ( isset( $_POST[ 'hobbies' ]) AND in_array("Musique", $_POST[ 'hobbies' ])) echo 'checked'; ?>/>
                <label for="musique">Musique</label>
              </span>
              <span class="w3-show-block">
                <input type="checkbox" name="hobbies[]" value="Théâtre" id="theatre" class="w3-check" <?php if ( isset( $_POST[ 'hobbies' ]) AND in_array("Théâtre", $_POST[ 'hobbies' ])) echo 'checked'; ?>/>
                <label for="theatre">Théâtre</label>
              </span>
              <span class="w3-show-block">
                <input type="checkbox" name="hobbies[]" value="Rien" id="rien" class="w3-check" <?php if ( isset( $_POST[ 'hobbies' ]) AND in_array("Rien", $_POST[ 'hobbies' ])) echo 'checked'; ?>/>
                <label for="rien">Rien</label>
              </span>
            </span>
          </p>
          <p>
            <label for="profession" class="w3-text-teal">Profession</label>
            <select name="profession" id="profession" class="w3-select">
              <option value="maitre"  <?php if ( isset($_POST[ 'profession']) && $_POST['profession'] == 'maitre') echo 'selected'; ?>>Maître(sse) de l'univers</option>
              <option value="etudiant"  <?php if ( isset($_POST[ 'profession']) && $_POST['profession'] == 'etudiant') echo 'selected'; ?>>Étudiant(e)</option>
              <option value="elisabeth" <?php if ( isset($_POST[ 'profession']) && $_POST['profession'] == 'elisabeth') echo 'selected'; ?>>La Reine Elisabeth II</option>
              <option value="norris" <?php if ( isset($_POST[ 'profession']) && $_POST['profession'] == 'norris') echo 'selected'; ?>>Chuck Norris</option>
            </select>

            <label for="autre" class="w3-text-teal">Autre, précisez</label>
            <input type="text" name="autre" id="autre" class="w3-input"/>
            <button type="button" class="w3-btn w3-teal" onclick="AddOption()">Ajout</button>
          </p>
          <p>
            <label for="transport" class="w3-text-teal">Moyen de transport</label>
            <select name="transport" id="transport" size="5" class="w3-select">
              <option value="voiture" <?php if ( (isset($_POST[ 'transport']) && $_POST['transport'] == 'voiture') || !isset($_POST[ 'transport']) ) echo 'selected'; ?>>Voiture</option>
              <option value="train" <?php if ( isset($_POST[ 'transport']) && $_POST['transport'] == 'train') echo 'selected'; ?>>Train</option>
              <option value="velo" <?php if ( isset($_POST[ 'transport']) && $_POST['transport'] == 'velo') echo 'selected'; ?>>Vélo</option>
              <option value="bus" <?php if ( isset($_POST[ 'transport']) && $_POST['transport'] == 'bus') echo 'selected'; ?>>Bus</option>
              <option value="autre" <?php if ( isset($_POST[ 'transport']) && $_POST['transport'] == 'autre') echo 'selected'; ?>>Autre</option>
            </select>
          </p>
          <p>
            <label for="message" class="w3-text-teal">Commentaires</label>
            <textarea name="message" id="message" rows="3" class="w3-input"><?php if ( isset($_POST[ 'message'])) echo $_POST['message'];?></textarea>
          </p>
          <p>
            <button type="button" class="w3-btn w3-teal" onclick="VerifAll()">Envoyer</button>
            <button type="reset" class="w3-btn w3-teal">Initialiser</button>
          </p>
        </form>
      </section>
    </div>
  </div>
</main>
</body>
</html>

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

function m_mme(){
  if($_POST['sexe'] == "homme"){
    return "M.";
  }
  else{
    return "Mme.";
  }
}

function get_hobbies(){
  $hobbies = "";
  if(isset($_POST['hobbies'])){
    foreach ($_POST['hobbies'] as $hobbie) {
      $hobbies .= $hobbie.", ";
    }
  }
  return $hobbies;
}

function welcome(){
  if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
    $pass_ok = pass_check();
    $mail_ok = mail_check();
    $age_ok = age_check();
    $hobbies = get_hobbies();

    if($pass_ok && $mail_ok && $age_ok){
      $text = "Bonjour ".m_mme()." ".$_POST["nom"]." ".$_POST["prenom"]." ,vous avez ".$_POST["age"]." ans et vous êtes ".$_POST["profession"].".Vous aimez ".$hobbies." et vous préferéz vous déplacer en ".$_POST["transport"].".";
      if (isset($_POST['message'])) {
        $text .= "</br>Nous avons bien noté vos commentaires : ".$_POST["message"].".";
      }
      return $text;
    }
  }
}   
?>
