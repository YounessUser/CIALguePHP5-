<?php
//Accueil

$accueil_title="Home";
$accueil_contenu = array(
    find_accueil_by_type('titre_accueil', 'En'),
    find_accueil_by_type('dateLimite_accueil', 'En')
);

//presentation page
$presentation_menu_title="Presentation";
$presentation_title="Presentation and objectives";
$presentation_contenu = find_accueil_by_type('presentation', 'En');

//Thémes page

$themes_title="Themes";
$themes_contenu = find_theme_by_lang('En');

//calendrier page

$calendrier_title="Calendar";
$res=find_calendar_by_langue('En');
$array = array();
$i = 0;
while ($contenu = mysqli_fetch_assoc($res)) {
    $array[$i++] = $contenu;
}
$calendrier_contenu = $array;

//Programme page

$programme_title="Program";
$programme_contenu = find_programme_by_lang("En") ;

//inscription page
$inscription_menu_title="Form";
$inscription_title="Registration Form";
$inscription_contenu=array(
    'last name',
    'first name',
    'Communication',
    'Theme',
    'Title',
    'Adresse',
    'Email',
    'Country',
    'Sexe',
    'Fonction',
    'Save'
);

//frais page
$drobdown_title="Registration";
$frais_menu_title="Frais";
$frais_title="Registration fees";
$date;
$res_frais= find_frais_by_lang('En');
$array_frais_type = array();
$array_frais_res = array();

$j = 0;
while ($contenu = mysqli_fetch_assoc($res_frais)) {
    $date=$contenu['dateLimite'];
    $array_frais_type[$j++] = $contenu['type'];
}
$line=array();
$resultat_frais=array();
$j=0;
foreach ( array_unique($array_frais_type) as $type){
    $line['type']=$type;
    $line['prixAvant']= find_frais_by_state(1, $type, 'En');
    $line['prixApres']=find_frais_by_state(0, $type, 'En');
    $resultat_frais[$j++]=$line;
}

$frais_contenu = array(
    "Before ".$date,
    "After ".$date
);



//comite page
$comite_menu_title="COMITE";
$comite_title="Afficher les Commites";
$comite_contenu=array(
    'SCIENTIFIC COMMITTEE',
    'ORGANISATION COMMITTEE'
);

//contact page

$contact_title="Contact";
$contact_contenu=array(
    'Get In Touch',
    'Send us a message',
    'Name',
    'Sujet',
    'Email',
    'Message'
);


