<?php

$url="data.json";
$error="";

function add_task($jsonfile){
    $getcontent=file_get_contents($jsonfile);
    $getcontent=json_decode($getcontent,true);
    if($getcontent==null){
        echo "<li>bouge ton cul fainiasse</li>";
    }else{
        foreach($getcontent as $key => $value){
            if($value['archive']==false){
            echo "<li><input type='checkbox' name='check[]' value='".$value['task']."' id='".$value['task']."'> <label for=" 
            . $value['task'] .">".$value['task']."</label></li>";
            }
        }
    }
}

function add_archive($url){
    $getcontent=file_get_contents($url);
    $getcontent=json_decode($getcontent,true);
    if($getcontent==null){
        echo "<p>aucune archive</p>";
    }else{
        foreach($getcontent as $key => $value){
            if($value['archive']==true){
                echo "<li>".$value['task']."</li>";  
            }
        }
    }   
}

    ?>

