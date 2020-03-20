<?php
	define("MAX", 17);
?>

<?php
	function color() {
		$p = 0;
		echo '<table>';
		echo "<table border=1>" ;
		for($u = 0; $u <=255; $u+=51) {
			echo '<tr>';
			
			for($i = 0; $i <=255; $i+=51) {
				$p++;
				for($a = 0; $a<=255; $a+=51) {
					
					$color = sprintf("#%02X%02X%02X", $u, $i, $a);
								
					echo '<td style = "background-color : rgb(' . $u . ',' . $i .',' . $a . ');">' . $color .'</td>';
								
					echo "\n";
				}
				
				if($p%2 == 0) {
					echo '</tr>';
					echo "\n";
					echo '<tr>';
				}	
			}	
		}
					
		echo '</table>';
	}
			
?>
			
<?php

	function multiplication($p = 10) {
		echo '<table>';
		echo "<table border=1>" ;
			echo '<tr>'."\n";
				echo '<th class = "cap"> X </th>'."\n";
				for($i = 1; $i <=$p; $i ++) {
					echo '<th class = "cap">' . $i . '</th>'."\n";
				}
			echo '</tr>'."\n";
				
			for($i = 1; $i<=$p; $i++) {
				echo '<tr>'."\n";
				echo '<th class = "cap">' . $i . '</th>'."\n";
				for($j = 1; $j<=$p; $j++) {
					$k = $j * $i;
					echo '<td class = "im">' . $k . '</td>'."\n";
				}
				echo '</tr>'."\n";	
			}
		
		echo '</table>';
	}
?>
			
<?php
	function base($p = MAX) {
		if($p>=1 && $p<=MAX) {
			echo '<table>';
			echo "<table border=1>" ;
				echo '<tr>'."\n";
					echo '<th class = "cap"> binaire </th>'."\n";
					echo '<th class = "cap"> octal </th>'."\n";
					echo '<th class = "cap"> décimal </th>'."\n";
					echo '<th class = "cap"> hexadécimal </th>'."\n";
				echo '</tr>'."\n";
				
				for($i = 0; $i<=$p; $i++) {
					$k = decoct($i);
					$l = sprintf( "%08d", decbin($i));
					$m = dechex($i);
					
					echo '<tr>'."\n";
						echo '<td class = "im">' . $l . '</td>'."\n";
						echo '<td class = "im">' . $k . '</td>'."\n";
						echo '<td class = "im">' . $i . '</td>'."\n";
						echo '<td class = "im">' . $m . '</td>'."\n";
					echo '</tr>'."\n";
				}
			echo '</table>';
		}
		
		else {
			echo "La fonction n'est pas comprise entre 1 et 17";
		}
	}
?>

<?php
	function ascii() {
		echo "<table>";
		echo "<table border=1>" ;
		echo '<tr>'."\n";
			echo '<th class = "cap">   </th>'."\n";
			for($i = 0; $i <16; $i ++) {
				$k = dechex($i);
				echo '<th class = "cap">' . $k . '</th>'."\n";
			}
		echo '</tr>'."\n";
		
		for($i = 2; $i<=7; $i++) {
			echo '<tr>'."\n"; 
			echo '<th >' . $i . '</th>'."\n";
			for($j = 0; $j<16; $j++) {
				$u = chr(16*$i+$j);
				$p = 16*$i+$j;
				
				if($p == 60) {
					echo '<td>' . "&lt;" . '</td>'."\n";
				}
				
				else if($p == 127) {
					echo '<td>' . '<small> DEL </small>' . '</td>'."\n";
				}
				
				else if($p>=48 && $p<=57) {
					echo '<td style="color: red">' . $u . '</td>'."\n";
				}
				
				else if ($p>=65 && $p<=90){
					echo '<td style= "color : green">' . $u . '</td>'."\n";
				}
				
				else if ($p>=97 && $p<=122){
					echo '<td style="color: blue">' . $u . '</td>'."\n";
				}
				
				else {
					echo '<td>' . $u . '</td>'."\n";
				}
			}
			echo '</tr>'."\n";
		}
		
		echo '</table>';
		
	}
?>

<?php
	function planete($i = 6) {
		if($i== 6) {
			$ret= '<table>';

				$ret.= '<tr>';
					$ret.= '<td class = "im">Mercure</td>';
				$ret.= '</tr>';
				$ret.= '<tr>';
					$ret.= '<td class = "im">Venus</td>';
				$ret.= '</tr>';
				$ret.= '<tr>';
					$ret.= '<td class = "im">Terre</td>';
				$ret.= '</tr>';
				$ret.='<tr>';
					$ret.= '<td class = "im">Mars</td>';
				$ret.= '</tr>';
				$ret.= '<tr>';
					$ret.= '<td class = "im">Jupiter</td>';
				$ret.= '</tr>';
				$ret.= '<tr>';
					$ret.= '<td class = "im">Saturne</td>';
				$ret.= '</tr>';	
				$ret.= '<tr>';
					$ret.= '<td class = "im">Uranus</td>';
				$ret.= '</tr>';
				$ret.= '<tr>';				
					$ret.= '<td class = "im">Neptune</td>';
				$ret.= '</tr>';
			$ret.= '</table>';
			
			return $ret;
		}
		
		else {
			$ret= '<table>';
				$ret.= '<tr>';
					$ret.= '<td class = "im">Mercure</td>';
					$ret.= '<td class = "im">Venus</td>';
					$ret.= '<td class = "im">Terre</td>';
					$ret.= '<td class = "im">Mars</td>';
					$ret.= '<td class = "im">Jupiter</td>';
					$ret.= '<td class = "im">Saturne</td>';
					$ret.= '<td class = "im">Uranus</td>';
					$ret.= '<td class = "im">Neptune</td>';
					
				$ret.= '</tr>';
			$ret.= '</table>';
			
			return $ret;
		}
	}
	
	

?>
		
<?php
	function js() {
		echo "<table border=1>" ;
		/* $hey = array(
			array(
				'Lundi', 
				'Mardi', 
				'Mercredi', 
				'Jeudi', 
				'Vendredi', 
				'Samedi', 
				'Dimanche',
			), 
			
			array(
				'Monday', 
				'Tuesday', 
				'Wednesday', 
				'Thursday', 
				'Friday', 
				'Saturday', 
				'Sunday',
			),
			
			array(
				'Janvier', 
				'Février', 
				'Mars', 
				'Avril', 
				'Mai', 
				'Juin', 
				'Juillet', 
				'Aout', 
				'Septembre', 
				'Octobre', 
				'Novembre', 
				'Décembre',
			),
			
			array(
				'January', 
				'February', 
				'March', 
				'April', 
				'May', 
				'June', 
				'July', 
				'August', 
				'September', 
				'October', 
				'November', 
				'December'
			)
			
		);
		
		print_r($hey); */		
		
		
		$jfr = array('Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche');
		$jen = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');

		$mfr = array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
		$men = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
		
		/* echo '<table>';
			echo '<tr>'; */
				/* echo '<td>' . */ print_r($jfr)/*  . '</td>' */;
				/* echo '<td>' . */ print_r($jen) /* . '</td>' */;
				/* echo '<td>' . */ print_r($mfr) /* . '</td>' */;
				/* echo '<td>' . */ print_r($men) /* . '</td>' */;
			/* echo '</tr>';
		echo '</table>'; */
	}
?>

<?php
	function getbrowser() {
		$user_agent = getenv("HTTP_USER_AGENT");
		return $user_agent;
	}
?>

<?php

	
	function multiexplode ($delimiters,$string) {
		$ready = str_replace($delimiters, $delimiters[0], $string);
		$launch = explode($delimiters[0], $ready);
		return  $launch;
	}


	function site($a) {
		$piece = explode(".", $a);
		$slash = explode(":", $a);
		$jsp = multiexplode(array("/", "."), $a);
		
		
		$tab1 = [
			"protocol" => $slash[0], 
			"host" => $jsp[2],
			"domain" => $piece[1],
			"tld" => $piece[2],
		];
		
		/* print_r($tab1); */
		
		echo '<table>';
		echo '<tr>';
		echo $a;
		echo '</tr>';
		echo '<tr>';
		echo '<td> Protocol : ' . $tab1['protocol'];
		echo '</tr>';
		echo '<tr>';
		echo '<td> Host : ' . $tab1['host'];
		echo '</tr>';
		echo '<tr>';
		echo '<td> Domain : ' . $tab1['domain'];
		echo '</tr>';
		echo '<tr>';
		echo '<td> TLD : ' . $tab1['tld'];
		echo '</tr>';
		echo '</table>';
	}
?>