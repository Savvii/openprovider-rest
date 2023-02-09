# Savvii\OpenproviderRest\SpamExpertApi

All URIs are relative to https://api.openprovider.eu, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**generateLoginURL()**](SpamExpertApi.md#generateLoginURL) | **POST** /v1beta/spam-expert/generate-login-url | Generate login url |


## `generateLoginURL()`

```php
generateLoginURL($body): \Savvii\OpenproviderRest\Model\SpamExpertGenerateLoginURLResponse
```

Generate login url

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Savvii\OpenproviderRest\Api\SpamExpertApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Savvii\OpenproviderRest\Model\SpamExpertGenerateLoginURLRequest(); // \Savvii\OpenproviderRest\Model\SpamExpertGenerateLoginURLRequest

try {
    $result = $apiInstance->generateLoginURL($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpamExpertApi->generateLoginURL: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\Savvii\OpenproviderRest\Model\SpamExpertGenerateLoginURLRequest**](../Model/SpamExpertGenerateLoginURLRequest.md)|  | |

### Return type

[**\Savvii\OpenproviderRest\Model\SpamExpertGenerateLoginURLResponse**](../Model/SpamExpertGenerateLoginURLResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
