# Savvii\OpenproviderRest\CsrApi

All URIs are relative to https://api.openprovider.eu, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCsr()**](CsrApi.md#createCsr) | **POST** /v1beta/ssl/csr | Create csr |
| [**decodeCsr()**](CsrApi.md#decodeCsr) | **POST** /v1beta/ssl/csr/decode | Decode csr |


## `createCsr()`

```php
createCsr($body): \Savvii\OpenproviderRest\Model\CsrCreateCsrResponse
```

Create csr

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Savvii\OpenproviderRest\Api\CsrApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Savvii\OpenproviderRest\Model\CsrCreateCsrRequest(); // \Savvii\OpenproviderRest\Model\CsrCreateCsrRequest

try {
    $result = $apiInstance->createCsr($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CsrApi->createCsr: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\Savvii\OpenproviderRest\Model\CsrCreateCsrRequest**](../Model/CsrCreateCsrRequest.md)|  | |

### Return type

[**\Savvii\OpenproviderRest\Model\CsrCreateCsrResponse**](../Model/CsrCreateCsrResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `decodeCsr()`

```php
decodeCsr($body): \Savvii\OpenproviderRest\Model\CsrDecodeCsrResponse
```

Decode csr

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Savvii\OpenproviderRest\Api\CsrApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Savvii\OpenproviderRest\Model\CsrDecodeCsrRequest(); // \Savvii\OpenproviderRest\Model\CsrDecodeCsrRequest

try {
    $result = $apiInstance->decodeCsr($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CsrApi->decodeCsr: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\Savvii\OpenproviderRest\Model\CsrDecodeCsrRequest**](../Model/CsrDecodeCsrRequest.md)|  | |

### Return type

[**\Savvii\OpenproviderRest\Model\CsrDecodeCsrResponse**](../Model/CsrDecodeCsrResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
