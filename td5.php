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
	<h1>TD 5</h1>
	</aside>
	
	<p>Cette page me permet d'essayer une première boucle for avec le php</p>
	
	<h2>Exercice 0: PHPinfo</h2>
	<p><a href="test.php">phpinfo</a></p>
	
	<h2>Exercice 1: Boucle</h2>
	<p>
	<?php
	echo"<ul>";
		for($i=0;$i<19;$i++){
			echo"<li>hello numero".$i."</li>";
			}
			echo"</lu>";
		?>
		</p>
		
	<h2>Exercice 2:  La Date</h2>
	<p>
	<?php
		echo date('l jS \of F Y h:i:s A');
	?>
	</p>
	
	<h2>Exercice 3: Chiffre Hexadécimaux</h2>
<p>
<?php

    echo "<table border=1>";
    echo "\t<thead><tr>\n";
    for ($chiffre = 0 ; $chiffre <= 0xF ; $chiffre++ ) {
        echo "\t\t<th>".dechex($chiffre)."</th>\n";
    }
    echo "\t</tr></thead>\n";
    echo "\t<tbody><tr>\n";
    for ($chiffre = 0 ; $chiffre <= 0xF ; $chiffre++ ) {
        printf ("\t\t<td>%X</td>\n", $chiffre);
    }
    echo "\t</tr></tbody>\n";
    echo "</table>\n";

?>
</p>
	
	<h2>Exercice 4: La Table de Multiplication</h2>
	
	<p>
		<?php

    echo "<table border=1><thead>";
    echo "<tr><th> X </th>";
    for ($colonne = 1 ; $colonne <= 10 ; $colonne++ ) {
        echo "<th>".$colonne."</th>";
    }
    echo "</tr></thead><tbody>";
    for ($ligne = 1 ; $ligne <= 10 ; $ligne++ ) {
        echo "<tr><th>".$ligne."</th>";
        for ($colonne = 1 ; $colonne <= 10 ; $colonne++ ) {
            echo "<td>".($ligne * $colonne)."</td>";
        }
        echo "</tr>\n";
    }
    echo "</tbody></table>\n";

?>
</p>


	<h2>Exercice 5: Conversion ASCII </h2>
		<p>
			<?php

    echo "<dl style=\"padding:1em;\">\n";
    echo "\t<dt> dechex(65) (int en base 10) </dt><dd> = ".dechex(65)." (string en base 16)</dd>\n";
    echo "\t<dt> hexdec('0x41') (string en base 16) </dt><dd> = ".hexdec('0x41')." (int en base 10)</dd>\n";
    echo "\t<dt> chr(65) (int en base 10) </dt><dd> = '".chr(65)."' (string caractère ASCII)</dd>\n";
    echo "\t<dt> chr(0x41) (int en base 16) </dt><dd> = '".chr(0x41)."' (string caractère ASCII)</dd>\n";
    echo "\t<dt> ord('A') (string caractère ASCII) </dt><dd> = ".ord('A')." (int en base 10)</dd>\n";
    echo "</dl>\n";

?>
		</p>
		
	<h2>Exercice 6: Boucle PHP</h2>
	<p>
	<table>
		<?php

    $s = sprintf("<table border=1><thead><tr><th>binaire</th><th>octal</th><th>d&eacute;cimal</th><th>hexad&eacute;cimal</th></tr></thead><tbody>");
    for($i = 0 ; $i <= 17 ; $i++) {
        $s .= sprintf("<tr><td>%08b</td><td>%02o</td><td>%02d</td><td>%02X</td></tr>", $i, $i, $i, $i);
        
    }
    $s .= sprintf("</tbody></table>");
    
    echo $s;

?>
	</p>
	</aside>
</body>
</html>