# Savvii\OpenproviderRest\TldServiceApi

All URIs are relative to https://api.openprovider.eu, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getTld()**](TldServiceApi.md#getTld) | **GET** /v1beta/tlds/{name} | Get tld |
| [**listTlds()**](TldServiceApi.md#listTlds) | **GET** /v1beta/tlds | List tlds |


## `getTld()`

```php
getTld($name, $limit, $offset, $with_description, $with_restrictions, $with_price, $with_level_prices, $with_usage_count, $status): \Savvii\OpenproviderRest\Model\TldGetTldResponse
```

Get tld

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Savvii\OpenproviderRest\Api\TldServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | Extension name
$limit = 56; // int | Search query limit.
$offset = 56; // int | Search query offset.
$with_description = True; // bool | Returns additional extension description.
$with_restrictions = True; // bool | Returns list of extension restrictions.
$with_price = True; // bool | Returns extension prices.
$with_level_prices = True; // bool | Returns extension prices for each Openprovider discount tier.
$with_usage_count = True; // bool | Returns number of domains using specified extension in this account.
$status = array('status_example'); // string[] | Extension status.

try {
    $result = $apiInstance->getTld($name, $limit, $offset, $with_description, $with_restrictions, $with_price, $with_level_prices, $with_usage_count, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TldServiceApi->getTld: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Extension name | |
| **limit** | **int**| Search query limit. | [optional] |
| **offset** | **int**| Search query offset. | [optional] |
| **with_description** | **bool**| Returns additional extension description. | [optional] |
| **with_restrictions** | **bool**| Returns list of extension restrictions. | [optional] |
| **with_price** | **bool**| Returns extension prices. | [optional] |
| **with_level_prices** | **bool**| Returns extension prices for each Openprovider discount tier. | [optional] |
| **with_usage_count** | **bool**| Returns number of domains using specified extension in this account. | [optional] |
| **status** | [**string[]**](../Model/string.md)| Extension status. | [optional] |

### Return type

[**\Savvii\OpenproviderRest\Model\TldGetTldResponse**](../Model/TldGetTldResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTlds()`

```php
listTlds($limit, $offset, $order, $order_by, $extensions, $name_pattern, $only_names, $with_description, $with_restrictions, $with_usage_count, $with_application_mode, $with_price, $with_level_prices, $is_active, $is_new_gtld, $status, $application_mode): \Savvii\OpenproviderRest\Model\TldListTldsResponse
```

List tlds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Savvii\OpenproviderRest\Api\TldServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Search query limit.
$offset = 56; // int | Search query offset.
$order = 'order_example'; // string | Sorts output ASC or DESC.
$order_by = 'order_by_example'; // string | Sorts output by a field.
$extensions = array('extensions_example'); // string[] | Array of extensions.
$name_pattern = 'name_pattern_example'; // string | Extension name pattern. Wildcard (*) can be used.
$only_names = True; // bool | Returns only extension names in the output.
$with_description = True; // bool | Returns additional extension description.
$with_restrictions = True; // bool | Returns list of extension restrictions.
$with_usage_count = True; // bool | Returns number of domains using specified extension in this account.
$with_application_mode = array('with_application_mode_example'); // string[] | Array of extension application modes.
$with_price = True; // bool | Returns extension prices.
$with_level_prices = True; // bool | Returns extension prices for each Openprovider discount tier.
$is_active = True; // bool | Indicates, if extension is active.
$is_new_gtld = True; // bool | Indicates, if extension is a newGTLD.
$status = 'status_example'; // string | Extension status.
$application_mode = 'application_mode_example'; // string | Pre-registration mode.

try {
    $result = $apiInstance->listTlds($limit, $offset, $order, $order_by, $extensions, $name_pattern, $only_names, $with_description, $with_restrictions, $with_usage_count, $with_application_mode, $with_price, $with_level_prices, $is_active, $is_new_gtld, $status, $application_mode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TldServiceApi->listTlds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Search query limit. | [optional] |
| **offset** | **int**| Search query offset. | [optional] |
| **order** | **string**| Sorts output ASC or DESC. | [optional] |
| **order_by** | **string**| Sorts output by a field. | [optional] |
| **extensions** | [**string[]**](../Model/string.md)| Array of extensions. | [optional] |
| **name_pattern** | **string**| Extension name pattern. Wildcard (*) can be used. | [optional] |
| **only_names** | **bool**| Returns only extension names in the output. | [optional] |
| **with_description** | **bool**| Returns additional extension description. | [optional] |
| **with_restrictions** | **bool**| Returns list of extension restrictions. | [optional] |
| **with_usage_count** | **bool**| Returns number of domains using specified extension in this account. | [optional] |
| **with_application_mode** | [**string[]**](../Model/string.md)| Array of extension application modes. | [optional] |
| **with_price** | **bool**| Returns extension prices. | [optional] |
| **with_level_prices** | **bool**| Returns extension prices for each Openprovider discount tier. | [optional] |
| **is_active** | **bool**| Indicates, if extension is active. | [optional] |
| **is_new_gtld** | **bool**| Indicates, if extension is a newGTLD. | [optional] |
| **status** | **string**| Extension status. | [optional] |
| **application_mode** | **string**| Pre-registration mode. | [optional] |

### Return type

[**\Savvii\OpenproviderRest\Model\TldListTldsResponse**](../Model/TldListTldsResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
