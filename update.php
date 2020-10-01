<?php
// read file

$count =$_POST['count'];
$data = file_get_contents('model.json');

// decode json to array
$json_arr = json_decode($data, true);

$key=0;
 $json_arr[$key]['count'] = $count;
    

// encode array to json and save to file
file_put_contents('model.json', json_encode($json_arr));
echo(json_encode(array('status'=>'success','message' => 'Approved')));
?>