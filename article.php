<?php
	include('includes/haut.inc.php');
	include('includes/connexion.inc.php');
	include('includes/fonction.inc.php');
	$action_label = (var_get('id'))?"Modifier":"Ajouter";
?>
	<script src="soumettre.js" type="text/javascript"></script>
	<h2><?=$action_label?></h2>
<?php
	
	$id = (int)(var_post('id'));
	if($id)
	{
		$titre = $_POST["titre"];
		$texte = $_POST["texte"];	
		$req = "UPDATE articleshelari SET titre='$titre' , texte='$texte' WHERE id=$id " ;
		$result=mysql_query($req);
		echo mysql_error();
		if($result)
			$_SESSION['article']='modifie';
		else
			$_SESSION['article']='erreur';
		header("Location:index.php");
		exit();
	}
	else if(var_get('id'))
	{	

		$titre ='';
		$texte ='';
		$idsecu = $_GET['id'];
		$sql="SELECT * FROM articleshelari WHERE id='".$idsecu."'";
		$que = mysql_query($sql);
		$data = mysql_fetch_array($que);
		extract($data);
		
?>
	<form action ="" method="POST">
	<input type="text" name="titre" value="<?=$titre?>"/>
	<br><textarea name="texte"><?=$data['texte']?></textarea> 
	<input type="hidden" name="id" value="<?=$id?>">
	<div class="form-actions"><input type="submit" value="Modifier" class="btn btn-large btn-primary"/></div>
	</form>
<?php
	}
		else if(var_post("titre")&&var_post("texte")&&isset($_FILES['image']))
	{

		include('includes/connexion.inc.php');
		if($_FILES['image']['error']==0) {
			//Recuperation de l'extension
			$extension_upload = strtolower(substr(strrchr($_FILES['image']['name'], '.')  ,1)  );
			//Nom du fichier avec le repertoire
			$nom="upload/".md5(uniqid(rand(), true)).".".$extension_upload;
			if(move_uploaded_file($_FILES['image']['tmp_name'],$nom))
			{
				$titre=$_POST['titre'];
				$texte=$_POST['texte'];
				//Ajout de l'article dans la table
				$req="INSERT INTO articleshelari VALUES('','$titre','$texte',UNIX_TIMESTAMP(),'$nom')";
				//Modification de la notification
				requete_notif($req,'article','ajoute');
			}
		}
		 header("Location:index.php");
		 exit();
	}
	else
	{
?>
	<form id="formulaire" action="article.php" method="POST" enctype="multipart/form-data">
		<div class="clearfix">
			<label>Titre</label>
			<div class="input">
				<input id="titre" type="text" name="titre"/><BR>
			</div>
		</div>
		<div class="clearfix">
			<label>Texte</label>
			<div class="input">
				<textarea id="texte" name="texte"/></textarea><BR>
			</div>
		</div>
		<div class="clearfix">
			<label>Image :</label>
			<input type="file" name="image" value="Parcourir">
		</div>
		<div class="form-actions">
			<input type="submit" value="Ajouter" class="btn btn-large btn-primary"/>
		</div>

	</form>
<?php
	}
	include('includes/bas.inc.php');
?>