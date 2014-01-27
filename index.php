<?php

		include($_SERVER['DOCUMENT_ROOT']."/Modulephp/tpl/Smarty.class.php");
		$smarty = new Smarty();
		include_once($_SERVER['DOCUMENT_ROOT'].'/Modulephp/includes/connexion.inc.php');
		include_once($_SERVER['DOCUMENT_ROOT'].'/Modulephp/includes/haut.inc.php');
		include_once($_SERVER['DOCUMENT_ROOT'].'/Modulephp/includes/fonction.inc.php'); 
		
	$page=(var_get('p'))?var_get('p'):1;
	$app=2;$i=0;
	$debut = (($page-1)*$app) ;
	$rech="";

	echo '<br>';
	// var_dump($_COOKIE);
	if(var_get('r'))
	{
		$rech = $_GET['r'];
		$req = mysql_query("SELECT * FROM articleshelari WHERE titre LIKE '%$rech%'");
		$recount = mysql_query("SELECT COUNT(*) AS total FROM articleshelari WHERE titre LIKE '%$rech%'");
		$countdata = mysql_fetch_array($recount);
		$smarty->assign('total',$countdata['total']);
	}
	else
	{
		$req = mysql_query("SELECT * FROM articleshelari ORDER BY publie DESC LIMIT $debut,$app");
		echo mysql_error();
		$recount = mysql_query("SELECT COUNT(*) AS total FROM articleshelari");
		$countdata = mysql_fetch_array($recount);
		$smarty->assign('total',$countdata['total']);
		$nbarticle= $countdata['total'];
		$nbpage = ($nbarticle>0)?ceil($nbarticle/$app):1;
	}
	$list_news=array();
	while($data = mysql_fetch_array($req))
	{
		$list_news[]=$data;
		$id=$data['id'];
		$filename=dirname(__FILE__)."/data/images/$id.jpeg";
		$data['image']=(file_exists("$filename"))?"$filename":false;
		$all_data=$data;
		
	/*
	html_special_chars();
	'<' => &lt;
	'>' => &gt;
	<!-- {if $data.image}
		{<img src="{$data.image}" width=200> dans le index.tpl-->
	*/
	}
	$smarty->assign('connect',$connect);
	$smarty->assign('list_news',$list_news);
	$smarty->assign('rech',$rech);
	$smarty->assign('page',$page);
	$smarty->assign('nbpage',$nbpage);
	$smarty->display("tpl/index.html");
	
	include('includes/bas.inc.php');
?>