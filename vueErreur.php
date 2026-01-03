<?php $titre = 'MonBlog - Erreur'; ?>

<?php ob_start() ?>
<p>Une erreur est survenueeee : <?= $msgErreur ?></p>
<?php $contenu = ob_get_clean(); ?>

<?php require 'Gabarit.php'; ?>
