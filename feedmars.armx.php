<?php
function getUserIpAddr(){
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        //ip from share internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        //ip pass from proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}
?>
<?php
$apiKey = "(your api key here)";
//$query = @unserialize (file_get_contents('http://ip-api.com/php/'.getUserIpAddr()));
//if ($query && $query['status'] == 'success') {
//$cityId = $query['city']  . ',' . ' ' . $query['countryCode'];
//}
$cityId = "(enter your city here or if accessed outside of the local network uncomment the line above and delete this line)";
$googleApiUrl = "https://api.openweathermap.org/data/2.5/weather?q=" . $cityId . "&lang=en&units=metric&APPID=" . $apiKey;

$ch = curl_init();

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);

curl_close($ch);
$data = json_decode($response);
$currentTime = time();
?>
<?xml version="1.0" encoding="utf-8"?>
<site name="pagemy">
<cat id="983" dispName="Site Contents">
<!--<cm dispName="Local City Guide" id="335595" class="multi" client="msn6" name="events">
<headline class="headline">
<title>Best bacon 'n' eggs</title>
<url>http://newyork.citysearch.com/feature/40256</url>
</headline>
<headline class="headline">
<title>Juiciest burgers </title>
<url>http://newyork.citysearch.com/feature/40134</url>
</headline>
<headline class="headline">
<title>Addictive fries</title>
<url>http://newyork.citysearch.com/feature/40135</url>
</headline>
<blob class="blob">
<city><?php echo $cityId ?></city>
</blob>
</cm>-->
<cm dispName="Local News" id="335588" class="multi" client="msn6" name="news">
<?php
$html = "";
$url = "https://news.google.com/rss?hl=en-US&gl=en&ceid=US:en";
$xml = simplexml_load_file($url);
for($i = 0; $i < 10; $i++){
    $title = $xml->channel->item[$i]->title;
    $link = $xml->channel->item[$i]->link;
    $description = $xml->channel->item[$i]->description;
    $pubDate = $xml->channel->item[$i]->pubDate;

    $html .= '<headline class="headline">';
    $html .= "<title>$title</title>";
    $html .= "<url>$link</url>";
    $html .= "</headline>";
}
echo $html;
?>
<blob class="blob">
<city><?php echo $cityId ?></city>
</blob>
</cm>
<cm dispName="Local Weather" id="326129" class="weather" client="msn6" name="weather" RefreshRate="7200000">
<city><?php echo $cityId ?></city>
<dayofweek><?php 
 $date = new DateTime();
 echo $date->format('d-m-Y');
?></dayofweek>
<image imgType="forecast"><?php
if ($data->weather[0]->icon == '50d') {
    echo "uD";
} elseif ($data->weather[0]->icon == '02d') {
    echo "uB";
} elseif ($data->weather[0]->icon == '03d') {
    echo "uC";
} elseif ($data->weather[0]->icon == '04d') {
    echo "uC";
} elseif ($data->weather[0]->icon == '09d') {
    echo "uW";
} elseif ($data->weather[0]->icon == '10d') {
    echo "uW";
} elseif ($data->weather[0]->icon == '01d') {
    echo "uU";
} elseif ($data->weather[0]->icon == '02n') {
    echo "uB";
} elseif ($data->weather[0]->icon == '03n') {
    echo "uC";
} elseif ($data->weather[0]->icon == '04n') {
    echo "uC";
} elseif ($data->weather[0]->icon == '09n') {
    echo "uW";
} elseif ($data->weather[0]->icon == '10n') {
    echo "uW";
} elseif ($data->weather[0]->icon == '01n') {
    echo "uU";
} elseif ($data->weather[0]->icon == '50n') {
    echo "uD";
} elseif ($data->weather[0]->icon == '11d') {
    echo "uT";
} elseif ($data->weather[0]->icon == '11n') {
    echo "uT";
} elseif ($data->weather[0]->icon == '13d') {
    echo "uM";
} elseif ($data->weather[0]->icon == '13n') {
    echo "uM";
} else {
    echo "UT";
}
?></image>
<condition><?php echo ucwords($data->weather[0]->description); ?></condition>
<temp>
<high><?php echo $data->main->temp_max; ?></high>
<low><?php echo $data->main->temp_min; ?></low>
</temp>
<forecasts>
<!--<forecast>
<dayofweek><?php 
$tomorrow = new DateTime('tomorrow');
echo $tomorrow->format("d-m-Y");
?></dayofweek>
<image imgType="forecast">UT</image>
<condition>Unavailable</condition>
<temp>
<high>N/A</high>
<low>N/A</low>
</temp>
</forecast>
<forecast>
<dayofweek><?php 
$dayAfterTomorrow = (new \DateTime())->add(new \DateInterval('P2D'));
echo $dayAfterTomorrow->format('d-m-Y');
?></dayofweek>
<image imgType="forecast">UT</image>
<condition>Unavailable</condition>
<temp>
<high>N/A</high>
<low>N/A</low>
</temp>
</forecast>
<forecast>
<dayofweek><?php 
$dayAfterTomorrow = (new \DateTime())->add(new \DateInterval('P3D'));
echo $dayAfterTomorrow->format('d-m-Y');
?></dayofweek>
<image imgType="forecast">UT</image>
<condition>Unavailable</condition>
<temp>
<high>N/A</high>
<low>N/A</low>
</temp>
</forecast>-->
</forecasts>
<links>
<link type="weather">
<url value="http://weather.msn.com/local.aspx?wealocations=wc:USCA0638"/>
<title>Weather</title>
</link>
</links>
<links>
<link type="news">
<url value="http://my.msn.com/customizemodule.armx?id=10341"/>
<title>News</title>
</link>
</links>
<links>
<link type="weather_title">
<url value="http://weather.msn.com/"/>
<title>weather</title>
</link>
</links>
<links>
<link type="events">
<url value="http://my.msn.com/customizemodule.armx?id=11133"/>
<title>Events</title>
</link>
</links>
</cm>
</cat>
<cat>
<cm name="headline">
<?php
$html = "";
$url = "https://news.google.com/rss?hl=en-US&gl=en&ceid=US:en";
$xml = simplexml_load_file($url);
for($i = 0; $i < 10; $i++){
    $title = $xml->channel->item[$i]->title;
    $link = $xml->channel->item[$i]->link;
    $description = $xml->channel->item[$i]->description;
    $pubDate = $xml->channel->item[$i]->pubDate;

    $html .= '<headline class="headline">';
    $html .= "<title>$title</title>";
    $html .= "<url>$link</url>";
    $html .= "</headline>";
}
echo $html;
?>
</cm>
</cat>
</site>