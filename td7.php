<body>

	<?php
		include 'header.inc.php';
		include 'fonction.inc.php';
		include 'util.inc.php';
	?>

<nav class="plan">
		<ol>
			<li class="plan"><a href="index.html">Home</a></li>
		</ol>
	</nav>
	
<aside id="presentation">
	
	<h1>Exercices PHP</h1>
	<h2>Palette de couleur</h2>
	<p>
		<?php
			color();	
		?>
	</p>
	
	<h2>Table de multiplication</h2>
	
	<?php
		multiplication();
	?>	
	
	<h2>Boucle PHP</h2>
	
	<?php
		base(17);
	?>	
	
	<h2>ASCII</h2>
	
	<?php
		ascii();
	?>	
	
	<h2>Planète</h2>

	<?php
		echo planete(6);
	?>
		
	<h2>Date</h2>

	<?php
		echo calendrier("fr")
	?>

	<h2>Navigateur</h2>

	



<?php
$user_agent = getenv("HTTP_USER_AGENT");

if (strpos($user_agent, "Win") !== FALSE)
    $os = "Windows";
elseif ((strpos($user_agent, "Mac") !== FALSE) || (strpos($user_agent, "PPC") !== FALSE))
    $os = "Mac";
elseif (strpos($user_agent, "Linux") !== FALSE)
    $os = "Linux";
elseif (strpos($user_agent, "FreeBSD") !== FALSE)
    $os = "FreeBSD";
elseif (strpos($user_agent, "SunOS") !== FALSE)
    $os = "SunOS";
elseif (strpos($user_agent, "IRIX") !== FALSE)
    $os = "IRIX";
elseif (strpos($user_agent, "BeOS") !== FALSE)
    $os = "BeOS";
elseif (strpos($user_agent, "OS/2") !== FALSE)
    $os = "OS/2";
elseif (strpos($user_agent, "AIX") !== FALSE)
    $os = "AIX";
else
    $os = "Autre";
/*** Après on fait ce qu'on souhaite de l'information :
* affichage, stockage dans une base de données ...
**/
echo $os;

	?>
	
	
	
	<h2>Site</h2>

	<?php
		site("http://www.u-cergy.fr");
	?>
	</aside>
</body>

