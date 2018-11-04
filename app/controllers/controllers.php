<?php 
	function _HomeController() {
	$data = [
		'title'	=> 'Myanmar Links'
	];
	_load_view("index", $data);
}

function _BlogController() {
	$data = [
		'title'	=> 'Blog Area'
	];
	_load_view("index", $data);
}

function _TypeController() {
	$data = [
		'title'	=> 'Type Here'
	];
	_load_view("index", $data);
}

function _AboutController() {
	$data = [
		'title'	=> 'About Us'
	];
	_load_view("index", $data);
}
 ?>