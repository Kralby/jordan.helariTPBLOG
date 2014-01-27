<?php 
	include("includes/connexion.inc.php");
	include('includes/haut.inc.php');
	include('includes/fonction.inc.php');
	
	$email=var_post("email");
	$password=var_post("mdp");
	if($email && $password)
	{
		$sql="SELECT id,email FROM utilisateurshelari WHERE email='".$email."' AND mdp='".$password."'";
		$req=mysql_query($sql);
		$donnee=mysql_fetch_array($req);
			if(($donnee['email'])== $email)
			{
			$idutilisateur=$donnee['id'];
			$sid = md5($donnee['email'].time());
			setcookie('sid',$sid,time()+3600);
			$sql="UPDATE utilisateurshelari SET sid='".$sid."' WHERE id=$idutilisateur";
			echo mysql_error();
			mysql_query($sql);
			header("Location:index.php");
			}
	}
	
?>
<h2>Connexion</h2>
<p> Saisissez les identifiants choisis lors de votre inscription</p>
<form action="connexion.php" method="post" id="form_connexion">
	<fieldset>
		<div class="clearfix">
			<label for="email">Email</label>
			<div class="input"><input id="email" name="email" size="30" type="email" value=""></div>
		</div>
		<div class="clearfix">
			<label for="mdp">Mot de Passe</label>
			<div class="input"><input id="mdp" name="mdp" size="30" type="password" value=""></div>
		</div>
		<div class="form-actions">
			<input class="btn btn-large btn-primary" id="submit" type="submit" value="Se connecter">
		</div>
	</fieldset>
</form>
<?php
	include('includes/bas.inc.php');
?>