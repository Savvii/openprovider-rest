# Savvii\OpenproviderRest\DomainServiceApi

All URIs are relative to https://api.openprovider.eu, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**approveTransfer()**](DomainServiceApi.md#approveTransfer) | **POST** /v1beta/domains/{id}/transfer/approve | Approve transfer |
| [**checkDomain()**](DomainServiceApi.md#checkDomain) | **POST** /v1beta/domains/check | Check domain |
| [**createDomain()**](DomainServiceApi.md#createDomain) | **POST** /v1beta/domains | Create domain |
| [**deleteDomain()**](DomainServiceApi.md#deleteDomain) | **DELETE** /v1beta/domains/{id} | Delete domain |
| [**getDomain()**](DomainServiceApi.md#getDomain) | **GET** /v1beta/domains/{id} | Get domain |
| [**listDomains()**](DomainServiceApi.md#listDomains) | **GET** /v1beta/domains | List domains |
| [**renewDomain()**](DomainServiceApi.md#renewDomain) | **POST** /v1beta/domains/{id}/renew | Renew domain |
| [**restoreDomain()**](DomainServiceApi.md#restoreDomain) | **POST** /v1beta/domains/{id}/restore | Restore domain |
| [**sendFoa1()**](DomainServiceApi.md#sendFoa1) | **POST** /v1beta/domains/{id}/transfer/send-foa1 | Send foa1 |
| [**suggestNameDomain()**](DomainServiceApi.md#suggestNameDomain) | **POST** /v1beta/domains/suggest-name | Suggest name domain |
| [**tradeDomain()**](DomainServiceApi.md#tradeDomain) | **POST** /v1beta/domains/trade | Trade domain |
| [**transferDomain()**](DomainServiceApi.md#transferDomain) | **POST** /v1beta/domains/transfer | Transfer domain |
| [**tryAgainLastOperation()**](DomainServiceApi.md#tryAgainLastOperation) | **POST** /v1beta/domains/{id}/last-operation/restart | Try again last operation |
| [**updateDomain()**](DomainServiceApi.md#updateDomain) | **PUT** /v1beta/domains/{id} | Update domain |


## `approveTransfer()`

```php
approveTransfer($id, $body): \Savvii\OpenproviderRest\Model\ResponseBoolResponse
```

Approve transfer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Savvii\OpenproviderRest\Api\DomainServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Domain id number
$body = new \Savvii\OpenproviderRest\Model\DomainApproveTransferRequest(); // \Savvii\OpenproviderRest\Model\DomainApproveTransferRequest

try {
    $result = $apiInstance->approveTransfer($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainServiceApi->approveTransfer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Domain id number | |
| **body** | [**\Savvii\OpenproviderRest\Model\DomainApproveTransferRequest**](../Model/DomainApproveTransferRequest.md)|  | |

### Return type

[**\Savvii\OpenproviderRest\Model\ResponseBoolResponse**](../Model/ResponseBoolResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `checkDomain()`

```php
checkDomain($body): \Savvii\OpenproviderRest\Model\DomainCheckDomainResponse
```

Check domain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Savvii\OpenproviderRest\Api\DomainServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Savvii\OpenproviderRest\Model\DomainCheckDomainRequest(); // \Savvii\OpenproviderRest\Model\DomainCheckDomainRequest

try {
    $result = $apiInstance->checkDomain($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainServiceApi->checkDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\Savvii\OpenproviderRest\Model\DomainCheckDomainRequest**](../Model/DomainCheckDomainRequest.md)|  | |

### Return type

[**\Savvii\OpenproviderRest\Model\DomainCheckDomainResponse**](../Model/DomainCheckDomainResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createDomain()`

```php
createDomain($body): \Savvii\OpenproviderRest\Model\DomainCreateDomainResponse
```

Create domain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Savvii\OpenproviderRest\Api\DomainServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Savvii\OpenproviderRest\Model\DomainCreateDomainRequest(); // \Savvii\OpenproviderRest\Model\DomainCreateDomainRequest

try {
    $result = $apiInstance->createDomain($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainServiceApi->createDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\Savvii\OpenproviderRest\Model\DomainCreateDomainRequest**](../Model/DomainCreateDomainRequest.md)|  | |

### Return type

[**\Savvii\OpenproviderRest\Model\DomainCreateDomainResponse**](../Model/DomainCreateDomainResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteDomain()`

```php
deleteDomain($id, $domain_name, $domain_extension, $type, $skip_soft_quarantine, $force_delete): \Savvii\OpenproviderRest\Model\DomainDeleteDomainResponse
```

Delete domain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Savvii\OpenproviderRest\Api\DomainServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Domain id number
$domain_name = 'domain_name_example'; // string | Domain name without extension.
$domain_extension = 'domain_extension_example'; // string | Domain extension.
$type = 'type_example'; // string | Type of deletion request.
$skip_soft_quarantine = True; // bool | Deletes domain, skipping the soft quarantine.
$force_delete = True; // bool | Force delete domain even if it has glue records.

try {
    $result = $apiInstance->deleteDomain($id, $domain_name, $domain_extension, $type, $skip_soft_quarantine, $force_delete);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainServiceApi->deleteDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Domain id number | |
| **domain_name** | **string**| Domain name without extension. | [optional] |
| **domain_extension** | **string**| Domain extension. | [optional] |
| **type** | **string**| Type of deletion request. | [optional] |
| **skip_soft_quarantine** | **bool**| Deletes domain, skipping the soft quarantine. | [optional] |
| **force_delete** | **bool**| Force delete domain even if it has glue records. | [optional] |

### Return type

[**\Savvii\OpenproviderRest\Model\DomainDeleteDomainResponse**](../Model/DomainDeleteDomainResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDomain()`

```php
getDomain($id, $domain_name, $domain_extension, $with_history, $with_api_history, $with_additional_data, $with_verification_email, $with_abuse_details, $with_whois_privacy_data, $with_registry_statuses, $is_deleted): \Savvii\OpenproviderRest\Model\DomainGetDomainResponse
```

Get domain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Savvii\OpenproviderRest\Api\DomainServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Domain id number
$domain_name = 'domain_name_example'; // string | Domain name without extension.
$domain_extension = 'domain_extension_example'; // string | Domain extension.
$with_history = True; // bool | Returns domain mutations history.
$with_api_history = True; // bool | Returns domain API calls history.
$with_additional_data = True; // bool | Returns domain additional data.
$with_verification_email = True; // bool | Returns information about domain owner email verification status.
$with_abuse_details = True; // bool | Returns domain abuse details.
$with_whois_privacy_data = True; // bool | Returns WPP data.
$with_registry_statuses = True; // bool | Indicates, if registry EPP statuses should be retrieved.
$is_deleted = True; // bool | Indicates whether object is deleted.

try {
    $result = $apiInstance->getDomain($id, $domain_name, $domain_extension, $with_history, $with_api_history, $with_additional_data, $with_verification_email, $with_abuse_details, $with_whois_privacy_data, $with_registry_statuses, $is_deleted);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainServiceApi->getDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Domain id number | |
| **domain_name** | **string**| Domain name without extension. | [optional] |
| **domain_extension** | **string**| Domain extension. | [optional] |
| **with_history** | **bool**| Returns domain mutations history. | [optional] |
| **with_api_history** | **bool**| Returns domain API calls history. | [optional] |
| **with_additional_data** | **bool**| Returns domain additional data. | [optional] |
| **with_verification_email** | **bool**| Returns information about domain owner email verification status. | [optional] |
| **with_abuse_details** | **bool**| Returns domain abuse details. | [optional] |
| **with_whois_privacy_data** | **bool**| Returns WPP data. | [optional] |
| **with_registry_statuses** | **bool**| Indicates, if registry EPP statuses should be retrieved. | [optional] |
| **is_deleted** | **bool**| Indicates whether object is deleted. | [optional] |

### Return type

[**\Savvii\OpenproviderRest\Model\DomainGetDomainResponse**](../Model/DomainGetDomainResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listDomains()`

```php
listDomains($order_by_id, $order_by_domain_name, $order_by_domain_extension, $order_by_order_date, $order_by_active_date, $order_by_expiration_date, $order_by_renewal_date, $order_by_status, $order_by_transfer_date, $limit, $offset, $id, $extension, $renewal_date, $full_name, $domain_name_pattern, $ns_group_pattern, $status, $status_not_equal, $queue_status, $contact_handle, $comment_pattern, $with_history, $with_api_history, $with_additional_data, $application_mode, $with_verification_email, $with_registry_statuses, $response_type, $response_to, $is_deleted): \Savvii\OpenproviderRest\Model\DomainListDomainsResponse
```

List domains

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Savvii\OpenproviderRest\Api\DomainServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_by_id = 'order_by_id_example'; // string | Domain id number.
$order_by_domain_name = 'order_by_domain_name_example'; // string | The domain name.
$order_by_domain_extension = 'order_by_domain_extension_example'; // string | Domain extension.
$order_by_order_date = 'order_by_order_date_example'; // string | The order date.
$order_by_active_date = 'order_by_active_date_example'; // string | The active date.
$order_by_expiration_date = 'order_by_expiration_date_example'; // string | Domain expiration date.
$order_by_renewal_date = 'order_by_renewal_date_example'; // string | Date on which domain will be renewed.
$order_by_status = 'order_by_status_example'; // string | Domain status.
$order_by_transfer_date = 'order_by_transfer_date_example'; // string | The transfer date.
$limit = 56; // int | The limit.
$offset = 56; // int | The offset.
$id = 56; // int | Domain id number.
$extension = 'extension_example'; // string | Domain extension.
$renewal_date = 'renewal_date_example'; // string | Date on which domain will be renewed.
$full_name = 'full_name_example'; // string | Full name of the domain.
$domain_name_pattern = 'domain_name_pattern_example'; // string | The domain name pattern.
$ns_group_pattern = 'ns_group_pattern_example'; // string | Nameserver group name pattern.
$status = 'status_example'; // string | Domain status.
$status_not_equal = array('status_not_equal_example'); // string[] | Array of domain statuses to exclude.
$queue_status = 'queue_status_example'; // string | The queue status.
$contact_handle = 'contact_handle_example'; // string | Handle to filter by.
$comment_pattern = 'comment_pattern_example'; // string | The comment pattern.
$with_history = True; // bool | With history.
$with_api_history = True; // bool | With api history.
$with_additional_data = True; // bool | With additional data.
$application_mode = 'application_mode_example'; // string | When new gTLD is started it gets through several phases before it becomes available for registration to everybody (General availability or GA). There are several phases before GA when it is still possible to apply for a domain, but with some restrictions.
$with_verification_email = True; // bool | Returns information about domain owner email verification status.
$with_registry_statuses = True; // bool | Indicates, if registry EPP statuses should be retrieved.
$response_type = 'response_type_example'; // string | The type.
$response_to = 'response_to_example'; // string | The to.
$is_deleted = True; // bool | Indicates whether object is deleted.

try {
    $result = $apiInstance->listDomains($order_by_id, $order_by_domain_name, $order_by_domain_extension, $order_by_order_date, $order_by_active_date, $order_by_expiration_date, $order_by_renewal_date, $order_by_status, $order_by_transfer_date, $limit, $offset, $id, $extension, $renewal_date, $full_name, $domain_name_pattern, $ns_group_pattern, $status, $status_not_equal, $queue_status, $contact_handle, $comment_pattern, $with_history, $with_api_history, $with_additional_data, $application_mode, $with_verification_email, $with_registry_statuses, $response_type, $response_to, $is_deleted);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainServiceApi->listDomains: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_by_id** | **string**| Domain id number. | [optional] |
| **order_by_domain_name** | **string**| The domain name. | [optional] |
| **order_by_domain_extension** | **string**| Domain extension. | [optional] |
| **order_by_order_date** | **string**| The order date. | [optional] |
| **order_by_active_date** | **string**| The active date. | [optional] |
| **order_by_expiration_date** | **string**| Domain expiration date. | [optional] |
| **order_by_renewal_date** | **string**| Date on which domain will be renewed. | [optional] |
| **order_by_status** | **string**| Domain status. | [optional] |
| **order_by_transfer_date** | **string**| The transfer date. | [optional] |
| **limit** | **int**| The limit. | [optional] |
| **offset** | **int**| The offset. | [optional] |
| **id** | **int**| Domain id number. | [optional] |
| **extension** | **string**| Domain extension. | [optional] |
| **renewal_date** | **string**| Date on which domain will be renewed. | [optional] |
| **full_name** | **string**| Full name of the domain. | [optional] |
| **domain_name_pattern** | **string**| The domain name pattern. | [optional] |
| **ns_group_pattern** | **string**| Nameserver group name pattern. | [optional] |
| **status** | **string**| Domain status. | [optional] |
| **status_not_equal** | [**string[]**](../Model/string.md)| Array of domain statuses to exclude. | [optional] |
| **queue_status** | **string**| The queue status. | [optional] |
| **contact_handle** | **string**| Handle to filter by. | [optional] |
| **comment_pattern** | **string**| The comment pattern. | [optional] |
| **with_history** | **bool**| With history. | [optional] |
| **with_api_history** | **bool**| With api history. | [optional] |
| **with_additional_data** | **bool**| With additional data. | [optional] |
| **application_mode** | **string**| When new gTLD is started it gets through several phases before it becomes available for registration to everybody (General availability or GA). There are several phases before GA when it is still possible to apply for a domain, but with some restrictions. | [optional] |
| **with_verification_email** | **bool**| Returns information about domain owner email verification status. | [optional] |
| **with_registry_statuses** | **bool**| Indicates, if registry EPP statuses should be retrieved. | [optional] |
| **response_type** | **string**| The type. | [optional] |
| **response_to** | **string**| The to. | [optional] |
| **is_deleted** | **bool**| Indicates whether object is deleted. | [optional] |

### Return type

[**\Savvii\OpenproviderRest\Model\DomainListDomainsResponse**](../Model/DomainListDomainsResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `renewDomain()`

```php
renewDomain($id, $body): \Savvii\OpenproviderRest\Model\DomainRenewDomainResponse
```

Renew domain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Savvii\OpenproviderRest\Api\DomainServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Domain id number
$body = new \Savvii\OpenproviderRest\Model\DomainRenewDomainRequest(); // \Savvii\OpenproviderRest\Model\DomainRenewDomainRequest

try {
    $result = $apiInstance->renewDomain($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainServiceApi->renewDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Domain id number | |
| **body** | [**\Savvii\OpenproviderRest\Model\DomainRenewDomainRequest**](../Model/DomainRenewDomainRequest.md)|  | |

### Return type

[**\Savvii\OpenproviderRest\Model\DomainRenewDomainResponse**](../Model/DomainRenewDomainResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restoreDomain()`

```php
restoreDomain($id, $body): \Savvii\OpenproviderRest\Model\DomainRestoreDomainResponse
```

Restore domain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Savvii\OpenproviderRest\Api\DomainServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Domain id number
$body = new \Savvii\OpenproviderRest\Model\DomainRestoreDomainRequest(); // \Savvii\OpenproviderRest\Model\DomainRestoreDomainRequest

try {
    $result = $apiInstance->restoreDomain($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainServiceApi->restoreDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Domain id number | |
| **body** | [**\Savvii\OpenproviderRest\Model\DomainRestoreDomainRequest**](../Model/DomainRestoreDomainRequest.md)|  | |

### Return type

[**\Savvii\OpenproviderRest\Model\DomainRestoreDomainResponse**](../Model/DomainRestoreDomainResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendFoa1()`

```php
sendFoa1($id, $body): \Savvii\OpenproviderRest\Model\ResponseBoolResponse
```

Send foa1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Savvii\OpenproviderRest\Api\DomainServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Domain id number
$body = new \Savvii\OpenproviderRest\Model\DomainSendFoa1Request(); // \Savvii\OpenproviderRest\Model\DomainSendFoa1Request

try {
    $result = $apiInstance->sendFoa1($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainServiceApi->sendFoa1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Domain id number | |
| **body** | [**\Savvii\OpenproviderRest\Model\DomainSendFoa1Request**](../Model/DomainSendFoa1Request.md)|  | |

### Return type

[**\Savvii\OpenproviderRest\Model\ResponseBoolResponse**](../Model/ResponseBoolResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `suggestNameDomain()`

```php
suggestNameDomain($body): \Savvii\OpenproviderRest\Model\DomainSuggestNameDomainResponse
```

Suggest name domain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Savvii\OpenproviderRest\Api\DomainServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Savvii\OpenproviderRest\Model\DomainSuggestNameDomainRequest(); // \Savvii\OpenproviderRest\Model\DomainSuggestNameDomainRequest

try {
    $result = $apiInstance->suggestNameDomain($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainServiceApi->suggestNameDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\Savvii\OpenproviderRest\Model\DomainSuggestNameDomainRequest**](../Model/DomainSuggestNameDomainRequest.md)|  | |

### Return type

[**\Savvii\OpenproviderRest\Model\DomainSuggestNameDomainResponse**](../Model/DomainSuggestNameDomainResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tradeDomain()`

```php
tradeDomain($body): \Savvii\OpenproviderRest\Model\DomainTradeDomainResponse
```

Trade domain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Savvii\OpenproviderRest\Api\DomainServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Savvii\OpenproviderRest\Model\DomainTradeDomainRequest(); // \Savvii\OpenproviderRest\Model\DomainTradeDomainRequest

try {
    $result = $apiInstance->tradeDomain($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainServiceApi->tradeDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\Savvii\OpenproviderRest\Model\DomainTradeDomainRequest**](../Model/DomainTradeDomainRequest.md)|  | |

### Return type

[**\Savvii\OpenproviderRest\Model\DomainTradeDomainResponse**](../Model/DomainTradeDomainResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transferDomain()`

```php
transferDomain($body): \Savvii\OpenproviderRest\Model\DomainTransferDomainResponse
```

Transfer domain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Savvii\OpenproviderRest\Api\DomainServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Savvii\OpenproviderRest\Model\DomainTransferDomainRequest(); // \Savvii\OpenproviderRest\Model\DomainTransferDomainRequest

try {
    $result = $apiInstance->transferDomain($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainServiceApi->transferDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\Savvii\OpenproviderRest\Model\DomainTransferDomainRequest**](../Model/DomainTransferDomainRequest.md)|  | |

### Return type

[**\Savvii\OpenproviderRest\Model\DomainTransferDomainResponse**](../Model/DomainTransferDomainResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tryAgainLastOperation()`

```php
tryAgainLastOperation($id, $body): \Savvii\OpenproviderRest\Model\ResponseBoolResponse
```

Try again last operation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Savvii\OpenproviderRest\Api\DomainServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Domain id number
$body = new \Savvii\OpenproviderRest\Model\DomainTryAgainLastOperationRequest(); // \Savvii\OpenproviderRest\Model\DomainTryAgainLastOperationRequest

try {
    $result = $apiInstance->tryAgainLastOperation($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainServiceApi->tryAgainLastOperation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Domain id number | |
| **body** | [**\Savvii\OpenproviderRest\Model\DomainTryAgainLastOperationRequest**](../Model/DomainTryAgainLastOperationRequest.md)|  | |

### Return type

[**\Savvii\OpenproviderRest\Model\ResponseBoolResponse**](../Model/ResponseBoolResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDomain()`

```php
updateDomain($id, $body): \Savvii\OpenproviderRest\Model\DomainUpdateDomainResponse
```

Update domain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Savvii\OpenproviderRest\Api\DomainServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Domain id number
$body = new \Savvii\OpenproviderRest\Model\DomainUpdateDomainRequest(); // \Savvii\OpenproviderRest\Model\DomainUpdateDomainRequest

try {
    $result = $apiInstance->updateDomain($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainServiceApi->updateDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Domain id number | |
| **body** | [**\Savvii\OpenproviderRest\Model\DomainUpdateDomainRequest**](../Model/DomainUpdateDomainRequest.md)|  | |

### Return type

[**\Savvii\OpenproviderRest\Model\DomainUpdateDomainResponse**](../Model/DomainUpdateDomainResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
