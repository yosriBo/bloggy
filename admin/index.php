<?php require_once("header.inc.php") ?>

<div class="ts-main-content">
	<div class="content-wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<h2 class="page-title">Statistiques</h2>

					<div class="alert alert-success">
					<?php
					include("../classes/Mysql.php");
					//require_once("../classes/Article.php");
					$cnx = new Mysql();
					$q = "SELECT * FROM article";
					$res = $cnx->get_cnx()->query($q);
					$nbArticles=$res->rowCount();
					?>
						Nombre d'articles : <?php echo $nbArticles ?>
					</div>

					<div class="alert alert-success">
					<?php
					$req = "SELECT * FROM contact";
					$res = $cnx->get_cnx()->query($req);
					$nbContacts =$res->rowCount();
					?>						
						Nombre des demandes de contact : <?php echo $nbContacts ?>
					</div>

				</div>

			</div>
		</div>

		<?php require_once("footer.inc.php"); ?>