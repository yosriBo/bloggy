<?php require_once("header.inc.php"); ?>

<div class="row" id="content">
	<div class="col-md-9" id="content_text">
		<?php
		require_once("./classes/Article.php");
		$c = new Article();
		$liste=$c->liste();
		foreach($liste as $item){ ?>
		<a href="fiche_article.php?id=<?php echo $item->_id ?>"  > <?php echo "Titre: ".$item ->_titre; ?></a><br>
		<?php echo "Date de publication : ".$item ->_d_ajout; ?> <br>
		<?php echo  $item ->_texte; ?> <br><br> <?php } ?>  					  
		
	</div>
	<div class="col-md-3 hidden-xs" id="sidebar">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur.  	
	</div>
</div>

<?php require_once("footer.inc.php"); ?>
