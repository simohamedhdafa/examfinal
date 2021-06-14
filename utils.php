<?php
function afficher_die($ligne, $msg){
    echo "<pre>";
    print_r($ligne);
    echo "</pre>";
    die("<br/>".$msg."<br/>");
}

function afficher($ligne){
    echo "<pre>";
    print_r($ligne);
    echo "</pre>";
}

function select_all($f){
    $w = fopen($f, 'r');
    $content = array();
    while(!feof($w)){
        $ligne = fgetcsv($w);
        array_push($content, $ligne);
    }
    fclose($w);
    return $content;
}

function meta_data($t){
    return current($t);
}

function compter($t){
    return array_count_values(array_keys(array_shift($t)));
}

function detaille_categorie($content, $categorie){
    $detail = array();
    foreach($content as $cat){
        if($categorie == $cat[0]){
            array_push($detail, $cat);
        }
    }
    return $detail;
}

function select_all_categories($f){
    $content = select_all($f);
    $categories = array();
    foreach($content as $ligne)
        if(!in_array($ligne[0], $categories))
            array_push($categories, $ligne[0]);
    return $categories;
}