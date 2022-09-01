<?php 

$version = '1.0.0';

function IfEmpty($arg, $name)
{
    if ($arg == "")
        return '<p style="color:red"><b style="color:black">' .  $name . ': </b>ERROR</p>';
    else
        return '<p style="color:green"><b style="color:black">' .  $name . ': </b>' . $arg . '</p>';
}

$ID = IfEmpty(filter_var($_GET["id"], FILTER_SANITIZE_STRING), "ZoomID");
$zoomID = filter_var($_GET["id"], FILTER_SANITIZE_STRING);
$PW = IfEmpty(filter_var($_GET["pw"], FILTER_SANITIZE_STRING), "ZoomPW");
$zoomPW = filter_var($_GET["pw"], FILTER_SANITIZE_STRING);
$USR = IfEmpty(filter_var($_GET["usr"], FILTER_SANITIZE_STRING), "ZoomUSR");
$zoomUSR = filter_var($_GET["usr"], FILTER_SANITIZE_STRING);
$SYS = IfEmpty(filter_var($_GET["sys"], FILTER_SANITIZE_STRING), "ZoomSYS");
$zoomSYS = filter_var($_GET["sys"], FILTER_SANITIZE_STRING);


if ($zoomSYS == "mac")
    $start = 'zoommtg://';
elseif ($zoomSYS == "android")
    $start = 'zoomus://';
else 
    $start = 'START';

$url = $start . 'zoom.us/join?confno=' . $zoomID . '&pwd=' . $zoomPW . '&uname=' . $zoomUSR;

header('Location: ' . $url);  
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZoomAPI</title>
</head>
<body>
    <h1>Willkommen bei ZoomAPI</h1>
    <p>Version: <?=$version?></p>
    <?=$ID?>
    <?=$PW?>
    <?=$USR?>
    <?=$SYS?>
    <?=$url?>
</body>
</html>