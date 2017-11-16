<?php require_once('../../../private/initialize.php'); ?> 


<?php include(SHARED_PATH . '/Header.php'); ?>

<div class="section">
    <div class="pageContent">

        <h1 class="presentationTitle"><b><?= $frais_title; ?></b></h1>
        <div class="table-condensed">
            <table class="table table-striped table-bordered sizeText">
                <thead>
                    <tr>
                        <td></td>
                        <td style="color: red;"><?= $frais_contenu[0]; ?></td>
                        <td style="color: red;"><?= $frais_contenu[1]; ?></td>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($resultat_frais as $contenu): ?>
                        <tr>
                            <td><?= $contenu['type']; ?> :</td>
                            <td><?= $contenu['prixAvant']; ?> euros</td>
                            <td><?= $contenu['prixApres']; ?> euros</td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
        <p class="sizeText">N.B : Le prix comprend les divers documents relatifs à ce congrès, l'accès aux différentes sessions, les pauses café et déjeuners.</p>
    </div>
</div>

<?php include(SHARED_PATH . '/Footer.php'); ?>
<?php include(SHARED_PATH . '/staff_footer.php'); ?>
