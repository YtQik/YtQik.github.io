<?php

if (!empty($_POST['q']))
	{
$b = str_replace(' ', '-', $_POST['q']);
$b = str_replace('https://www.youtube.com/watch?v=', '', $b);
$b = str_replace('https://youtu.be/', '', $b);
$b = str_replace('youtube.com/embed/', '', $b);
$b = str_replace('youtube-nocookie.com/embed/', '', $b);
$b = str_replace('https://www.youtube.com/playlist?list=', '', $b);
$b = str_replace('http', '', $b);
$b = str_replace('www', '', $b);	
$b = preg_replace('/-+/', '-', $b);
	$url = '/video/'.strtolower($b).'';
	}
  else
	{
	$url = '/';
	}
header('location:' . $url . '');
?>