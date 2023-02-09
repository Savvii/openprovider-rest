# Savvii\OpenproviderRest\ApproverEmailApi

All URIs are relative to https://api.openprovider.eu, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listApproverEmails()**](ApproverEmailApi.md#listApproverEmails) | **GET** /v1beta/ssl/approver-emails | List approver emails |


## `listApproverEmails()`

```php
listApproverEmails($product_id, $domain): \Savvii\OpenproviderRest\Model\ApproveremailListApproverEmailsResponse
```

List approver emails

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Savvii\OpenproviderRest\Api\ApproverEmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 56; // int | ID of product order will be created for.
$domain = 'domain_example'; // string | Domain name.

try {
    $result = $apiInstance->listApproverEmails($product_id, $domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApproverEmailApi->listApproverEmails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **int**| ID of product order will be created for. | [optional] |
| **domain** | **string**| Domain name. | [optional] |

### Return type

[**\Savvii\OpenproviderRest\Model\ApproveremailListApproverEmailsResponse**](../Model/ApproveremailListApproverEmailsResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
