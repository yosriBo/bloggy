<?php
require_once("../classes/Contact.php");
$id=$_GET['id'];
$c = new Contact();
$c->_id=$id;
$c->supprimer();
header("Location:contact_liste.php");
?>