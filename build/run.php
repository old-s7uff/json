<?php
$get = file_get_contents('https://api.dopehosting.net/namecheap/json/com.json');
$get1 = file_get_contents('https://api.dopehosting.net/namecheap/json/net.json');
$get2 = file_get_contents('https://api.dopehosting.net/namecheap/json/org.json');
$get3 = file_get_contents('https://api.dopehosting.net/namecheap/json/me.json');
$get4 = file_get_contents('https://api.dopehosting.net/namecheap/json/co.json');
$get5 = file_get_contents('https://api.dopehosting.net/namecheap/json/xyz.json');
$get6 = file_get_contents('https://api.dopehosting.net/namecheap/json/io.json');
$get7 = file_get_contents('https://api.dopehosting.net/namecheap/json/sh.json');
$get8 = file_get_contents('https://api.dopehosting.net/namecheap/json/zone.json');
$get9 = file_get_contents('https://api.dopehosting.net/namecheap/json/blog.json');
$get10 = file_get_contents('https://api.dopehosting.net/whmcs/json/clients.json');
$get11 = file_get_contents('https://api.dopehosting.net/whmcs/json/host.json');
$get12 = file_get_contents('https://api.dopehosting.net/whmcs/json/domains.json');

$json = json_decode($get, true);
$json1 = json_decode($get1, true);
$json2 = json_decode($get2, true);
$json3 = json_decode($get3, true);
$json4 = json_decode($get4, true);
$json5 = json_decode($get5, true);
$json6 = json_decode($get6, true);
$json7 = json_decode($get7, true);
$json8 = json_decode($get8, true);
$json9 = json_decode($get9, true);
$json10 = json_decode($get10, true);
$json11 = json_decode($get11, true);
$json12 = json_decode($get12, true);

$com = $json['CommandResponse']['UserGetPricingResult']['ProductType']['ProductCategory']['Product']['Price']['0']['@attributes'];
$net = $json1['CommandResponse']['UserGetPricingResult']['ProductType']['ProductCategory']['Product']['Price']['0']['@attributes'];
$org = $json2['CommandResponse']['UserGetPricingResult']['ProductType']['ProductCategory']['Product']['Price']['0']['@attributes'];
$me = $json3['CommandResponse']['UserGetPricingResult']['ProductType']['ProductCategory']['Product']['Price']['0']['@attributes'];
$co = $json4['CommandResponse']['UserGetPricingResult']['ProductType']['ProductCategory']['Product']['Price']['0']['@attributes'];
$xyz = $json5['CommandResponse']['UserGetPricingResult']['ProductType']['ProductCategory']['Product']['Price']['0']['@attributes'];
$io = $json6['CommandResponse']['UserGetPricingResult']['ProductType']['ProductCategory']['Product']['Price']['0']['@attributes'];
$sh = $json7['CommandResponse']['UserGetPricingResult']['ProductType']['ProductCategory']['Product']['Price']['0']['@attributes'];
$zone = $json8['CommandResponse']['UserGetPricingResult']['ProductType']['ProductCategory']['Product']['Price']['0']['@attributes'];
$blog = $json9['CommandResponse']['UserGetPricingResult']['ProductType']['ProductCategory']['Product']['Price']['0']['@attributes'];
$clients = $json10;
$host = $json11;
$domains = $json12;
?>
<html>
Array
(
    [clients] => ,
    [host] => ,
    [domains] => ,
    [domain]
)
</html>
