<?php
error_reporting(0);
include 'configure.php';
require_once 'inc/func.php';
$q = $_GET['q'];
$q = str_replace('-', ' ', $q);
$title = "$search_before $q $search_after";
$description = "$q, download Video $q, in mp4 , full HD";
include 'inc/header.php';
$q = str_replace('-', ' ', $q);
$foo = $q;
$foo = ucwords($foo);
echo '<div class="maincontener"><h1> ' . $foo . ' </h1>';
include 'ads/728.php';
$url = file_get_contents('https://www.googleapis.com/youtube/v3/search?part=snippet&q=' . rawurlencode($_GET['q']) . '&type=video&videoEmbeddable=true&key=' . $key . '&maxResults='.$search_max_results.'');
$js = json_decode($url);
$data = $js->items;
$item = $js->pageInfo->resultsPerPage;
if (!empty($data))
	{
	for ($i = 0; $i < $item; $i++)
		{
		$vid = $data[$i]->id->videoId;
		$name = $data[$i]->snippet->title;
		$published     = $data[$i]->snippet->publishedAt;
		$hanap = $name;
		$hanap = str_replace('á', 'a', $hanap);
		$hanap = str_replace('|', '', $hanap);
		$hanap = str_replace('《', '', $hanap);
		$hanap = str_replace('》', '', $hanap);
		$hanap = str_replace('¡', '', $hanap);
		$hanap = str_replace('¿', '', $hanap);
		$hanap = str_replace('&', 'and', $hanap);
		$hanap = str_replace('<', '', $hanap);
		$hanap = str_replace('>', '', $hanap);
		$hanap = str_replace('{', '', $hanap);
		$hanap = str_replace('}', '', $hanap);
		$hanap = str_replace('*', '', $hanap);
		$hanap = str_replace('!', '', $hanap);
		$hanap = str_replace('@', '', $hanap);
		$hanap = str_replace('#', '', $hanap);
		$hanap = str_replace('$', '', $hanap);
		$hanap = str_replace('/', '', $hanap);
		$hanap = str_replace('^', '', $hanap);
		$hanap = str_replace('*', '', $hanap);
		$hanap = str_replace('(', '', $hanap);
		$hanap = str_replace(')', '', $hanap);
		$hanap = str_replace('"', '', $hanap);
		$hanap = str_replace(':', '', $hanap);
		$hanap = str_replace(';', '', $hanap);
		$hanap = str_replace(',', '', $hanap);
		$hanap = str_replace('?', '', $hanap);
		$hanap = str_replace('+', '', $hanap);
		$hanap = str_replace('×', '', $hanap);
		$hanap = str_replace('÷', '', $hanap);
		$hanap = str_replace('=', '', $hanap);
		$hanap = str_replace('[', '', $hanap);
		$hanap = str_replace(']', '', $hanap);
		$hanap = str_replace('€', '', $hanap);
		$hanap = str_replace('£', '', $hanap);
		$hanap = str_replace('¥', '', $hanap);
		$hanap = str_replace('₩', '', $hanap);
		$hanap = str_replace('%', '', $hanap);
		$hanap = str_replace('~', '', $hanap);
		$hanap = str_replace('`', '', $hanap);
		$hanap = str_replace('_', '', $hanap);
		$hanap = str_replace("'", "", $hanap);
		$clean_name = $hanap;
		$clean_name = strtolower($clean_name);
		$hanap = limit_words("" . $hanap . "", 5);
		$string = $hanap;
		$string = str_replace(' ', '-', $string);
		$string = strtolower($string);
		$mystring = preg_replace('/-{2,}/', '-', $string);
		$channelTitle = $data[$i]->snippet->channelTitle;
		if (!$channelTitle)
			{
			$channelTitle = 'Unknown';
			}

{


}	if ($vid){
echo '<div id="item-' . $vid . '"><div class="item"><div class="artwork"><a href="/file/'.$vid.'.html"><img  src="https://i.ytimg.com/vi/'.$vid.'/mqdefault.jpg" alt="Thumb"  height="auto" width="140"></div><div class="meta"><ctextt>' . ucwords($clean_name) . ' </ctextt></a><small><textt>
<font color="#616161"><i class="fa fa-user" aria-hidden="true"></i> '.$channelTitle.'</font></textt></small></div></div></div>'; }}
}
$searchlog = "[s]:".$_GET['q']."\n";
$ip_file = "data/history_search.txt";
$nam = $searchlog;
$query = file_get_contents($ip_file); //read search query into string
if(false === strpos($query,$nam)) { //write search result if it's not there already
    file_put_contents($ip_file,"$nam\n",FILE_APPEND);
}
include 'ads/728.php';
echo'</div>';
include 'inc/foot.php';
?>