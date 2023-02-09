# Savvii\OpenproviderRest\ResellerServiceApi

All URIs are relative to https://api.openprovider.eu, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getReseller()**](ResellerServiceApi.md#getReseller) | **GET** /v1beta/resellers | Get reseller |
| [**updateReseller()**](ResellerServiceApi.md#updateReseller) | **PUT** /v1beta/resellers/{id} | Update reseller |


## `getReseller()`

```php
getReseller($with_additional_data, $with_statistics, $with_settings, $with_contacts): \Savvii\OpenproviderRest\Model\ResellerGetResellerResponse
```

Get reseller

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Savvii\OpenproviderRest\Api\ResellerServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$with_additional_data = True; // bool | Retrieves objects with (1) or without (0) additional data.
$with_statistics = True; // bool | Indicates if reseller statistics should be retrieved.
$with_settings = True; // bool | Indicates if reseller settings should be retrieved.
$with_contacts = True; // bool | Indicates if reseller contacts should be retrieved.

try {
    $result = $apiInstance->getReseller($with_additional_data, $with_statistics, $with_settings, $with_contacts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResellerServiceApi->getReseller: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **with_additional_data** | **bool**| Retrieves objects with (1) or without (0) additional data. | [optional] |
| **with_statistics** | **bool**| Indicates if reseller statistics should be retrieved. | [optional] |
| **with_settings** | **bool**| Indicates if reseller settings should be retrieved. | [optional] |
| **with_contacts** | **bool**| Indicates if reseller contacts should be retrieved. | [optional] |

### Return type

[**\Savvii\OpenproviderRest\Model\ResellerGetResellerResponse**](../Model/ResellerGetResellerResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateReseller()`

```php
updateReseller($id, $body): \Savvii\OpenproviderRest\Model\ResellerUpdateResellerResponse
```

Update reseller

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Savvii\OpenproviderRest\Api\ResellerServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Object ID
$body = new \Savvii\OpenproviderRest\Model\ResellerUpdateResellerRequest(); // \Savvii\OpenproviderRest\Model\ResellerUpdateResellerRequest

try {
    $result = $apiInstance->updateReseller($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResellerServiceApi->updateReseller: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Object ID | |
| **body** | [**\Savvii\OpenproviderRest\Model\ResellerUpdateResellerRequest**](../Model/ResellerUpdateResellerRequest.md)|  | |

### Return type

[**\Savvii\OpenproviderRest\Model\ResellerUpdateResellerResponse**](../Model/ResellerUpdateResellerResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
