<?php 

$url='data.json';

function checkInput($str){
    $illegal = "#$%^&*()+=[];/\{}|<>?~";
    // check length
    if(strlen($str)<3 || strlen($str)>200){
        return "Number of caracter incorrect";
    } 
    if(strpbrk($str, $illegal) ==true){ // check illegal caracter
        return "We found some Illegal character";
    }
    else {
         return $str;              
    }
}

function create_array($data){
    $arr=array();
    $arr['task']=$data;
    $arr['archive']=false;
    return $arr;
}

// check si la valeur de l'input a bien été envoyée
if (isset($_POST['to_do'])){
    if(!empty($_POST['to_do'])){ // check si le champ n'est pas vide
        $Todo=filter_var($_POST['to_do'],FILTER_SANITIZE_STRING);
    }else{
       echo $get_error="le champ est vide";
    }
}

if(!empty($Todo)){
    $for_json=checkInput($Todo); 
}else{
    echo $get_error="Invalide";
}

$arr=create_array($for_json);

if(file_get_contents($url)==null){
    $json=array();
    array_push($json,$arr);
    $json=json_encode($json,JSON_PRETTY_PRINT);
    file_put_contents($url,$json);
}else{
    $json=file_get_contents($url);
    $json=json_decode($json,true);
    array_push($json,$arr);
    $json=json_encode($json,JSON_PRETTY_PRINT);
    file_put_contents($url,$json);
}

header('Location:index.php');
?>