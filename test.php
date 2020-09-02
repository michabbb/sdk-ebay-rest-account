<?php

use macropage\SDKs\ebay\rest\account\API\FulfillmentPolicyApi;
use macropage\SDKs\ebay\rest\account\ApiException as ApiExceptionAlias;
use macropage\SDKs\ebay\rest\account\Configuration;

require 'vendor/autoload.php';

$Configuration = new Configuration();
$Configuration->setAccessToken('v^1.1#i^1#f^0#p^3#I^3#r^0#t^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');
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
print_r($res);
