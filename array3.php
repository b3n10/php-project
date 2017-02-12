<?php

function show_array($key, $array) {
	$value = array();

	foreach($array as $item) {
		$value[] = $item[$key];
	}

	return $value;

}

$people = array(
	array('name' => 'b3n', 'loc' => 'tabun', 'age' => '28'),
	array('name' => 'rence', 'loc' => 'mview', 'age' => '29'),
	array('name' => 'jc', 'loc' => 'dau', 'age' => '18'),
);

print_r(show_array('name', $people));
