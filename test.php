<?php

use macropage\SDKs\ebay\rest\account\API\FulfillmentPolicyApi;
use macropage\SDKs\ebay\rest\account\ApiException as ApiExceptionAlias;
use macropage\SDKs\ebay\rest\account\Configuration;

require 'vendor/autoload.php';

$Configuration = new Configuration();
$Configuration->setAccessToken('v^1.1#i^...........................');
$Configuration->setDebug(true);
$Configuration->setDebugFile('/app/debug.txt');
$FulfillmentPolicyApi = new FulfillmentPolicyApi(
	new GuzzleHttp\Client(),
	$Configuration
);
try {
	$res = $FulfillmentPolicyApi->getFulfillmentPolicies('EBAY_DE');
} catch (ApiExceptionAlias $e) {
	throw new \RuntimeException($e->getMessage());
}
/** @noinspection ForgottenDebugOutputInspection */
print_r($res);
