<?php $title = 'Administration - Supprimer'; ?>

<?php ob_start(); ?>

<div class="container validation">
	<?php
	if(!empty($_GET['title']))
	{
	?>
	<h4> Voulez-vous supprimer le chapitre N° <?=$_GET['id'] ?><br/><strong><?= $_GET['title'] ?></strong> ?</h4>
	
	<a class="waves-effect waves-light btn blue" href="index.php?action=deleteComment&amp;id=<?=$_GET['id']?>">OUI</a>
	<a class="waves-effect waves-light btn blue" href="index.php?action=manageComments">NON</a>
	
	<?php
	}
	else
	{
	?>
	<h4> Voulez-vous supprimer ce commentaire de <strong><?=$_GET['auteur'] ?></strong><br/> sous le chapitre N° <strong><?=$_GET['chapitre'] ?></strong> ?</h4>
	
	<a class="waves-effect waves-light btn blue" href="index.php?action=deleteComment&amp;id=<?=$_GET['id']?>">OUI</a>
	<a class="waves-effect waves-light btn blue" href="index.php?action=manageComments">NON</a>
	
	<?php
	}
	?>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>