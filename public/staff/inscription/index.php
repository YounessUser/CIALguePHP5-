<!DOCTYPE html>

<?php $title = "Gestion des Inscriptions" ?>


<?php require_once('../../../private/initialize.php'); ?> 

<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
$inscription_set = find_all_inscription();
require_login();
?>

<?php include(SHARED_PATH . '/Header_admin.php'); ?>
<div class="section" style="padding-top: 5%;">
    <div class="pageContent">

            <h1 class="presentationTitle"><b>Gestion des Inscriptions</b></h1>
            <div class="container">
<button type="button" style="background-color: blue; color: white;"><a class="action" style=" color: white;" href="<?php echo url_for('/staff/pages/Inscription.php'); ?>">Cree un nouveau inscription</a>
</button>


            <form action="#" method="post" style="width: 100%;">


                <table id="list_inscriptions" class="list table">
                    <tr>
                        <th style="padding: 1%;" >Nom</th>
                        <th style="padding: 1%;" >Prenom</th>
                        <th style="padding: 1%;" >Email</th>
                        <th style="padding: 1%;" >Address</th>
                        <th style="padding: 1%;">Fonction</th>
                        <th style="padding: 1%;">Théme</th>
                        <th style="padding: 1%;">Titre</th>
                        <th style="padding: 1%;">Sexe</th>
                        <th style="padding: 1%;">Pays</th>
                        <th style="padding: 1%;">Price</th>

      <!--<th>&nbsp;</th>-->
                    </tr>

                    <?php while ($inscription = mysqli_fetch_assoc($inscription_set)) { ?>
                        <tr>
                            <td style="padding: 1%;" ><?php echo h($inscription['lastname']); ?></td>
                            <td style="padding: 1%;" ><?php echo h($inscription['firstname']); ?></td>
                            <td style="padding: 1%;"><?php echo h($inscription['email']); ?></td>
                            <td style="padding: 1%;"><?php echo h($inscription['address']); ?></td>
                            <td style="padding: 1%;"><?php echo $inscription['type'] == 1 ? 'Accompagnateur' : ( 2 ? 'Enseignant-chercheur' : ( 3 ? 'Doctorant' : '')); ?></td>
                            <td style="padding: 1%;"><?php echo $inscription['theme'] == 1 ? 'Algues et biodiversite' : ( 2 ? 'Biotechnologies algales' : ( 3 ? 'Algues et agriculture' : ( 4 ? 'Algues et environnement' : ( 5 ? 'Algues et industries' : ( 6 ? 'Algocarburants' : ''))))); ?></td>
                            <td style="padding: 1%;"><?php echo h($inscription['titre']); ?></td>
                            <td style="padding: 1%;"><?php echo $inscription['gender'] == 1 ? 'Male' : ( 2 ? 'Female' : ''); ?></td>
                            <td style="padding: 1%;"><?php echo h($inscription['country']); ?></td>
                            <td style="padding: 1%;"><?php echo h($inscription['price']); ?></td>

                        </tr>
                    <?php } ?>
                </table>



            </form>

            <?php
            mysqli_free_result($inscription_set);
            ?>

        </div>
    </div>
</div>



<?php include(SHARED_PATH . '/Footer.php'); ?>
<script>

    TableExport(document.getElementsByTagName("table"), {
        formats: ['xls'], // (String[]), filetype(s) for the export, (default: ['xls', 'csv', 'txt'])
        filename: 'list', // (id, String), filename for the downloaded file, (default: 'id')
        bootstrap : true
    });

</script>
<?php include(SHARED_PATH . '/staff_footer.php'); ?>
   
