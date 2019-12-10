<?php
$url="data.json";
function add_task($jsonfile){
    $getcontent=file_get_contents($jsonfile);
    $getcontent=json_decode($getcontent,true);
    if($getcontent==null){
        echo "<li>bouge ton cul fainiasse</li>";
    }else{
        foreach($getcontent as $key => $value){
            echo "<li><input type='checkbox' name='check' value=" . $value['task'] . " id=" . $value['task'] ."> <label for=" . $value['task'] .">".$value['task']."</label></li>";
        }
    }
}


echo $_POST['done'];

function archive_task($jsonfile){


}

?>








<!-- First, you need to decode it :

$jsonString = file_get_contents('jsonFile.json');
$data = json_decode($jsonString, true);

Then change the data :

$data[0]['activity_name'] = "TENNIS";
// or if you want to change all entries with activity_code "1"
foreach ($data as $key => $entry) {
    if ($entry['activity_code'] == '1') {
        $data[$key]['activity_name'] = "TENNIS";
    }
}

Then re-encode it and save it back in the file:

$newJsonString = json_encode($data);
file_put_contents('jsonFile.json', $newJsonString); -->