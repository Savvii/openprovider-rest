<?php
/**
 * ZoneRecordServiceApi
 * PHP version 7.4
 *
 * @category Class
 * @package  Savvii\OpenproviderRest
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * REST API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0-beta
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Savvii\OpenproviderRest\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Savvii\OpenproviderRest\ApiException;
use Savvii\OpenproviderRest\Configuration;
use Savvii\OpenproviderRest\HeaderSelector;
use Savvii\OpenproviderRest\ObjectSerializer;

/**
 * ZoneRecordServiceApi Class Doc Comment
 *
 * @category Class
 * @package  Savvii\OpenproviderRest
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ZoneRecordServiceApi
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

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'listZoneRecords' => [
            'application/json',
        ],
    ];

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
     * Operation listZoneRecords
     *
     * List zone records
     *
     * @param  string $name DNS record name (required)
     * @param  int $zone_id DNS zone ID. (optional)
     * @param  int $limit How many records to retrieve (default: 100, max 500). (optional, default to 100)
     * @param  int $offset From which record to retrieve (default: 0). (optional)
     * @param  string $order_by_type Sorting type (asc/desc). (optional, default to 'asc')
     * @param  string $order_by_name Sorting type (asc/desc). (optional, default to 'asc')
     * @param  string $order_by_value Sorting type (asc/desc). (optional)
     * @param  string $order_by_ttl Sorting type (asc/desc). (optional)
     * @param  string $order_by_prio Sorting type (asc/desc). (optional)
     * @param  string $record_name_pattern DNS record name pattern. Wildcard (*) can be used. (optional)
     * @param  string $value_pattern DNS record value pattern. Wildcard (*) can be used. (optional)
     * @param  string $type DNS record type. (optional)
     * @param  int $prio DNS record priority. (optional)
     * @param  int $ttl DNS record TTL. (optional)
     * @param  string $zone_provider Name of the DNS provider. Set zone_provider&#x3D;sectigo in case of only sectigo premium DNS zone records should be retrieved. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listZoneRecords'] to see the possible values for this operation
     *
     * @throws \Savvii\OpenproviderRest\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Savvii\OpenproviderRest\Model\RecordListZoneRecordsResponse|\Savvii\OpenproviderRest\Model\ErrorError
     */
    public function listZoneRecords($name, $zone_id = null, $limit = 100, $offset = null, $order_by_type = 'asc', $order_by_name = 'asc', $order_by_value = null, $order_by_ttl = null, $order_by_prio = null, $record_name_pattern = null, $value_pattern = null, $type = null, $prio = null, $ttl = null, $zone_provider = null, string $contentType = self::contentTypes['listZoneRecords'][0])
    {
        list($response) = $this->listZoneRecordsWithHttpInfo($name, $zone_id, $limit, $offset, $order_by_type, $order_by_name, $order_by_value, $order_by_ttl, $order_by_prio, $record_name_pattern, $value_pattern, $type, $prio, $ttl, $zone_provider, $contentType);
        return $response;
    }

    /**
     * Operation listZoneRecordsWithHttpInfo
     *
     * List zone records
     *
     * @param  string $name DNS record name (required)
     * @param  int $zone_id DNS zone ID. (optional)
     * @param  int $limit How many records to retrieve (default: 100, max 500). (optional, default to 100)
     * @param  int $offset From which record to retrieve (default: 0). (optional)
     * @param  string $order_by_type Sorting type (asc/desc). (optional, default to 'asc')
     * @param  string $order_by_name Sorting type (asc/desc). (optional, default to 'asc')
     * @param  string $order_by_value Sorting type (asc/desc). (optional)
     * @param  string $order_by_ttl Sorting type (asc/desc). (optional)
     * @param  string $order_by_prio Sorting type (asc/desc). (optional)
     * @param  string $record_name_pattern DNS record name pattern. Wildcard (*) can be used. (optional)
     * @param  string $value_pattern DNS record value pattern. Wildcard (*) can be used. (optional)
     * @param  string $type DNS record type. (optional)
     * @param  int $prio DNS record priority. (optional)
     * @param  int $ttl DNS record TTL. (optional)
     * @param  string $zone_provider Name of the DNS provider. Set zone_provider&#x3D;sectigo in case of only sectigo premium DNS zone records should be retrieved. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listZoneRecords'] to see the possible values for this operation
     *
     * @throws \Savvii\OpenproviderRest\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Savvii\OpenproviderRest\Model\RecordListZoneRecordsResponse|\Savvii\OpenproviderRest\Model\ErrorError, HTTP status code, HTTP response headers (array of strings)
     */
    public function listZoneRecordsWithHttpInfo($name, $zone_id = null, $limit = 100, $offset = null, $order_by_type = 'asc', $order_by_name = 'asc', $order_by_value = null, $order_by_ttl = null, $order_by_prio = null, $record_name_pattern = null, $value_pattern = null, $type = null, $prio = null, $ttl = null, $zone_provider = null, string $contentType = self::contentTypes['listZoneRecords'][0])
    {
        $request = $this->listZoneRecordsRequest($name, $zone_id, $limit, $offset, $order_by_type, $order_by_name, $order_by_value, $order_by_ttl, $order_by_prio, $record_name_pattern, $value_pattern, $type, $prio, $ttl, $zone_provider, $contentType);

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
                    if ('\Savvii\OpenproviderRest\Model\RecordListZoneRecordsResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Savvii\OpenproviderRest\Model\RecordListZoneRecordsResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Savvii\OpenproviderRest\Model\RecordListZoneRecordsResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('\Savvii\OpenproviderRest\Model\ErrorError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Savvii\OpenproviderRest\Model\ErrorError' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Savvii\OpenproviderRest\Model\ErrorError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Savvii\OpenproviderRest\Model\RecordListZoneRecordsResponse';
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
                        '\Savvii\OpenproviderRest\Model\RecordListZoneRecordsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Savvii\OpenproviderRest\Model\ErrorError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listZoneRecordsAsync
     *
     * List zone records
     *
     * @param  string $name DNS record name (required)
     * @param  int $zone_id DNS zone ID. (optional)
     * @param  int $limit How many records to retrieve (default: 100, max 500). (optional, default to 100)
     * @param  int $offset From which record to retrieve (default: 0). (optional)
     * @param  string $order_by_type Sorting type (asc/desc). (optional, default to 'asc')
     * @param  string $order_by_name Sorting type (asc/desc). (optional, default to 'asc')
     * @param  string $order_by_value Sorting type (asc/desc). (optional)
     * @param  string $order_by_ttl Sorting type (asc/desc). (optional)
     * @param  string $order_by_prio Sorting type (asc/desc). (optional)
     * @param  string $record_name_pattern DNS record name pattern. Wildcard (*) can be used. (optional)
     * @param  string $value_pattern DNS record value pattern. Wildcard (*) can be used. (optional)
     * @param  string $type DNS record type. (optional)
     * @param  int $prio DNS record priority. (optional)
     * @param  int $ttl DNS record TTL. (optional)
     * @param  string $zone_provider Name of the DNS provider. Set zone_provider&#x3D;sectigo in case of only sectigo premium DNS zone records should be retrieved. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listZoneRecords'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listZoneRecordsAsync($name, $zone_id = null, $limit = 100, $offset = null, $order_by_type = 'asc', $order_by_name = 'asc', $order_by_value = null, $order_by_ttl = null, $order_by_prio = null, $record_name_pattern = null, $value_pattern = null, $type = null, $prio = null, $ttl = null, $zone_provider = null, string $contentType = self::contentTypes['listZoneRecords'][0])
    {
        return $this->listZoneRecordsAsyncWithHttpInfo($name, $zone_id, $limit, $offset, $order_by_type, $order_by_name, $order_by_value, $order_by_ttl, $order_by_prio, $record_name_pattern, $value_pattern, $type, $prio, $ttl, $zone_provider, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listZoneRecordsAsyncWithHttpInfo
     *
     * List zone records
     *
     * @param  string $name DNS record name (required)
     * @param  int $zone_id DNS zone ID. (optional)
     * @param  int $limit How many records to retrieve (default: 100, max 500). (optional, default to 100)
     * @param  int $offset From which record to retrieve (default: 0). (optional)
     * @param  string $order_by_type Sorting type (asc/desc). (optional, default to 'asc')
     * @param  string $order_by_name Sorting type (asc/desc). (optional, default to 'asc')
     * @param  string $order_by_value Sorting type (asc/desc). (optional)
     * @param  string $order_by_ttl Sorting type (asc/desc). (optional)
     * @param  string $order_by_prio Sorting type (asc/desc). (optional)
     * @param  string $record_name_pattern DNS record name pattern. Wildcard (*) can be used. (optional)
     * @param  string $value_pattern DNS record value pattern. Wildcard (*) can be used. (optional)
     * @param  string $type DNS record type. (optional)
     * @param  int $prio DNS record priority. (optional)
     * @param  int $ttl DNS record TTL. (optional)
     * @param  string $zone_provider Name of the DNS provider. Set zone_provider&#x3D;sectigo in case of only sectigo premium DNS zone records should be retrieved. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listZoneRecords'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listZoneRecordsAsyncWithHttpInfo($name, $zone_id = null, $limit = 100, $offset = null, $order_by_type = 'asc', $order_by_name = 'asc', $order_by_value = null, $order_by_ttl = null, $order_by_prio = null, $record_name_pattern = null, $value_pattern = null, $type = null, $prio = null, $ttl = null, $zone_provider = null, string $contentType = self::contentTypes['listZoneRecords'][0])
    {
        $returnType = '\Savvii\OpenproviderRest\Model\RecordListZoneRecordsResponse';
        $request = $this->listZoneRecordsRequest($name, $zone_id, $limit, $offset, $order_by_type, $order_by_name, $order_by_value, $order_by_ttl, $order_by_prio, $record_name_pattern, $value_pattern, $type, $prio, $ttl, $zone_provider, $contentType);

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
     * Create request for operation 'listZoneRecords'
     *
     * @param  string $name DNS record name (required)
     * @param  int $zone_id DNS zone ID. (optional)
     * @param  int $limit How many records to retrieve (default: 100, max 500). (optional, default to 100)
     * @param  int $offset From which record to retrieve (default: 0). (optional)
     * @param  string $order_by_type Sorting type (asc/desc). (optional, default to 'asc')
     * @param  string $order_by_name Sorting type (asc/desc). (optional, default to 'asc')
     * @param  string $order_by_value Sorting type (asc/desc). (optional)
     * @param  string $order_by_ttl Sorting type (asc/desc). (optional)
     * @param  string $order_by_prio Sorting type (asc/desc). (optional)
     * @param  string $record_name_pattern DNS record name pattern. Wildcard (*) can be used. (optional)
     * @param  string $value_pattern DNS record value pattern. Wildcard (*) can be used. (optional)
     * @param  string $type DNS record type. (optional)
     * @param  int $prio DNS record priority. (optional)
     * @param  int $ttl DNS record TTL. (optional)
     * @param  string $zone_provider Name of the DNS provider. Set zone_provider&#x3D;sectigo in case of only sectigo premium DNS zone records should be retrieved. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listZoneRecords'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function listZoneRecordsRequest($name, $zone_id = null, $limit = 100, $offset = null, $order_by_type = 'asc', $order_by_name = 'asc', $order_by_value = null, $order_by_ttl = null, $order_by_prio = null, $record_name_pattern = null, $value_pattern = null, $type = null, $prio = null, $ttl = null, $zone_provider = null, string $contentType = self::contentTypes['listZoneRecords'][0])
    {

        // verify the required parameter 'name' is set
        if ($name === null || (is_array($name) && count($name) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $name when calling listZoneRecords'
            );
        }
















        $resourcePath = '/v1beta/dns/zones/{name}/records';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $zone_id,
            'zone_id', // param base name
            'integer', // openApiType
            '', // style
            false, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $limit,
            'limit', // param base name
            'integer', // openApiType
            '', // style
            false, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $offset,
            'offset', // param base name
            'integer', // openApiType
            '', // style
            false, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $order_by_type,
            'order_by.type', // param base name
            'string', // openApiType
            '', // style
            false, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $order_by_name,
            'order_by.name', // param base name
            'string', // openApiType
            '', // style
            false, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $order_by_value,
            'order_by.value', // param base name
            'string', // openApiType
            '', // style
            false, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $order_by_ttl,
            'order_by.ttl', // param base name
            'string', // openApiType
            '', // style
            false, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $order_by_prio,
            'order_by.prio', // param base name
            'string', // openApiType
            '', // style
            false, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $record_name_pattern,
            'record_name_pattern', // param base name
            'string', // openApiType
            '', // style
            false, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $value_pattern,
            'value_pattern', // param base name
            'string', // openApiType
            '', // style
            false, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $type,
            'type', // param base name
            'string', // openApiType
            '', // style
            false, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $prio,
            'prio', // param base name
            'integer', // openApiType
            '', // style
            false, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $ttl,
            'ttl', // param base name
            'integer', // openApiType
            '', // style
            false, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $zone_provider,
            'zone_provider', // param base name
            'string', // openApiType
            '', // style
            false, // explode
            false // required
        ) ?? []);


        // path params
        if ($name !== null) {
            $resourcePath = str_replace(
                '{' . 'name' . '}',
                ObjectSerializer::toPathValue($name),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

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

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
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