<?php
include 'configure.php';

$title = "$home_title";
$description = "$home_des";
include 'inc/header.php';

echo'<div class="maincontener">
<center>

';

include 'ads/728.php';

?>


<h1>Resent Search :</h1></center><div class="lr"><?php
function limit_words($string, $word_limit)
	{
	$words = explode(" ", $string);
	return implode(" ", array_splice($words, 0, $word_limit));
	}

$text = file_get_contents("data/history_search.txt", NULL);

// $text = str_replace("-", " ", $text);

$text = explode('[s]:', $text);

foreach($text as & $value)
	{
	$value = rtrim($value);
	}

$out = array_slice($text, -50);
$out = array_reverse($out);
$out = array_unique($out);
$latest = ""; foreach($out as $value) 	{	$latest.= '<a href="'; $value1 = str_replace(" ", "-", $value);
	$value = strtolower($value);	$latest.= "/video/$value";
	$value1 = str_replace("-", " ", $value);	$value1 = strtolower($value1);
	$value1 = limit_words('' . $value1 . '', 5);	$latest.= "\"> " . ucwords($value1) . "</a> <font size='5'>|</font> ";}
echo "$latest"; echo'</div>







<hr><center>

<h2>Online Youtube Video Downloader</h2>
'.$site_name.' allows you to convert video from Youtube to Mp4 3Gp Webm in HD. '.$site_name.' supports downloading all video formats such as : MP4, M4V, 3GP, WMV, FLV,  WEBM, etc. You can easily download for free thousands of videos from Youtube .


<hr>

<div class="container50">
<div>
<h2>Instructions</h2>
1. Search by name or <br>directly paste the link of video you want to convert
<br>
2. Click "GO" button to begin process
<br>
3. Select the video format you want to download

</div>
<div>
<h2>Features</h2>
• Unlimited downloads and always free
<br>
• High-speed video converter
<br>
• No registration requirement
<br>
• Support downloading with all formats
</div></div>

<hr>
<div class="container">


<div><h2>Free Download</h2>
<img src="https://cdn2.iconfinder.com/data/icons/ios-7-icons/50/gift-64.png"><br>
Unlimitedly free conversions and downloads.</div>


<div><h2>Video Formats</h2>
<img src="https://cdn4.iconfinder.com/data/icons/thefreeforty/30/thefreeforty_footage-64.png"><br>
Directly Download Videos in multipal Formats.</div>

<div><h2>Easy Download</h2>
<img src="https://cdn2.iconfinder.com/data/icons/picol-vector/32/download_accept-64.png"><br>
Fully compatible with all browsers.Mobile And Computer Friendly</div>




</div></center>
<br>
</div>';












include 'inc/foot.php';
?>