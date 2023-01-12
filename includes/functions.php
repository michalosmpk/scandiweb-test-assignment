<?php

function printar($array) 
{
	echo '<pre>';
	print_r($array);
	echo '</pre>';
}

function alert($message) 
{
	echo "<script>alert('{$message}')</script>";
}