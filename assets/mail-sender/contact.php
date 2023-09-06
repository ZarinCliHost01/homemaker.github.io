<?php


// Taking all values
$name 		= $_POST['name'];
$email 		= $_POST['email'];
$msg 		= $_POST['msg'];
$output 	= "Name: ".$name."\n\nMessage: ".$msg;
$to 		= 'info@homemaker.pk';
$headers	= 'FROM: "'.$email.'"';

