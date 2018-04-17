<?php
error_reporting(0);
include 'configure.php';
require_once 'inc/func.php';
$vid = $_GET['v'];
$yf = ngegrab('https://www.googleapis.com/youtube/v3/videos?key=' . $key . '&part=snippet,contentDetails,statistics,topicDetails&id=' . $vid . '&vid=' . $vid . '');
$yf = json_decode($yf);

if ($yf)
	{
	foreach($yf->items as $item)
		{
		$name = $item->snippet->title;
		$title = "$name";
		$description = "$name download as Mp4 Mp3 Ultra HD";
		$image = "https://i.ytimg.com/vi/'.$vid.'/mqdefault.jpg";
		include 'inc/header.php';
        $channelTitle = $item->snippet->channelTitle;
		$des = $item->snippet->description;
		$date = dateyt($item->snippet->publishedAt);
		$published = time_elapsed_string($item->snippet->publishedAt);
		$ctd = $item->contentDetails;
		$duration = format_time($ctd->duration);
		$hd = $ctd->definition;
		$st = $item->statistics;
		$views = $st->viewCount;
		$likes = $st->likeCount;
		$dislikes = $st->dislikeCount;
		$favoriteCount = $st->favoriteCount;
		$commentCount = $st->commentCount;
		$RatingTotal = (int)$likes + (int)$dislikes;
		$RatingPercent = ($RatingTotal > 0) ? round((((int)$likes - (int)$dislikes) / $RatingTotal) * 100, 2) : "0.00";
		$star = (int)$RatingPercent - (int)1;
		$share = (int)$likes - (int)$dislikes;
		}
	}

echo '<div class="maincontener">
<h1>' . ucwords($name) . ' </h1>';

include 'ads/728.php';

echo'
<div id="item-' . $vid . '" style="padding-left: 6px; padding-right: 6px;">
    <div class="info_item">
        <div class="playvideo">
            <div id="divd"><img onclick="changeMe()" class="ytimg" style="margin-bottom: 5px;" src="https://i.ytimg.com/vi/' . $vid . '/mqdefault.jpg" width="100%" height="auto">
                <a rel="nofollow" onclick="changeMe()"> <div class="faa-horizontal animated faa-slow btn-primary">
                
              
                
                <img style="  width:20px;height:20px;  padding-right : 2px; float: left;" src="/images/icon.png">
                PLAY</div>
                </a>
            </div>
        </div>
        <script>
            function changeMe() {
                    var div = document.getElementById(\'divd\').innerHTML;	document.getElementById(\'divd\').innerHTML = \'<div class="frm_box"><div class= "hidden"><div style="margin:1px;" class="video-container"><iframe width="100%" height="315" src="https://www.youtube.com/embed/' . $vid . '?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe></div></div></div>\';	}
        </script>
        
        
        <div class="container50">
        
        <div>
        
        <a class="fbButton" id="wlink" href="http://facebook.com/sharer.php?u=http://' . $_SERVER['HTTP_HOST'] . '' . $_SERVER['REQUEST_URI'] . '" target="_blank"><small><img src="/images/facebook.png"></small> </a><a class="whButton" id="wlink" href="whatsapp://send?text=* Video Name:- ' . $bestephp . '  %0a * Video Quality:- HD %0a * Download:- http://' . $_SERVER['HTTP_HOST'] . '' . $_SERVER['REQUEST_URI'] . ' " data-action="share/whatsapp/share"><small><img src="/images/whatsapp.png"></small></a> <small>( Total Share ' . $share . ' )</small>
        <div class="info_item"><font style="font-size:12px; color:#355978;"><i class="fa fa-exclamation" aria-hidden="true"></i>  All credits go to their respective owners.</font>
            <br/>
            <div class="containerdiv">
                <div> <img src="/images/stars_blank.png">
                </div>
                <div class="cornerimage" style="width:' . $star . '%;"><img src="/images/stars_full.png">
                </div>
            </div>
        </div>
        <br />
        <div class="janu" style="  margin-top: 11px; "><font style="font-weight:bold; color:#000;"><i class="fa fa-star" aria-hidden="true"></i> Rating:</font> <span class="glyphicon glyphicon-star"></span> ' . $RatingPercent . '% <small>(by ' . $RatingTotal . ' users)</small>
        </div>
        <div class="janu"><font style="font-weight:bold; color:#000;"><i class="fa fa-download" aria-hidden="true"></i> Downloads:</font> ' . count_format($views) . ' <small>(' . $views . ')</small>
        </div>
        <div class="janu"><font style="font-weight:bold; color:#000;"><i class="fa fa-clock-o" aria-hidden="true"></i> Duration:</font> ' . $duration . '</div>
        <div class="janu"><font style="font-weight:bold; color:#000;"><i class="fa fa-desktop" aria-hidden="true"></i> Definition:</font> <span style="background-color: rgb(51, 192, 1);color: #FFF;font-size: 14px;padding: 0px 2px 1px;border-radius: 3px;">' . strtoupper($hd) . '</span>
        </div>
        <div class="janu"><font style="font-weight:bold; color:#000;"><i class="fa fa-calendar" aria-hidden="true"></i> Published:</font> ' . $date . ' <small>(' . time_elapsed_string($date) . ')</small>
        </div>
        <div class="janu"><font style="font-weight:bold; color:#000;"><i class="fa fa-user" aria-hidden="true"></i> Author:</font> ' . ucwords($channelTitle) . ' </div>
        
        </div><div> ';
        		include 'ads/300.php';
        
       echo' </div>
        
        
        <a href="javascript:;" rel="nofollow" data-did="' . $vid . '" title="Download Video ' . $name . '." data-name="' . $name . '." data-point="youtube" id="ic' . $vid . '" class="btn-download">
            <button type="button" class="btn-success" rel="nofollow"><i class="fa fa-arrow-circle-o-down" aria-hidden="true"></i> Download Video</button>
        </a>
        <a href="javascript:;" rel="nofollow" data-did="' . $vid . '" class="btn-close" style="display: none;">
            <button type="button" class="btn-danger" rel="nofollow">Close</button>
            <div class="iamload"><img src="/images/pleasewait.gif">
            </div>
        </a>
    </div>
  
    <div id="downloader-' . $vid . '" class="downloader clearfix"></div>
</div>
<br />
<div class="lr"><font style="font-weight:bold; color:#000;"><i class="fa fa-info-circle" aria-hidden="true"></i> Description:</font>
    <div style="overflow: hidden; height: 64px;" class="read" id="chartdiv">' . nl2br($des) . '
        <br /> Thank you to Watch/Download ' . ucwords($name) . ' video
        <br />if you like this Video then please share video on
        <br /> Facebook mad Whats App or any Social Network
        <br /> its Help Us to make More Videos</div>
    <t style="cursor:pointer; text-decoration: none;outline: medium none;height: 23px;color: #3366A4;line-height: 24px;background-color: #E8F0F6;padding: 0px 3px;border-radius: 2px;width: -moz-fit-content;display: inline-block;border: 1px solid #CEE5F6;" class "morelink" id="hide" onClick="changeHeight();">Read More</t>
    <script>
        function changeHeight() {
                document.getElementById(\'chartdiv\').style.height = "auto" }  $("#hide").click(function(){     $("t").hide(); });
    </script>
</div></div>

';

include 'ads/728.php';

echo'

</div>';
include 'inc/foot.php';
 ?>
