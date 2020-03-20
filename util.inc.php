<?php
	function calendrier($s) {
		
		
		if($s == "en") {
			return date('l F j Y');
		}
		
		else if($s == "fr") {
			$jfr = array('Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche');
			$jen = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
			$mfr = array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
			$men = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
			return str_replace($men, $mfr, str_replace($jen, $jfr, date('l j F Y') ) );
			
		}
		
	}
?>=