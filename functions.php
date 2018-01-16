<?php

function get_events(){
	global $db;
	$query = "SELECT id, title, description, `start`, `end` FROM test";
	$res = mysqli_query($db, $query);
	return mysqli_fetch_all($res, MYSQLI_ASSOC);

}

function get_json($arr){
	// $data = array();
	$data = '[';
    if(isset($arr) && is_array($arr)){
    	foreach($arr as $key => $item){
		$data .= '{ "start": "' . $item['start'] . '", "title": "'. $item['title'] .'", "description": "'. $item['description'] . '", "end": "'. $item['end'] .'", "url": "?id=' . $item['id'] . '"},';
		}
    }
    $data .= ']';
	return $data;
}

function print_arr($arr){
	echo '<pre>' . print_r($arr, true) . '</pre>';
}

