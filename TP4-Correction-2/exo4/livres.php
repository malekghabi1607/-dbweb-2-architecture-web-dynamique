<!doctype html>
<html>

	<head>
		
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-orange.css">
	</head>
	<body>
		<div class="w3-container w3-theme-l3">
		<div class="w3-row-padding">
  		<div class="w3-half">
		<?php

			$fichier = fopen( 'livres.txt', 'r' );
   			while ( !feof( $fichier ) )
   				$livres[] = explode( '|', trim( fgets( $fichier ) ) );
   			fclose( $fichier );

			echo '<form class="w3-section" action="livres.php" method="post"><select class="w3-select w3-border w3-theme-light" name="id">';
			echo '<option value="*">*</option>';
			foreach( $livres as $id => $livre )
				echo '<option value="'.$id.'">'.$livre[ 2 ].'</option>';
			echo '</select>'
		?>
		</div>
		<div class="w3-half">
			<input class="w3-button w3-theme-l1 w3-block" type="submit" value="Obtenir les informations">
			</form>
		</div>
		</div>
		<div class="w3-container ">
		<table class="w3-table-all">
			<thead>
				<tr class="w3-theme-d3">
					<th>Prénom</th>
					<th>Nom</th>
					<th>Titre</th>
					<th>Parution</th>
					<th>Pages</th>
					<th>Avis</th>
				</tr>
			</thead>
		<?php
	   		if ( isset( $_POST[ 'id' ] ) ) {
   				
   				foreach( $livres as $id => $livre ) {
   					if ($_POST[ 'id' ] == '*' OR $_POST[ 'id' ] == $id) {
   						echo "<tr>\n";
   						foreach ( $livre as $champ )
   							echo "<td> $champ </td>\n";
   						echo "</tr>\n";
   					}
   				}
   				
   			}
   		?>

		</table>
		</div>
	</body>
</html>
