<?php
$currentUrl = $_SERVER["REQUEST_URI"];

if (strpos($currentUrl, '?') !== false) {
    $currentUrl = substr($currentUrl, 0, strpos($currentUrl, '?'));
}

$currentUrl = trim($currentUrl, '/');

$urlParts = explode("/", $currentUrl);
$countUrlParts = count($urlParts);

if ($countUrlParts == 1) {
    $url = $urlParts[0];

    $urlFilePath = "./app/$url/index.php";
    if (file_exists($urlFilePath)) {
        require $urlFilePath;
    } else {
        require "./app/index.php";
    }
} else {
    require "./app/index.php";
}
?>