# Savvii\OpenproviderRest\TransactionApi

All URIs are relative to https://api.openprovider.eu, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listTransactions()**](TransactionApi.md#listTransactions) | **GET** /v1beta/transactions | List transactions |


## `listTransactions()`

```php
listTransactions($limit, $offset, $order, $order_by, $start_creation_date, $end_creation_date, $filter_for_subject): \Savvii\OpenproviderRest\Model\TransactionListTransactionsResponse
```

List transactions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Savvii\OpenproviderRest\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | The limit.
$offset = 56; // int | The offset.
$order = 'order_example'; // string | The order.
$order_by = 'order_by_example'; // string | The order by.
$start_creation_date = 'start_creation_date_example'; // string | The start creation date.
$end_creation_date = 'end_creation_date_example'; // string | The end creation date.
$filter_for_subject = 'filter_for_subject_example'; // string | The filter for subject.

try {
    $result = $apiInstance->listTransactions($limit, $offset, $order, $order_by, $start_creation_date, $end_creation_date, $filter_for_subject);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->listTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| The limit. | [optional] |
| **offset** | **int**| The offset. | [optional] |
| **order** | **string**| The order. | [optional] |
| **order_by** | **string**| The order by. | [optional] |
| **start_creation_date** | **string**| The start creation date. | [optional] |
| **end_creation_date** | **string**| The end creation date. | [optional] |
| **filter_for_subject** | **string**| The filter for subject. | [optional] |

### Return type

[**\Savvii\OpenproviderRest\Model\TransactionListTransactionsResponse**](../Model/TransactionListTransactionsResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
