# Savvii\OpenproviderRest\AuthCodeApi

All URIs are relative to https://api.openprovider.eu, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAuthCode()**](AuthCodeApi.md#getAuthCode) | **GET** /v1beta/domains/{id}/authcode | Get auth code |
| [**resetAuthCode()**](AuthCodeApi.md#resetAuthCode) | **POST** /v1beta/domains/{id}/authcode/reset | Reset auth code |


## `getAuthCode()`

```php
getAuthCode($id, $domain_name, $domain_extension, $auth_code_type, $sending_type): \Savvii\OpenproviderRest\Model\AuthcodeGetAuthCodeResponse
```

Get auth code

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Savvii\OpenproviderRest\Api\AuthCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Domain id number
$domain_name = 'domain_name_example'; // string | Domain name without extension.
$domain_extension = 'domain_extension_example'; // string | Domain extension.
$auth_code_type = 'auth_code_type_example'; // string | Type of transfer authorization code. external (default) or internal (for internal transfers between reseller accounts in Openprovider only).
$sending_type = 'sending_type_example'; // string | Indicates how authcode should be provisioned to domain owner. For ru / xn--p1ai domains only. Possible values: sms, email letter.

try {
    $result = $apiInstance->getAuthCode($id, $domain_name, $domain_extension, $auth_code_type, $sending_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthCodeApi->getAuthCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Domain id number | |
| **domain_name** | **string**| Domain name without extension. | [optional] |
| **domain_extension** | **string**| Domain extension. | [optional] |
| **auth_code_type** | **string**| Type of transfer authorization code. external (default) or internal (for internal transfers between reseller accounts in Openprovider only). | [optional] |
| **sending_type** | **string**| Indicates how authcode should be provisioned to domain owner. For ru / xn--p1ai domains only. Possible values: sms, email letter. | [optional] |

### Return type

[**\Savvii\OpenproviderRest\Model\AuthcodeGetAuthCodeResponse**](../Model/AuthcodeGetAuthCodeResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resetAuthCode()`

```php
resetAuthCode($id, $body): \Savvii\OpenproviderRest\Model\AuthcodeResetAuthCodeResponse
```

Reset auth code

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Savvii\OpenproviderRest\Api\AuthCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Domain id number
$body = new \Savvii\OpenproviderRest\Model\AuthcodeResetAuthCodeRequest(); // \Savvii\OpenproviderRest\Model\AuthcodeResetAuthCodeRequest

try {
    $result = $apiInstance->resetAuthCode($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthCodeApi->resetAuthCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Domain id number | |
| **body** | [**\Savvii\OpenproviderRest\Model\AuthcodeResetAuthCodeRequest**](../Model/AuthcodeResetAuthCodeRequest.md)|  | |

### Return type

[**\Savvii\OpenproviderRest\Model\AuthcodeResetAuthCodeResponse**](../Model/AuthcodeResetAuthCodeResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
