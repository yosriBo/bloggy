<?php
require_once("../classes/Article.php");
$id=$_GET['id'];
$c = new Article();
$c->_id= $id;
$c->supprimer();
header("Location:article_liste.php");
?>