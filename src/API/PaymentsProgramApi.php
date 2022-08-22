<?php
/**
 * PaymentsProgramApi
 * PHP version 7.4
 *
 * @category Class
 * @package  macropage\SDKs\ebay\rest\account
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Account API
 *
 * The <b>Account API</b> gives sellers the ability to configure their eBay seller accounts, including the seller's policies (eBay business policies and seller-defined custom policies), opt in and out of eBay seller programs, configure sales tax tables, and get account information.  <br/><br/>For details on the availability of the methods in this API, see <a href=\"/api-docs/sell/account/overview.html#requirements\">Account API requirements and restrictions</a>.
 *
 * The version of the OpenAPI document: v1.8.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.1.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace macropage\SDKs\ebay\rest\account\API;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use macropage\SDKs\ebay\rest\account\ApiException;
use macropage\SDKs\ebay\rest\account\Configuration;
use macropage\SDKs\ebay\rest\account\HeaderSelector;
use macropage\SDKs\ebay\rest\account\ObjectSerializer;

/**
 * PaymentsProgramApi Class Doc Comment
 *
 * @category Class
 * @package  macropage\SDKs\ebay\rest\account
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PaymentsProgramApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getPaymentsProgram
     *
     * @param  string $marketplaceId This path parameter specifies the eBay marketplace of the payments program for which you want to retrieve the seller&#39;s status. (required)
     * @param  string $paymentsProgramType This path parameter specifies the payments program whose status is returned by the call. (required)
     *
     * @throws \macropage\SDKs\ebay\rest\account\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \macropage\SDKs\ebay\rest\account\Model\PaymentsProgramResponse
     */
    public function getPaymentsProgram($marketplaceId, $paymentsProgramType)
    {
        list($response) = $this->getPaymentsProgramWithHttpInfo($marketplaceId, $paymentsProgramType);
        return $response;
    }

    /**
     * Operation getPaymentsProgramWithHttpInfo
     *
     * @param  string $marketplaceId This path parameter specifies the eBay marketplace of the payments program for which you want to retrieve the seller&#39;s status. (required)
     * @param  string $paymentsProgramType This path parameter specifies the payments program whose status is returned by the call. (required)
     *
     * @throws \macropage\SDKs\ebay\rest\account\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \macropage\SDKs\ebay\rest\account\Model\PaymentsProgramResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPaymentsProgramWithHttpInfo($marketplaceId, $paymentsProgramType)
    {
        $request = $this->getPaymentsProgramRequest($marketplaceId, $paymentsProgramType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\macropage\SDKs\ebay\rest\account\Model\PaymentsProgramResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\macropage\SDKs\ebay\rest\account\Model\PaymentsProgramResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\macropage\SDKs\ebay\rest\account\Model\PaymentsProgramResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\macropage\SDKs\ebay\rest\account\Model\PaymentsProgramResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\macropage\SDKs\ebay\rest\account\Model\PaymentsProgramResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getPaymentsProgramAsync
     *
     * @param  string $marketplaceId This path parameter specifies the eBay marketplace of the payments program for which you want to retrieve the seller&#39;s status. (required)
     * @param  string $paymentsProgramType This path parameter specifies the payments program whose status is returned by the call. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPaymentsProgramAsync($marketplaceId, $paymentsProgramType)
    {
        return $this->getPaymentsProgramAsyncWithHttpInfo($marketplaceId, $paymentsProgramType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getPaymentsProgramAsyncWithHttpInfo
     *
     * @param  string $marketplaceId This path parameter specifies the eBay marketplace of the payments program for which you want to retrieve the seller&#39;s status. (required)
     * @param  string $paymentsProgramType This path parameter specifies the payments program whose status is returned by the call. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPaymentsProgramAsyncWithHttpInfo($marketplaceId, $paymentsProgramType)
    {
        $returnType = '\macropage\SDKs\ebay\rest\account\Model\PaymentsProgramResponse';
        $request = $this->getPaymentsProgramRequest($marketplaceId, $paymentsProgramType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getPaymentsProgram'
     *
     * @param  string $marketplaceId This path parameter specifies the eBay marketplace of the payments program for which you want to retrieve the seller&#39;s status. (required)
     * @param  string $paymentsProgramType This path parameter specifies the payments program whose status is returned by the call. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getPaymentsProgramRequest($marketplaceId, $paymentsProgramType)
    {

        // verify the required parameter 'marketplaceId' is set
        if ($marketplaceId === null || (is_array($marketplaceId) && count($marketplaceId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $marketplaceId when calling getPaymentsProgram'
            );
        }

        // verify the required parameter 'paymentsProgramType' is set
        if ($paymentsProgramType === null || (is_array($paymentsProgramType) && count($paymentsProgramType) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $paymentsProgramType when calling getPaymentsProgram'
            );
        }

        $resourcePath = '/payments_program/{marketplace_id}/{payments_program_type}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($marketplaceId !== null) {
            $resourcePath = str_replace(
                '{' . 'marketplace_id' . '}',
                ObjectSerializer::toPathValue($marketplaceId),
                $resourcePath
            );
        }
        // path params
        if ($paymentsProgramType !== null) {
            $resourcePath = str_replace(
                '{' . 'payments_program_type' . '}',
                ObjectSerializer::toPathValue($paymentsProgramType),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
