<?php

function ngegrab($url)
	{
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	$uaa = $_SERVER['HTTP_USER_AGENT'];
	curl_setopt($ch, CURLOPT_USERAGENT, "User-Agent: $uaa");
	return curl_exec($ch);
	}

function samgrab($url)
	{
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
	curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, '1');
	curl_setopt($ch, CURLOPT_TIMEOUT, 10);
	$header[] = "Accept-Language: en";
	$header[] = "User-Agent: Mozilla/5.0 (Windows; U; Windows NT 6.0; de; rv:1.9.2.3) Gecko/20100401 Firefox/3.6.3
";
	$header[] = "Pragma: no-cache";
	$header[] = "Cache-Control: no-cache";
	$header[] = "Accept-Encoding: gzip,deflate";
	$header[] = "Content-Encoding: gzip";
	$header[] = "Content-Encoding: deflate";
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	$load = curl_exec($ch);
	curl_close($ch);
	return $load;
	}

function sam($content, $start, $end)
	{
	if ($content && $start && $end)
		{
		$r = explode($start, $content);
		if (isset($r[1]))
			{
			$r = explode($end, $r[1]);
			return $r[0];
			}

		return '';
		}
	}


function format_time($t) 
{
$hasil = str_replace('PT','',$t);
$hasil = str_replace('H','hr ',$hasil);
$hasil = str_replace('M','min ',$hasil);
$hasil = str_replace('S','sec',$hasil);
return $hasil;
}
function dateyt($date)
{
$date = substr($date,0,10); 
$date = explode('-',$date);
$mn   = date('F',mktime(0,0,0,$date[1])); 
$dates= ''.$date[2].' '.$mn.' '.$date[0].''; 
return $dates;
}


function time_elapsed_string($datetime, $full = false) {
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
}

function count_format($n, $point='.', $sep=',') {
    if ($n < 0) {
        return 0;
    }

    if ($n < 10000) {
        return number_format($n, 0, $point, $sep);
    }

    $d = $n < 1000000 ? 1000 : 1000000;

    $f = round($n / $d, 1);

    return number_format($f, $f - intval($f) ? 1 : 0, $point, $sep) . ($d == 1000 ? 'k' : 'M');
}

function limit_words($string, $word_limit)
	{
	$words = explode(" ", $string);
	return implode(" ", array_splice($words, 0, $word_limit));
	}