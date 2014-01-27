         </div>
          
          <nav class="span4">
            <h2>Menu</h2>
			<?php
			if($connect==true)
			{
				echo "Bienvenue ".$email.", vous êtes connecté.";
				echo '<br><a href="deconnexion.php">Deconnexion</a>';
			}
			?>
			<br>
			<br>
            <form class="form-inline" action="index.php" method="get">
				<div class="form-group">
					<label>Recherche : </label>
					<input type="text" name="r" placeholder="Informatique, ubuntu ..." value="" class="span3">&nbsp;
					<input type="submit" value="OK" class="btn">
				</div>
			</form>
            <ul>
                <li><a href="index.php">Accueil</a></li>
				<?php
				if($connect==true)
					echo'<li><a href="article.php">Rédiger un article</a></li>';
				else
					echo'<li><a href="connexion.php">Connexion</a></li>';
				?>
            </ul>
            
          </nav>
        </div>
        
      </div>

      <footer>
	  
        <p>&copy; Nilsine & ULCO 2012</p>
		
      </footer>

    </div>
<!-- <//?=(string)var_get('r')?> -->
  </body>
</html>