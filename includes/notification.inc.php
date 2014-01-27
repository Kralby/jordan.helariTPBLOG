<?php
$croix="<a href='#' class='cacher_notif'>&times;</a>";
if(isset($_SESSION['article']))
{


	switch($_SESSION['article'])
	{
		case 'ajoute':
			echo "<div class:'alert_success' id='notif' >Ajout réalisé $croix</div>" ;
			break ;
		case 'modifie':
			echo "<div class:'alert_info' id='notif' >Modification effectué $croix</div>" ;
			break ;
		case 'supprime':
			echo "<div class:'alert_success' id='notif' >Suppression faite $croix</div>" ;
			break ;
		case 'erreur' :
			echo "<div class:'alert_error' id='notif' >Il y a eu une erreur $croix</div>" ;
			break ; 
	}
	unset($_SESSION['article']);
	
}
echo "<div id='notif'><span></span>$croix</div>";
