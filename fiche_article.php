<?php require_once("header.inc.php"); ?>
<div>
	<?php
	$id = $_GET['id'];
	require_once("./classes/Article.php");
	$c = new Article();
	$cnx = new Mysql();
	$q = "SELECT * FROM article WHERE id = $id";
	$res = $cnx->get_cnx()->query($q);
	foreach ($res as $row){
		echo "Titre: ".$row['titre']; ?><br><br>
		<?php  echo $row['texte']; }?>
	</div>
	<?php require_once("footer.inc.php"); ?>