# Savvii\OpenproviderRest\CustomerApi

All URIs are relative to https://api.openprovider.eu, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCustomer()**](CustomerApi.md#createCustomer) | **POST** /v1beta/customers | Create customer |
| [**deleteCustomer()**](CustomerApi.md#deleteCustomer) | **DELETE** /v1beta/customers/{handle} | Delete customer |
| [**getCustomer()**](CustomerApi.md#getCustomer) | **GET** /v1beta/customers/{handle} | Get customer |
| [**listCustomers()**](CustomerApi.md#listCustomers) | **GET** /v1beta/customers | List customers |
| [**updateCustomer()**](CustomerApi.md#updateCustomer) | **PUT** /v1beta/customers/{handle} | Update customer |


## `createCustomer()`

```php
createCustomer($body): \Savvii\OpenproviderRest\Model\CustomerCreateCustomerResponse
```

Create customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Savvii\OpenproviderRest\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Savvii\OpenproviderRest\Model\CustomerCreateCustomerRequest(); // \Savvii\OpenproviderRest\Model\CustomerCreateCustomerRequest

try {
    $result = $apiInstance->createCustomer($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->createCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\Savvii\OpenproviderRest\Model\CustomerCreateCustomerRequest**](../Model/CustomerCreateCustomerRequest.md)|  | |

### Return type

[**\Savvii\OpenproviderRest\Model\CustomerCreateCustomerResponse**](../Model/CustomerCreateCustomerResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCustomer()`

```php
deleteCustomer($handle): \Savvii\OpenproviderRest\Model\CustomerDeleteCustomerResponse
```

Delete customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Savvii\OpenproviderRest\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$handle = 'handle_example'; // string | Customer unique identifier or handle, which can be created via CreateCustomer API method

try {
    $result = $apiInstance->deleteCustomer($handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->deleteCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **handle** | **string**| Customer unique identifier or handle, which can be created via CreateCustomer API method | |

### Return type

[**\Savvii\OpenproviderRest\Model\CustomerDeleteCustomerResponse**](../Model/CustomerDeleteCustomerResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomer()`

```php
getCustomer($handle, $with_additional_data): \Savvii\OpenproviderRest\Model\CustomerGetCustomerResponse
```

Get customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Savvii\OpenproviderRest\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$handle = 'handle_example'; // string | Customer unique identifier or handle, which can be created via CreateCustomer API method
$with_additional_data = True; // bool | Retrieves objects with (1) or without (0) additional data.

try {
    $result = $apiInstance->getCustomer($handle, $with_additional_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->getCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **handle** | **string**| Customer unique identifier or handle, which can be created via CreateCustomer API method | |
| **with_additional_data** | **bool**| Retrieves objects with (1) or without (0) additional data. | [optional] |

### Return type

[**\Savvii\OpenproviderRest\Model\CustomerGetCustomerResponse**](../Model/CustomerGetCustomerResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCustomers()`

```php
listCustomers($reseller_id, $limit, $offset, $order, $order_by, $email_pattern, $company_name_pattern, $last_name_pattern, $first_name_pattern, $comment_pattern, $handle_pattern, $pattern, $with_additional_data, $type, $columns): \Savvii\OpenproviderRest\Model\CustomerListCustomersResponse
```

List customers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Savvii\OpenproviderRest\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reseller_id = 56; // int | Your reseller id is used by default. Other values not accepted.
$limit = 56; // int | Output limit.
$offset = 56; // int | Output offset.
$order = 'order_example'; // string | Output ordering pattern. ASC / DESC.
$order_by = 'order_by_example'; // string | Order output by field (i.e. first_name).
$email_pattern = 'email_pattern_example'; // string | Full or partial email address. Wildcard (*) can be used.
$company_name_pattern = 'company_name_pattern_example'; // string | Full or partial company name. Wildcard (*) can be used.
$last_name_pattern = 'last_name_pattern_example'; // string | Full or partial last name. Wildcard (*) can be used.
$first_name_pattern = 'first_name_pattern_example'; // string | Full or partial first name. Wildcard (*) can be used.
$comment_pattern = 'comment_pattern_example'; // string | Full or partial comment value. Wildcard (*) can be used.
$handle_pattern = 'handle_pattern_example'; // string | Full or partial handle name. Wildcard (*) can be used.
$pattern = 'pattern_example'; // string | ull or partial first name or last name or company name or handle. Wildcard (*) can be used.
$with_additional_data = True; // bool | Retrieves objects with (1) or without (0) additional data.
$type = 'type_example'; // string | Customer type: 'company' or 'individual'. If customer has not empty 'companyName' than type is 'company', otherwise 'individual'.
$columns = array('columns_example'); // string[] | Сolumns to retrieve. Possible values: 'firstName', 'prefix', 'initials', 'lastName', 'companyName', 'email', 'handle', 'id', 'fullName'.

try {
    $result = $apiInstance->listCustomers($reseller_id, $limit, $offset, $order, $order_by, $email_pattern, $company_name_pattern, $last_name_pattern, $first_name_pattern, $comment_pattern, $handle_pattern, $pattern, $with_additional_data, $type, $columns);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->listCustomers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **reseller_id** | **int**| Your reseller id is used by default. Other values not accepted. | [optional] |
| **limit** | **int**| Output limit. | [optional] |
| **offset** | **int**| Output offset. | [optional] |
| **order** | **string**| Output ordering pattern. ASC / DESC. | [optional] |
| **order_by** | **string**| Order output by field (i.e. first_name). | [optional] |
| **email_pattern** | **string**| Full or partial email address. Wildcard (*) can be used. | [optional] |
| **company_name_pattern** | **string**| Full or partial company name. Wildcard (*) can be used. | [optional] |
| **last_name_pattern** | **string**| Full or partial last name. Wildcard (*) can be used. | [optional] |
| **first_name_pattern** | **string**| Full or partial first name. Wildcard (*) can be used. | [optional] |
| **comment_pattern** | **string**| Full or partial comment value. Wildcard (*) can be used. | [optional] |
| **handle_pattern** | **string**| Full or partial handle name. Wildcard (*) can be used. | [optional] |
| **pattern** | **string**| ull or partial first name or last name or company name or handle. Wildcard (*) can be used. | [optional] |
| **with_additional_data** | **bool**| Retrieves objects with (1) or without (0) additional data. | [optional] |
| **type** | **string**| Customer type: &#39;company&#39; or &#39;individual&#39;. If customer has not empty &#39;companyName&#39; than type is &#39;company&#39;, otherwise &#39;individual&#39;. | [optional] |
| **columns** | [**string[]**](../Model/string.md)| Сolumns to retrieve. Possible values: &#39;firstName&#39;, &#39;prefix&#39;, &#39;initials&#39;, &#39;lastName&#39;, &#39;companyName&#39;, &#39;email&#39;, &#39;handle&#39;, &#39;id&#39;, &#39;fullName&#39;. | [optional] |

### Return type

[**\Savvii\OpenproviderRest\Model\CustomerListCustomersResponse**](../Model/CustomerListCustomersResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCustomer()`

```php
updateCustomer($handle, $body): \Savvii\OpenproviderRest\Model\CustomerUpdateCustomerResponse
```

Update customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Savvii\OpenproviderRest\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$handle = 'handle_example'; // string | Customer unique identifier or handle, which can be created via CreateCustomer API method
$body = new \Savvii\OpenproviderRest\Model\CustomerUpdateCustomerRequest(); // \Savvii\OpenproviderRest\Model\CustomerUpdateCustomerRequest

try {
    $result = $apiInstance->updateCustomer($handle, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->updateCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **handle** | **string**| Customer unique identifier or handle, which can be created via CreateCustomer API method | |
| **body** | [**\Savvii\OpenproviderRest\Model\CustomerUpdateCustomerRequest**](../Model/CustomerUpdateCustomerRequest.md)|  | |

### Return type

[**\Savvii\OpenproviderRest\Model\CustomerUpdateCustomerResponse**](../Model/CustomerUpdateCustomerResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
