<?php

//Accueil


$accueil_title = "Accueil";
$accueil_contenu = array(
    find_accueil_by_type('titre_accueil', 'Fr'),
    find_accueil_by_type('dateLimite_accueil', 'Fr')
);

//presentation page

$presentation_menu_title = "Présentation";
$presentation_title = "Présentation et objectifs";
$presentation_contenu = find_accueil_by_type('presentation', 'Fr');

//Thémes page

$themes_title = "Thèmes";
$themes_contenu = find_theme_by_lang('Fr');

//calendrier page

$calendrier_title = "Calendrier";
$res=find_calendar_by_langue('Fr');
$array = array();
$i = 0;
while ($contenu = mysqli_fetch_assoc($res)) {
    $array[$i++] = $contenu;
}
$calendrier_contenu = $array;

//Programme page

$programme_title = "Programme";
$programme_contenu = find_programme_by_lang("Fr") ;

//inscription page

$inscription_menu_title = "Formulaire";
$inscription_title = "Formulaire d'inscription";
$inscription_contenu = array(
    'Nom',
    'Prenom',
    'Communication',
    'Thème',
    'Titre',
    'Adresse',
    'Email',
    'Pays',
    'Sexe',
    'Fonction',
    'Sauvegarder'
);

//frais page

$drobdown_title = "Inscription";
$frais_menu_title = "Frais";
$frais_title = "Frais d'Inscription";
$date;
$res_frais= find_frais_by_lang('Fr');
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
    $line['prixAvant']= find_frais_by_state(1, $type, 'Fr');
    $line['prixApres']=find_frais_by_state(0, $type, 'Fr');
    $resultat_frais[$j++]=$line;
}

$frais_contenu = array(
    "Avant le ".$date,
    "aprés le ".$date
);

//comite page

$comite_menu_title = "COMITE";
$comite_title = "Afficher les Commites";
$comite_contenu = array(
    'COMITE SCIENTIFIQUE',
    'COMITE D’ORGANISATION'
);

//contact page

$contact_title = "Contact";
$contact_contenu = array(
    'Contactez-nous',
    'Envoie-nous un message',
    'Nom',
    'Sujet',
    'Email',
    'Message'
);


