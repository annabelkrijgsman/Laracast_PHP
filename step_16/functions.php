<?php

//dd stands for Die and Dump
function dd($task) {
	echo '<pre>';
	die(var_dump($task));
	echo '</pre>';
}