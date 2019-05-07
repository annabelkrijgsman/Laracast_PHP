<?php

require 'functions.php';

//lesson
$animals = ['dog', 'cat'];
dd($animals);

//practice
$age = [15];

if(ageCheck($age <= 21)) {
	echo 'You are not old enough.';
} else {
	echo 'Welcome!';
}

require 'index.view.php';