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
    foreach($getcontent as $key => $value){
        if($value['archive']==true){
            echo "<li>".$value['task']."</li>";  
        }
    }
}

// function archive_task($jsonfile){
//     $check=$data;
//     $getcontent=file_get_contents($jsonfile);
//     $getcontent=json_decode($getcontent,true);
//     for ($init = 0; $init < count($getcontent); $init ++){        
//         if (in_array($getcontent[$init]['task'], $check)){                                           
//           $getcontent[$init]['archive'] = true;                
//         }
//     }
//     $getcontent=json_encode($getcontent,JSON_PRETTY_PRINT);
//     file_put_contents($url,$getcontent);
//     put_on_archive($jsonfile);
//     header('Location:index.php');
// }

// function put_on_archive($jsonfile){
//     $getcontent=file_get_contents($jsonfile);
//     $getcontent=json_decode($getcontent,true);
//    foreach($getcontent as $key => $value)
//         if($value['archive']==true){
//             echo "<li>".$value['task']."</li>"; 
//         }
// } 

    ?>

