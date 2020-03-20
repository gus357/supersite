<body>
<nav class="plan">
		<ol>
			<li class="plan"><a href="index.html">Home</a></li>
		</ol>
	</nav>
	
<aside id="presentation">

<?php
	include 'header.inc.php';
	include 'fonction.inc.php';
?>

<h1>TD 8 </h1>

<?php
	function chMode($rep){
		$user = (int)$rep/100;
		$b = (int)$rep%100;
		$group = (int)$b/10;
		$others = (int)$b%10;
		
		$tab = array(
			0 => "---",
			1 => "--x",
			2 => "-w-",
			3 => "-wx",
			4 => "r--",
			5 => "r-x",
			6 => "rw-",
			7 => "rwx",
		);
		
		echo $rep . "=&gt;" . $tab[$user] . " " . $tab[$group]. " " . $tab[$others];
		
	}
?>


<?php

if(!isset($_GET['mois'])) $num_mois = date("n"); else $num_mois = $_GET['mois'];
if(!isset($_GET['annee'])) $num_an = date("Y"); else $num_an = $_GET['annee'];


if($num_mois < 1) { $num_mois = 12; $num_an = $num_an - 1; }
elseif($num_mois > 12) {	$num_mois = 1; $num_an = $num_an + 1; }


$int_nbj = date("t", mktime(0,0,0,$num_mois,1,$num_an));
$int_premj = date("w",mktime(0,0,0,$num_mois,1,$num_an));


$tab_jours = array("","Lu","Ma","Me","Je","Ve","Sa","Di");
$tab_mois = array("","Janvier","Fevrier","Mars","Avril","Mai","Juin","Juillet","Aout","Septembre","Octobre","Novembre","Decembre");

$int_nbjAV = date("t", mktime(0,0,0,($num_mois-1<1)?12:$num_mois-1,1,$num_an)); // nb de jours du moi d'avant
$int_nbjAP = date("t", mktime(0,0,0,($num_mois+1>12)?1:$num_mois+1,1,$num_an)); // b de jours du mois d'apres


$tab_cal = array(array(),array(),array(),array(),array(),array()); 
$int_premj = ($int_premj == 0)?7:$int_premj;
$t = 1; $p = "";
for($i=0;$i<6;$i++) {
	for($j=0;$j<7;$j++) {
		if($j+1 == $int_premj && $t == 1) { $tab_cal[$i][$j] = $t; $t++; } // on stocke le premier jour du mois
		elseif($t > 1 && $t <= $int_nbj) { $tab_cal[$i][$j] = $p.$t; $t++; } // on incremente a chaque fois...
		elseif($t > $int_nbj) { $p="*"; $tab_cal[$i][$j] = $p."1"; $t = 2; } // on a mis tout les numeros de ce mois, on commence a mettre ceux du suivant
		elseif($t == 1) { $tab_cal[$i][$j] = "*".($int_nbjAV-($int_premj-($j+1))+1); } // on a pas encore mis les num du mois, on met ceux de celui d'avant
	}
}
?>




<h2>Exercice 2 : chmod</h2>

<?php
	chMode(254);
?>

<h2>Exercice 4: Calendrier </h2>

<table border=1>
	<tr><td colspan="7" align="center">
	<a href="calendrier.php?mois=
	<?php 
		echo $num_mois-1; 
	?>
	&amp;
	annee=
	<?php 
		echo $num_an; 
	?>
	">
	</a>
	&nbsp;
	&nbsp;
	<?php 
	echo $tab_mois[$num_mois];  
	?>
	&nbsp;
	&nbsp;
	<a href="calendrier.php?mois=
	<?php 
	echo $num_mois+1; 
	?>
	&amp;
	annee=
	<?php 
	echo $num_an; 
	?>"
	</a>
	</td>
	</tr>
	<tr><td colspan="7" align="center">
	<a href="calendrier.php?mois=
	<?php echo $num_mois; 
	?>
	&amp;
	annee=
	<?php echo $num_an-1; ?>">
	</a>
	&nbsp;
	&nbsp;
	<?php echo $num_an;  ?>
	&nbsp;
	&nbsp;
	<a href="calendrier.php?mois=
	<?php echo $num_mois; ?>&amp;annee=<?php echo $num_an+1; ?>"</a></td></tr>
	<?php
	echo'<tr>';
	for($i = 1; $i <= 7; $i++){
		echo('<td>'.$tab_jours[$i].'</td>');
	}
	echo'</tr>';

	for($i=0;$i<6;$i++) {
		echo "<tr>";
		for($j=0;$j<7;$j++) {
			echo "<td".(($num_mois == date("n") && $num_an == date("Y") && $tab_cal[$i][$j] == date("j"))?' style="color: #FFFFFF; background-color: #000000;"':null).">".((strpos($tab_cal[$i][$j],"*")!==false)?'<font color="#aaaaaa">'.str_replace("*","",$tab_cal[$i][$j]).'</font>':$tab_cal[$i][$j])."</td>";
		}
		echo "</tr>";
	}
	?>
	
</table>
</aside>
</body>