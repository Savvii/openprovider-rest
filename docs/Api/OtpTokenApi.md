# Savvii\OpenproviderRest\OtpTokenApi

All URIs are relative to https://api.openprovider.eu, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createOtpToken()**](OtpTokenApi.md#createOtpToken) | **POST** /v1beta/ssl/orders/{id}/otp-tokens | Create otp token |


## `createOtpToken()`

```php
createOtpToken($id, $body): \Savvii\OpenproviderRest\Model\OtptokenCreateOtpTokenResponse
```

Create otp token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Savvii\OpenproviderRest\Api\OtpTokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Object id
$body = new \Savvii\OpenproviderRest\Model\OtptokenCreateOtpTokenRequest(); // \Savvii\OpenproviderRest\Model\OtptokenCreateOtpTokenRequest

try {
    $result = $apiInstance->createOtpToken($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OtpTokenApi->createOtpToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Object id | |
| **body** | [**\Savvii\OpenproviderRest\Model\OtptokenCreateOtpTokenRequest**](../Model/OtptokenCreateOtpTokenRequest.md)|  | |

### Return type

[**\Savvii\OpenproviderRest\Model\OtptokenCreateOtpTokenResponse**](../Model/OtptokenCreateOtpTokenResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
