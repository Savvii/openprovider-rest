# Savvii\OpenproviderRest\ContactServiceApi

All URIs are relative to https://api.openprovider.eu, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createContact()**](ContactServiceApi.md#createContact) | **POST** /v1beta/contacts | Create contact |
| [**deleteContact()**](ContactServiceApi.md#deleteContact) | **DELETE** /v1beta/contacts/{id} | Delete contact |
| [**getContact()**](ContactServiceApi.md#getContact) | **GET** /v1beta/contacts/{id} | Get contact |
| [**listContacts()**](ContactServiceApi.md#listContacts) | **GET** /v1beta/contacts | List contacts |
| [**updateContact()**](ContactServiceApi.md#updateContact) | **PUT** /v1beta/contacts/{id} | Update contact |


## `createContact()`

```php
createContact($body): \Savvii\OpenproviderRest\Model\ContactCreateContactResponse
```

Create contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Savvii\OpenproviderRest\Api\ContactServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Savvii\OpenproviderRest\Model\ContactCreateContactRequest(); // \Savvii\OpenproviderRest\Model\ContactCreateContactRequest

try {
    $result = $apiInstance->createContact($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactServiceApi->createContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\Savvii\OpenproviderRest\Model\ContactCreateContactRequest**](../Model/ContactCreateContactRequest.md)|  | |

### Return type

[**\Savvii\OpenproviderRest\Model\ContactCreateContactResponse**](../Model/ContactCreateContactResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteContact()`

```php
deleteContact($id): \Savvii\OpenproviderRest\Model\ContactDeleteContactResponse
```

Delete contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Savvii\OpenproviderRest\Api\ContactServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Object ID

try {
    $result = $apiInstance->deleteContact($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactServiceApi->deleteContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Object ID | |

### Return type

[**\Savvii\OpenproviderRest\Model\ContactDeleteContactResponse**](../Model/ContactDeleteContactResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContact()`

```php
getContact($id, $with_additional_data): \Savvii\OpenproviderRest\Model\ContactGetContactResponse
```

Get contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Savvii\OpenproviderRest\Api\ContactServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Object ID
$with_additional_data = True; // bool | Retrieves objects with (1) or without (0) additional data.

try {
    $result = $apiInstance->getContact($id, $with_additional_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactServiceApi->getContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Object ID | |
| **with_additional_data** | **bool**| Retrieves objects with (1) or without (0) additional data. | [optional] |

### Return type

[**\Savvii\OpenproviderRest\Model\ContactGetContactResponse**](../Model/ContactGetContactResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listContacts()`

```php
listContacts($limit, $offset, $order, $order_by, $email_pattern, $last_name_pattern, $company_name_pattern, $username_pattern, $role, $with_additional_data): \Savvii\OpenproviderRest\Model\ContactListContactsResponse
```

List contacts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Savvii\OpenproviderRest\Api\ContactServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Output limit.
$offset = 56; // int | Output offset.
$order = 'order_example'; // string | Output ordering pattern. ASC / DESC.
$order_by = 'order_by_example'; // string | Order output by field (i.e. first_name).
$email_pattern = 'email_pattern_example'; // string | Full or partial email address. Wildcard (*) can be used.
$last_name_pattern = 'last_name_pattern_example'; // string | Full or partial last name. Wildcard (*) can be used.
$company_name_pattern = 'company_name_pattern_example'; // string | Full or partial company name. Wildcard (*) can be used.
$username_pattern = 'username_pattern_example'; // string | The username pattern.
$role = 'role_example'; // string | Contact's role.
$with_additional_data = True; // bool | Retrieves objects with (1) or without (0) additional data.

try {
    $result = $apiInstance->listContacts($limit, $offset, $order, $order_by, $email_pattern, $last_name_pattern, $company_name_pattern, $username_pattern, $role, $with_additional_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactServiceApi->listContacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Output limit. | [optional] |
| **offset** | **int**| Output offset. | [optional] |
| **order** | **string**| Output ordering pattern. ASC / DESC. | [optional] |
| **order_by** | **string**| Order output by field (i.e. first_name). | [optional] |
| **email_pattern** | **string**| Full or partial email address. Wildcard (*) can be used. | [optional] |
| **last_name_pattern** | **string**| Full or partial last name. Wildcard (*) can be used. | [optional] |
| **company_name_pattern** | **string**| Full or partial company name. Wildcard (*) can be used. | [optional] |
| **username_pattern** | **string**| The username pattern. | [optional] |
| **role** | **string**| Contact&#39;s role. | [optional] |
| **with_additional_data** | **bool**| Retrieves objects with (1) or without (0) additional data. | [optional] |

### Return type

[**\Savvii\OpenproviderRest\Model\ContactListContactsResponse**](../Model/ContactListContactsResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateContact()`

```php
updateContact($id, $body): \Savvii\OpenproviderRest\Model\ContactUpdateContactResponse
```

Update contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Savvii\OpenproviderRest\Api\ContactServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Object ID
$body = new \Savvii\OpenproviderRest\Model\ContactUpdateContactRequest(); // \Savvii\OpenproviderRest\Model\ContactUpdateContactRequest

try {
    $result = $apiInstance->updateContact($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactServiceApi->updateContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Object ID | |
| **body** | [**\Savvii\OpenproviderRest\Model\ContactUpdateContactRequest**](../Model/ContactUpdateContactRequest.md)|  | |

### Return type

[**\Savvii\OpenproviderRest\Model\ContactUpdateContactResponse**](../Model/ContactUpdateContactResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
