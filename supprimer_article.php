<?php
	include('includes/connexion.inc.php');
	include('includes/fonction.inc.php');
	$id = var_get('id');
	if($id)
	{
		$sql = "DELETE FROM articles WHERE id=$id";
		$result = mysql_query($sql);	
		if($result)
			$_SESSION['article']='supprime';
		else
			$_SESSION['article']='erreur';
	}
	header("Location:index.php");
	exit();