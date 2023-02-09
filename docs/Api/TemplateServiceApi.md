# Savvii\OpenproviderRest\TemplateServiceApi

All URIs are relative to https://api.openprovider.eu, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createTemplate()**](TemplateServiceApi.md#createTemplate) | **POST** /v1beta/dns/templates | Create template |
| [**deleteTemplate()**](TemplateServiceApi.md#deleteTemplate) | **DELETE** /v1beta/dns/templates/{id} | Delete template |
| [**getTemplate()**](TemplateServiceApi.md#getTemplate) | **GET** /v1beta/dns/templates/{id} | Get template |
| [**listTemplates()**](TemplateServiceApi.md#listTemplates) | **GET** /v1beta/dns/templates | List templates |


## `createTemplate()`

```php
createTemplate($body): \Savvii\OpenproviderRest\Model\TemplateCreateTemplateResponse
```

Create template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Savvii\OpenproviderRest\Api\TemplateServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Savvii\OpenproviderRest\Model\TemplateCreateTemplateRequest(); // \Savvii\OpenproviderRest\Model\TemplateCreateTemplateRequest

try {
    $result = $apiInstance->createTemplate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateServiceApi->createTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\Savvii\OpenproviderRest\Model\TemplateCreateTemplateRequest**](../Model/TemplateCreateTemplateRequest.md)|  | |

### Return type

[**\Savvii\OpenproviderRest\Model\TemplateCreateTemplateResponse**](../Model/TemplateCreateTemplateResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteTemplate()`

```php
deleteTemplate($id): \Savvii\OpenproviderRest\Model\TemplateTemplateBoolResponse
```

Delete template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Savvii\OpenproviderRest\Api\TemplateServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Template ID

try {
    $result = $apiInstance->deleteTemplate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateServiceApi->deleteTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Template ID | |

### Return type

[**\Savvii\OpenproviderRest\Model\TemplateTemplateBoolResponse**](../Model/TemplateTemplateBoolResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTemplate()`

```php
getTemplate($id): \Savvii\OpenproviderRest\Model\TemplateGetTemplateResponse
```

Get template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Savvii\OpenproviderRest\Api\TemplateServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Template ID

try {
    $result = $apiInstance->getTemplate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateServiceApi->getTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Template ID | |

### Return type

[**\Savvii\OpenproviderRest\Model\TemplateGetTemplateResponse**](../Model/TemplateGetTemplateResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTemplates()`

```php
listTemplates($limit, $offset, $order, $order_by, $with_records, $name_pattern): \Savvii\OpenproviderRest\Model\TemplateListTemplatesResponse
```

List templates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Savvii\OpenproviderRest\Api\TemplateServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 100; // int | Limits the number of objects in the output.
$offset = 'offset_example'; // string | Used to retrieve all objects from a certain offset up to the limit.
$order = 'asc'; // string | Sorting type (asc/desc).
$order_by = 'name'; // string | Field for sorting output. Possible value: name.
$with_records = false; // bool | Indicates if DNS records should be retrieved.
$name_pattern = 'name_pattern_example'; // string | Template name pattern. Wildcard (*)can be used.

try {
    $result = $apiInstance->listTemplates($limit, $offset, $order, $order_by, $with_records, $name_pattern);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateServiceApi->listTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Limits the number of objects in the output. | [optional] [default to 100] |
| **offset** | **string**| Used to retrieve all objects from a certain offset up to the limit. | [optional] |
| **order** | **string**| Sorting type (asc/desc). | [optional] [default to &#39;asc&#39;] |
| **order_by** | **string**| Field for sorting output. Possible value: name. | [optional] [default to &#39;name&#39;] |
| **with_records** | **bool**| Indicates if DNS records should be retrieved. | [optional] [default to false] |
| **name_pattern** | **string**| Template name pattern. Wildcard (*)can be used. | [optional] |

### Return type

[**\Savvii\OpenproviderRest\Model\TemplateListTemplatesResponse**](../Model/TemplateListTemplatesResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
