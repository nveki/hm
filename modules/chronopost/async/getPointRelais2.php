<?php
header('Content-type: text/plain');
require('../../../config/config.inc.php');
include_once '../libraries/PointRelaisServiceWSService.php';

$ws = new PointRelaisServiceWSService();
$params = new recherchePointChronopost();
$params->zipCode = Tools::getValue('codePostal');
$accounts = json_decode(Configuration::get('CHRONOPOST_GENERAL_ACCOUNTS'), 1);
$account = $accounts[0];
$params->accountNumber = $account['account'];
$params->password = $account['password'];
$params->address = Tools::getValue('address');

if (Tools::getIsset('city') && Tools::getValue('city') != 'unknown') {
    $params->city = Tools::getValue('city');
}

if (Tools::getIsset('country') && Tools::getValue('country') != 'unknown') {
    $params->countryCode = Tools::getValue('country');
} else {
    $params->countryCode = 'FR';
}

$params->type = Configuration::get('CHRONOPOST_MAP_DROPMODE') ? Configuration::get('CHRONOPOST_MAP_DROPMODE') : 'P';

if (trim(Tools::getValue('carrier'), ",") === Configuration::get('CHRONOPOST_TOSHOPDIRECT_ID')) {
    // ToShop Direct has only dropoff in stores
    $params->type = 'C';
}

$params->service = 'L';
$params->weight = 0;
$params->shippingDate = date('d/m/Y');
$params->maxPointChronopost = 10;
$params->maxDistanceSearch = 40;
$params->holidayTolerant = 1;

if ($params->countryCode == 'FR' || $params->countryCode == 'FX' || $params->countryCode == 'MC') {
    echo Tools::jsonEncode($ws->recherchePointChronopost($params)->return);
} else {
    echo Tools::jsonEncode($ws->recherchePointChronopostInter($params)->return);
}
