# Savvii\OpenproviderRest\NameserverServiceApi

All URIs are relative to https://api.openprovider.eu, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createNameserver()**](NameserverServiceApi.md#createNameserver) | **POST** /v1beta/dns/nameservers | Create nameserver |
| [**deleteNameserver()**](NameserverServiceApi.md#deleteNameserver) | **DELETE** /v1beta/dns/nameservers/{name} | Delete nameserver |
| [**getNameserver()**](NameserverServiceApi.md#getNameserver) | **GET** /v1beta/dns/nameservers/{name} | Get nameserver |
| [**listNameservers()**](NameserverServiceApi.md#listNameservers) | **GET** /v1beta/dns/nameservers | List nameservers |
| [**updateNameserver()**](NameserverServiceApi.md#updateNameserver) | **PUT** /v1beta/dns/nameservers/{name} | Update nameserver |


## `createNameserver()`

```php
createNameserver($body): \Savvii\OpenproviderRest\Model\NameserverCreateNameserverResponse
```

Create nameserver

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Savvii\OpenproviderRest\Api\NameserverServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Savvii\OpenproviderRest\Model\NameserverNameserver(); // \Savvii\OpenproviderRest\Model\NameserverNameserver

try {
    $result = $apiInstance->createNameserver($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NameserverServiceApi->createNameserver: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\Savvii\OpenproviderRest\Model\NameserverNameserver**](../Model/NameserverNameserver.md)|  | |

### Return type

[**\Savvii\OpenproviderRest\Model\NameserverCreateNameserverResponse**](../Model/NameserverCreateNameserverResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteNameserver()`

```php
deleteNameserver($name): \Savvii\OpenproviderRest\Model\NameserverNameserverBoolResponse
```

Delete nameserver

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Savvii\OpenproviderRest\Api\NameserverServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | Nameserver name

try {
    $result = $apiInstance->deleteNameserver($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NameserverServiceApi->deleteNameserver: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Nameserver name | |

### Return type

[**\Savvii\OpenproviderRest\Model\NameserverNameserverBoolResponse**](../Model/NameserverNameserverBoolResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNameserver()`

```php
getNameserver($name): \Savvii\OpenproviderRest\Model\NameserverGetNameserverResponse
```

Get nameserver

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Savvii\OpenproviderRest\Api\NameserverServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | Nameserver name

try {
    $result = $apiInstance->getNameserver($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NameserverServiceApi->getNameserver: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Nameserver name | |

### Return type

[**\Savvii\OpenproviderRest\Model\NameserverGetNameserverResponse**](../Model/NameserverGetNameserverResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listNameservers()`

```php
listNameservers($name, $ip, $ip6, $pattern, $limit, $offset, $order, $order_by): \Savvii\OpenproviderRest\Model\NameserverListNameserversResponse
```

List nameservers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Savvii\OpenproviderRest\Api\NameserverServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | Nameserver name.
$ip = 'ip_example'; // string | Nameserver IP.
$ip6 = 'ip6_example'; // string | Nameserver IPv6.
$pattern = 'pattern_example'; // string | Nameserver name search pattern. Wildcatd (*) can be used.
$limit = 100; // int | Limits the number of objects in the output.
$offset = 'offset_example'; // string | Used to retrieve all objects from a certain offset up to the limit.
$order = 'asc'; // string | Sorting type (asc/desc).
$order_by = 'name'; // string | Field for sorting output. Possible values: id, name.

try {
    $result = $apiInstance->listNameservers($name, $ip, $ip6, $pattern, $limit, $offset, $order, $order_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NameserverServiceApi->listNameservers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Nameserver name. | [optional] |
| **ip** | **string**| Nameserver IP. | [optional] |
| **ip6** | **string**| Nameserver IPv6. | [optional] |
| **pattern** | **string**| Nameserver name search pattern. Wildcatd (*) can be used. | [optional] |
| **limit** | **int**| Limits the number of objects in the output. | [optional] [default to 100] |
| **offset** | **string**| Used to retrieve all objects from a certain offset up to the limit. | [optional] |
| **order** | **string**| Sorting type (asc/desc). | [optional] [default to &#39;asc&#39;] |
| **order_by** | **string**| Field for sorting output. Possible values: id, name. | [optional] [default to &#39;name&#39;] |

### Return type

[**\Savvii\OpenproviderRest\Model\NameserverListNameserversResponse**](../Model/NameserverListNameserversResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNameserver()`

```php
updateNameserver($name, $body): \Savvii\OpenproviderRest\Model\NameserverNameserverBoolResponse
```

Update nameserver

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Savvii\OpenproviderRest\Api\NameserverServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | Nameserver name
$body = new \Savvii\OpenproviderRest\Model\NameserverNameserver(); // \Savvii\OpenproviderRest\Model\NameserverNameserver

try {
    $result = $apiInstance->updateNameserver($name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NameserverServiceApi->updateNameserver: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Nameserver name | |
| **body** | [**\Savvii\OpenproviderRest\Model\NameserverNameserver**](../Model/NameserverNameserver.md)|  | |

### Return type

[**\Savvii\OpenproviderRest\Model\NameserverNameserverBoolResponse**](../Model/NameserverNameserverBoolResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
