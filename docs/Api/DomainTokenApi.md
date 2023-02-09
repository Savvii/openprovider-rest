# Savvii\OpenproviderRest\DomainTokenApi

All URIs are relative to https://api.openprovider.eu, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createToken()**](DomainTokenApi.md#createToken) | **POST** /v1beta/dns/domain-token | Create token |


## `createToken()`

```php
createToken($body): \Savvii\OpenproviderRest\Model\DomainTokenCreateTokenResponse
```

Create token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Savvii\OpenproviderRest\Api\DomainTokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Savvii\OpenproviderRest\Model\DomainTokenCreateTokenRequest(); // \Savvii\OpenproviderRest\Model\DomainTokenCreateTokenRequest

try {
    $result = $apiInstance->createToken($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainTokenApi->createToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\Savvii\OpenproviderRest\Model\DomainTokenCreateTokenRequest**](../Model/DomainTokenCreateTokenRequest.md)|  | |

### Return type

[**\Savvii\OpenproviderRest\Model\DomainTokenCreateTokenResponse**](../Model/DomainTokenCreateTokenResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
