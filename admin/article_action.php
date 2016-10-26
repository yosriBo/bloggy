<?php
	// Récupérer les valeurs des champs
$titre		= $_POST['titre'];
$texte 		= $_POST['texte'];


require_once("../classes/Article.php");
require_once("../classes/Util.php");
$article = new Article();
$util = new Util();
$article->_titre = $titre;
$article->_logo = $util->upload('logo', "../upload/");
$article->_texte = $texte;


if($article->ajouter())
	$retour = 1;
else
	$retour = -1;

header("Location: article.php?retour=$retour&titre=$titre");