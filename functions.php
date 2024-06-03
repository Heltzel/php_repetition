<?php

function dd($value)
{
	echo '<pre>';
	var_dump($value);
	echo '</pre>';
	die();
}

function active($value)
{
	$route = $_SERVER['REQUEST_URI'];
	if ($route == $value) {
		return "bg-gray-900 text-white";
	} else {
		return "text-gray-300 hover:bg-gray-700 hover:text-white";
	}
}
