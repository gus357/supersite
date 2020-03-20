<!DOCTYPE html>
<html lang="fr">

<head>
	<title>PHP</title>
	<meta charset="utf-8" />
	<meta name="author" content="gulsu" />
   <link type="text/css" rel="stylesheet" href="php.css" media="screen" />
   <link rel="icon" href="images/php.png" />
</head>

<body>
	<nav class="plan">
		<ol>
			<li class="plan"><a href="index.html">Home</a></li>
		</ol>
	</nav>

	<aside id="presentation">
	<aside id="titre">
	<h1>TD 6</h1>
	</aside>
	
	<h2>Table de Multiplication</h2>
<p>
<?php

    define("DEFAULT_SIZE", 10);
    
    afficherTableMultiplication(5);
    afficherTableMultiplication();
    
   
    function afficherTableMultiplication (int $n = DEFAULT_SIZE) {
        if ($n<1 || $n > 20) {
            $n = DEFAULT_SIZE;
        }
        echo "<table border=1>";
        echo "<thead><tr><th> X </th>";
        for ($colonne = 1 ; $colonne <= $n ; $colonne++ ) {
            echo "<th>".$colonne."</th>";
        }
        echo "</tr></thead><tbody>";
        for ($ligne = 1 ; $ligne <= $n ; $ligne++ ) {
            echo "<tr><th>".$ligne."</th>";
            for ($colonne = 1 ; $colonne <= $n ; $colonne++ ) {
                echo "<td>".($ligne * $colonne)."</td>";
            }
            echo "</tr>";
        }
        echo "</tbody></table>";
    } // fin de afficherTableMultiplication
    
?>
<p>
	
	<h2>Boucle PHP </h2>
	<p>
	<table border=1>
		<?php
			define("MAX",50);
			function conversion($nbr){
				echo'<tr>
				<td style="backgroud-color: turquoise;"> binaire</td>
				<td style="backgroud-color: turquoise;"> octal</td>
				<td style="backgroud-color: turquoise;"> décimal</td>
				<td style="backgroud-color: turquoise;"> hexadecimal</td>
				</tr>';
				
				for($i=0;$i<=MAX;$i++){
					$binaire=decbin($i);
					echo'<tr><td>'.$binaire.'</td>';
					$octal=decoct($i);
					echo'<td>'.$octal.'</td>';
					$decimal=$i;
					echo'<td>'.$decimal.'</td>';
					$hexa=dechex($i);
					echo'<td>'.$hexa.'</td>';
					echo'</tr>';			
				} 			
			}
			conversion(17);
		?>	
	</table>
	</p>
	
	<h2>table d'ASCII </h2>
	<p>
	<?php

    /**
     * affiche la table ASCII (American Standard Code for Information Interchange) entre 20 et 127
     */    
    function show_table_ascii() {
        echo "<table border=1>\n";
        echo "<tr><th> &#x00A0; </th>";
        for ($colonne = 0 ; $colonne <= 0xF ; $colonne++ ) {
            echo "<th>".strtoupper(dechex($colonne))."</th>";
        }
        echo "</tr>\n";
        for ($ligne = 2 ; $ligne <= 7 ; $ligne++ ) {
            echo "<tr><th>".$ligne."</th>";
            for ($colonne = 0 ; $colonne <= 0xF ; $colonne++ ) {
                $carValue = $ligne * 16 + $colonne;
                $class="";
                if ($carValue >= 0x30 && $carValue <= 0x39) {
                    $class = " class=\"chiffre\"";
                }
                if ($carValue >= 0x41 && $carValue <= 0x5A) {
                    $class = " class=\"majuscule\"";
                }
                if ($carValue >= 0x61 && $carValue <= 0x7A) {
                    $class = " class=\"minuscule\"";
                }
                echo "<td".$class.">".($carValue == 127 ? "&#x00A0;" : htmlspecialchars(chr($carValue)))."</td>";
            }
            echo "</tr>\n";
        }
        echo "</table>\n";
    }
    
    show_table_ascii();

?>
	
	
	</p>
			
	
	</aside>
</body>
</html>