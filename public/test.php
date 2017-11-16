<?php $title = "Afficher les Commites"?>


<?php require_once('../private/initialize.php');

$commite_set = find_all_commite();
?> 

<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php include(SHARED_PATH.'/staff_header.php'); ?>

<?php 
$array_commite_1 = array();
$array_commite_2 = array();

while($commite = mysqli_fetch_assoc($commite_set)){
    if($commite['type'] == 1 ){
    $array_commite_1[] = $commite;
    }elseif ($commite['type'] == 2) {
        $array_commite_2[] = $commite;
    }
}

#echo show_up_commite($array_commite_1);

?>

<?php include(SHARED_PATH.'/staff_footer.php'); 
 
mysqli_free_result($commite_set);
?>
