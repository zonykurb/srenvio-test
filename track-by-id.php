#!/usr/bin/php
<?php
require_once 'includes/header.inc.php';

require_once 'includes/credentials.php';
require_once 'includes/generate-classes-from-wsdls.php';

use FedEx\TrackService,
    FedEx\TrackService\ComplexType,
    FedEx\TrackService\SimpleType;

$trackingId = 789227733485;

$userCredential = new ComplexType\WebAuthenticationCredential();
$userCredential->setKey(FEDEX_KEY)
               ->setPassword(FEDEX_PASSWORD);

$webAuthenticationDetail = new ComplexType\WebAuthenticationDetail();
$webAuthenticationDetail->setUserCredential($userCredential);

$clientDetail = new ComplexType\ClientDetail();
$clientDetail->setAccountNumber(FEDEX_ACCOUNT_NUMBER)
    		 ->setMeterNumber(FEDEX_METER_NUMBER);

$version = new ComplexType\VersionId();
$version->setMajor(5)
        ->setIntermediate(0)
        ->setMinor(0)
        ->setServiceId('trck');

$identifier = new ComplexType\TrackPackageIdentifier();
$identifier->setType(SimpleType\TrackIdentifierType::_TRACKING_NUMBER_OR_DOORTAG)
           ->setValue($trackingId);

$request = new ComplexType\TrackRequest();
$request->setWebAuthenticationDetail($webAuthenticationDetail)
        ->setClientDetail($clientDetail)
        ->setVersion($version)
        ->setPackageIdentifier($identifier);

$response = (new TrackService\Request())->getTrackReply($request);

var_dump($response);