<?php

//lesson
//dd stands for Die and Dump
function dd($data) {
	echo '<pre>';
	die(var_dump($data));
	echo '</pre>';
}

//practice
function ageCheck($age) {
	echo '<pre>';
	die(var_dump($age));
	echo '</pre>';
}