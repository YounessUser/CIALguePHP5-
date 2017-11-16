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