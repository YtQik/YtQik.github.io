<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo''.$title.'';?></title>
<meta name="description" content="<?php echo''.$description.'';?> - Full Download" />
<meta property="og:title" content="<?php echo''.$title.'';?>"/>
<meta name="robots" content="index, follow"/>
<link rel="canonical" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>"/>
<meta property="og:image" content="<?php echo '' . $image . '';?>" />
<meta name="language" content="en"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="icon" href="/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="/animate.css" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
</head>
<body>
<?php 
error_reporting(0);
include 'configure.php';
include 'theme.php'; ?>
<div class="ex2">
<div class="container50"style="   padding-top: 5px; max-width: 820px;   margin: auto;">
<div>
<div style ="padding-top: 10px; padding-bottom: 10px; color: #FFFFFF;">
<center>
<a href="/">
<img src="/images/logo.png" class="img-responsive">
</a> <button class="helpbutton" id="reveal">How to Use?</button>
</center>
</div></div><div>
<div class="searchbox"style="padding: 6px; ">
<center>
<form id="searchthis" action="/search.php" method="post" style="display:inline;" method="get">
<input id="namanyay-search-box" name="q" size="40" type="text" placeholder="Keyword Or YouTube Url"/>
<input id="namanyay-search-btn" value="Search" type="submit"/>
</form></center></div></div></div>
<div id="ajax-content"></div>