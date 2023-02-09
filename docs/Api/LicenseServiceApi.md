# Savvii\OpenproviderRest\LicenseServiceApi

All URIs are relative to https://api.openprovider.eu, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPleskLicense()**](LicenseServiceApi.md#createPleskLicense) | **POST** /v1beta/licenses/plesk | Create plesk license |
| [**createVirtuozzoLicense()**](LicenseServiceApi.md#createVirtuozzoLicense) | **POST** /v1beta/licenses/virtuozzo | Create virtuozzo license |
| [**deletePleskLicense()**](LicenseServiceApi.md#deletePleskLicense) | **DELETE** /v1beta/licenses/plesk/{key_id} | Delete plesk license |
| [**deleteVirtuozzoLicense()**](LicenseServiceApi.md#deleteVirtuozzoLicense) | **DELETE** /v1beta/licenses/virtuozzo/{key_id} | Delete virtuozzo license |
| [**getPleskKey()**](LicenseServiceApi.md#getPleskKey) | **GET** /v1beta/licenses/plesk/key/{key_id} | Get plesk key |
| [**getPleskLicense()**](LicenseServiceApi.md#getPleskLicense) | **GET** /v1beta/licenses/plesk/{key_id} | Get plesk license |
| [**getVirtuozzoKey()**](LicenseServiceApi.md#getVirtuozzoKey) | **GET** /v1beta/licenses/virtuozzo/{key_id}/key | Get virtuozzo key |
| [**getVirtuozzoLicense()**](LicenseServiceApi.md#getVirtuozzoLicense) | **GET** /v1beta/licenses/virtuozzo/{key_id} | Get virtuozzo license |
| [**listItems()**](LicenseServiceApi.md#listItems) | **GET** /v1beta/licenses/items | List items |
| [**listLicensesWithPriceVersion()**](LicenseServiceApi.md#listLicensesWithPriceVersion) | **GET** /v1beta/licenses | List licenses with price version |
| [**listPleskLicenses()**](LicenseServiceApi.md#listPleskLicenses) | **GET** /v1beta/licenses/plesk | List plesk licenses |
| [**listVirtuozzoLicenses()**](LicenseServiceApi.md#listVirtuozzoLicenses) | **GET** /v1beta/licenses/virtuozzo | List virtuozzo licenses |
| [**resetHwid()**](LicenseServiceApi.md#resetHwid) | **POST** /v1beta/licenses/hwids/reset/{product}/{key_id} | Reset hwid |
| [**updatePleskLicense()**](LicenseServiceApi.md#updatePleskLicense) | **PUT** /v1beta/licenses/plesk/{key_id} | Update plesk license |
| [**updateVirtuozzoLicense()**](LicenseServiceApi.md#updateVirtuozzoLicense) | **PUT** /v1beta/licenses/virtuozzo/{key_id} | Update virtuozzo license |


## `createPleskLicense()`

```php
createPleskLicense($body): \Savvii\OpenproviderRest\Model\LicenseCreatePleskLicenseResponse
```

Create plesk license

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Savvii\OpenproviderRest\Api\LicenseServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Savvii\OpenproviderRest\Model\LicenseCreatePleskLicenseRequest(); // \Savvii\OpenproviderRest\Model\LicenseCreatePleskLicenseRequest

try {
    $result = $apiInstance->createPleskLicense($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicenseServiceApi->createPleskLicense: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\Savvii\OpenproviderRest\Model\LicenseCreatePleskLicenseRequest**](../Model/LicenseCreatePleskLicenseRequest.md)|  | |

### Return type

[**\Savvii\OpenproviderRest\Model\LicenseCreatePleskLicenseResponse**](../Model/LicenseCreatePleskLicenseResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createVirtuozzoLicense()`

```php
createVirtuozzoLicense($body): \Savvii\OpenproviderRest\Model\LicenseCreateVirtuozzoLicenseResponse
```

Create virtuozzo license

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Savvii\OpenproviderRest\Api\LicenseServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Savvii\OpenproviderRest\Model\LicenseCreateVirtuozzoLicenseRequest(); // \Savvii\OpenproviderRest\Model\LicenseCreateVirtuozzoLicenseRequest

try {
    $result = $apiInstance->createVirtuozzoLicense($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicenseServiceApi->createVirtuozzoLicense: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\Savvii\OpenproviderRest\Model\LicenseCreateVirtuozzoLicenseRequest**](../Model/LicenseCreateVirtuozzoLicenseRequest.md)|  | |

### Return type

[**\Savvii\OpenproviderRest\Model\LicenseCreateVirtuozzoLicenseResponse**](../Model/LicenseCreateVirtuozzoLicenseResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePleskLicense()`

```php
deletePleskLicense($key_id): \Savvii\OpenproviderRest\Model\LicenseDeleteLicenseResponse
```

Delete plesk license

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Savvii\OpenproviderRest\Api\LicenseServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key_id = 56; // int | License key ID

try {
    $result = $apiInstance->deletePleskLicense($key_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicenseServiceApi->deletePleskLicense: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key_id** | **int**| License key ID | |

### Return type

[**\Savvii\OpenproviderRest\Model\LicenseDeleteLicenseResponse**](../Model/LicenseDeleteLicenseResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteVirtuozzoLicense()`

```php
deleteVirtuozzoLicense($key_id): \Savvii\OpenproviderRest\Model\LicenseDeleteLicenseResponse
```

Delete virtuozzo license

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Savvii\OpenproviderRest\Api\LicenseServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key_id = 56; // int | License key ID

try {
    $result = $apiInstance->deleteVirtuozzoLicense($key_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicenseServiceApi->deleteVirtuozzoLicense: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key_id** | **int**| License key ID | |

### Return type

[**\Savvii\OpenproviderRest\Model\LicenseDeleteLicenseResponse**](../Model/LicenseDeleteLicenseResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPleskKey()`

```php
getPleskKey($key_id): \Savvii\OpenproviderRest\Model\LicenseGetLicenseKeyResponse
```

Get plesk key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Savvii\OpenproviderRest\Api\LicenseServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key_id = 56; // int | License key ID

try {
    $result = $apiInstance->getPleskKey($key_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicenseServiceApi->getPleskKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key_id** | **int**| License key ID | |

### Return type

[**\Savvii\OpenproviderRest\Model\LicenseGetLicenseKeyResponse**](../Model/LicenseGetLicenseKeyResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPleskLicense()`

```php
getPleskLicense($key_id): \Savvii\OpenproviderRest\Model\LicenseGetLicenseResponse
```

Get plesk license

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Savvii\OpenproviderRest\Api\LicenseServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key_id = 56; // int | License key ID

try {
    $result = $apiInstance->getPleskLicense($key_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicenseServiceApi->getPleskLicense: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key_id** | **int**| License key ID | |

### Return type

[**\Savvii\OpenproviderRest\Model\LicenseGetLicenseResponse**](../Model/LicenseGetLicenseResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVirtuozzoKey()`

```php
getVirtuozzoKey($key_id): \Savvii\OpenproviderRest\Model\LicenseGetLicenseKeyResponse
```

Get virtuozzo key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Savvii\OpenproviderRest\Api\LicenseServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key_id = 56; // int | License key ID

try {
    $result = $apiInstance->getVirtuozzoKey($key_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicenseServiceApi->getVirtuozzoKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key_id** | **int**| License key ID | |

### Return type

[**\Savvii\OpenproviderRest\Model\LicenseGetLicenseKeyResponse**](../Model/LicenseGetLicenseKeyResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVirtuozzoLicense()`

```php
getVirtuozzoLicense($key_id): \Savvii\OpenproviderRest\Model\LicenseGetLicenseResponse
```

Get virtuozzo license

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Savvii\OpenproviderRest\Api\LicenseServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key_id = 56; // int | License key ID

try {
    $result = $apiInstance->getVirtuozzoLicense($key_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicenseServiceApi->getVirtuozzoLicense: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key_id** | **int**| License key ID | |

### Return type

[**\Savvii\OpenproviderRest\Model\LicenseGetLicenseResponse**](../Model/LicenseGetLicenseResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listItems()`

```php
listItems($limit, $offset, $order_by_id, $order_by_key_id, $order_by_title, $order_by_product, $order_by_status, $order_by_key_number, $order_by_expiration_date, $product): \Savvii\OpenproviderRest\Model\LicenseListItemsResponse
```

List items

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Savvii\OpenproviderRest\Api\LicenseServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Output limit.
$offset = 56; // int | Output offset.
$order_by_id = 'order_by_id_example'; // string | Object ID.
$order_by_key_id = 'order_by_key_id_example'; // string | License key ID.
$order_by_title = 'order_by_title_example'; // string | Custom license title.
$order_by_product = 'order_by_product_example'; // string | Product type (only Plesk is available).
$order_by_status = 'order_by_status_example'; // string | License status.
$order_by_key_number = 'order_by_key_number_example'; // string | License key number.
$order_by_expiration_date = 'order_by_expiration_date_example'; // string | License expiration date.
$product = 'product_example'; // string | Product type (only Plesk is available).

try {
    $result = $apiInstance->listItems($limit, $offset, $order_by_id, $order_by_key_id, $order_by_title, $order_by_product, $order_by_status, $order_by_key_number, $order_by_expiration_date, $product);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicenseServiceApi->listItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Output limit. | [optional] |
| **offset** | **int**| Output offset. | [optional] |
| **order_by_id** | **string**| Object ID. | [optional] |
| **order_by_key_id** | **string**| License key ID. | [optional] |
| **order_by_title** | **string**| Custom license title. | [optional] |
| **order_by_product** | **string**| Product type (only Plesk is available). | [optional] |
| **order_by_status** | **string**| License status. | [optional] |
| **order_by_key_number** | **string**| License key number. | [optional] |
| **order_by_expiration_date** | **string**| License expiration date. | [optional] |
| **product** | **string**| Product type (only Plesk is available). | [optional] |

### Return type

[**\Savvii\OpenproviderRest\Model\LicenseListItemsResponse**](../Model/LicenseListItemsResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listLicensesWithPriceVersion()`

```php
listLicensesWithPriceVersion($limit, $offset, $order_by_id, $order_by_key_id, $order_by_title, $order_by_product, $order_by_status, $order_by_key_number, $order_by_expiration_date, $product, $key_number, $title_pattern, $key_number_pattern, $parent_key_id, $status): \Savvii\OpenproviderRest\Model\LicenseListLicensesWithPriceVersionResponse
```

List licenses with price version

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Savvii\OpenproviderRest\Api\LicenseServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Output limit.
$offset = 56; // int | Output offset.
$order_by_id = 'order_by_id_example'; // string | Object ID.
$order_by_key_id = 'order_by_key_id_example'; // string | License key ID.
$order_by_title = 'order_by_title_example'; // string | Custom license title.
$order_by_product = 'order_by_product_example'; // string | Product type (only Plesk is available).
$order_by_status = 'order_by_status_example'; // string | License status.
$order_by_key_number = 'order_by_key_number_example'; // string | License key number.
$order_by_expiration_date = 'order_by_expiration_date_example'; // string | License expiration date.
$product = 'product_example'; // string | Product type (only Plesk is available).
$key_number = 'key_number_example'; // string | License key number.
$title_pattern = 'title_pattern_example'; // string | Custom title pattern. Wildcard (*) can be sued.
$key_number_pattern = 'key_number_pattern_example'; // string | License key number pattern. Wildcard (*) can be used.
$parent_key_id = 56; // int | Key ID of the partent license.
$status = 'status_example'; // string | License status.

try {
    $result = $apiInstance->listLicensesWithPriceVersion($limit, $offset, $order_by_id, $order_by_key_id, $order_by_title, $order_by_product, $order_by_status, $order_by_key_number, $order_by_expiration_date, $product, $key_number, $title_pattern, $key_number_pattern, $parent_key_id, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicenseServiceApi->listLicensesWithPriceVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Output limit. | [optional] |
| **offset** | **int**| Output offset. | [optional] |
| **order_by_id** | **string**| Object ID. | [optional] |
| **order_by_key_id** | **string**| License key ID. | [optional] |
| **order_by_title** | **string**| Custom license title. | [optional] |
| **order_by_product** | **string**| Product type (only Plesk is available). | [optional] |
| **order_by_status** | **string**| License status. | [optional] |
| **order_by_key_number** | **string**| License key number. | [optional] |
| **order_by_expiration_date** | **string**| License expiration date. | [optional] |
| **product** | **string**| Product type (only Plesk is available). | [optional] |
| **key_number** | **string**| License key number. | [optional] |
| **title_pattern** | **string**| Custom title pattern. Wildcard (*) can be sued. | [optional] |
| **key_number_pattern** | **string**| License key number pattern. Wildcard (*) can be used. | [optional] |
| **parent_key_id** | **int**| Key ID of the partent license. | [optional] |
| **status** | **string**| License status. | [optional] |

### Return type

[**\Savvii\OpenproviderRest\Model\LicenseListLicensesWithPriceVersionResponse**](../Model/LicenseListLicensesWithPriceVersionResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPleskLicenses()`

```php
listPleskLicenses($limit, $offset, $key_id, $key_number, $title_pattern, $key_number_pattern, $parent_key_id): \Savvii\OpenproviderRest\Model\LicenseListLicensesResponse
```

List plesk licenses

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Savvii\OpenproviderRest\Api\LicenseServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Output limit.
$offset = 56; // int | Output offset.
$key_id = 56; // int | License key ID.
$key_number = 'key_number_example'; // string | License key number.
$title_pattern = 'title_pattern_example'; // string | Custom title pattern. Wildcard (*) can be used.
$key_number_pattern = 'key_number_pattern_example'; // string | License key number pattern. Wildcard (*) can be used.
$parent_key_id = 56; // int | Key ID of the partent license.

try {
    $result = $apiInstance->listPleskLicenses($limit, $offset, $key_id, $key_number, $title_pattern, $key_number_pattern, $parent_key_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicenseServiceApi->listPleskLicenses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Output limit. | [optional] |
| **offset** | **int**| Output offset. | [optional] |
| **key_id** | **int**| License key ID. | [optional] |
| **key_number** | **string**| License key number. | [optional] |
| **title_pattern** | **string**| Custom title pattern. Wildcard (*) can be used. | [optional] |
| **key_number_pattern** | **string**| License key number pattern. Wildcard (*) can be used. | [optional] |
| **parent_key_id** | **int**| Key ID of the partent license. | [optional] |

### Return type

[**\Savvii\OpenproviderRest\Model\LicenseListLicensesResponse**](../Model/LicenseListLicensesResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listVirtuozzoLicenses()`

```php
listVirtuozzoLicenses($limit, $offset, $key_id, $key_number, $title_pattern, $key_number_pattern, $parent_key_id): \Savvii\OpenproviderRest\Model\LicenseListLicensesResponse
```

List virtuozzo licenses

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Savvii\OpenproviderRest\Api\LicenseServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Output limit.
$offset = 56; // int | Output offset.
$key_id = 56; // int | License key ID.
$key_number = 'key_number_example'; // string | License key number.
$title_pattern = 'title_pattern_example'; // string | Custom title pattern. Wildcard (*) can be used.
$key_number_pattern = 'key_number_pattern_example'; // string | License key number pattern. Wildcard (*) can be used.
$parent_key_id = 56; // int | Key ID of the partent license.

try {
    $result = $apiInstance->listVirtuozzoLicenses($limit, $offset, $key_id, $key_number, $title_pattern, $key_number_pattern, $parent_key_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicenseServiceApi->listVirtuozzoLicenses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Output limit. | [optional] |
| **offset** | **int**| Output offset. | [optional] |
| **key_id** | **int**| License key ID. | [optional] |
| **key_number** | **string**| License key number. | [optional] |
| **title_pattern** | **string**| Custom title pattern. Wildcard (*) can be used. | [optional] |
| **key_number_pattern** | **string**| License key number pattern. Wildcard (*) can be used. | [optional] |
| **parent_key_id** | **int**| Key ID of the partent license. | [optional] |

### Return type

[**\Savvii\OpenproviderRest\Model\LicenseListLicensesResponse**](../Model/LicenseListLicensesResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resetHwid()`

```php
resetHwid($product, $key_id, $body): \Savvii\OpenproviderRest\Model\LicenseResetHwidResponse
```

Reset hwid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Savvii\OpenproviderRest\Api\LicenseServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product = 'product_example'; // string | Product type (only Plesk is available)
$key_id = 56; // int | License key ID
$body = new \Savvii\OpenproviderRest\Model\LicenseResetHwidRequest(); // \Savvii\OpenproviderRest\Model\LicenseResetHwidRequest

try {
    $result = $apiInstance->resetHwid($product, $key_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicenseServiceApi->resetHwid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product** | **string**| Product type (only Plesk is available) | |
| **key_id** | **int**| License key ID | |
| **body** | [**\Savvii\OpenproviderRest\Model\LicenseResetHwidRequest**](../Model/LicenseResetHwidRequest.md)|  | |

### Return type

[**\Savvii\OpenproviderRest\Model\LicenseResetHwidResponse**](../Model/LicenseResetHwidResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePleskLicense()`

```php
updatePleskLicense($key_id, $body): \Savvii\OpenproviderRest\Model\LicenseUpdateLicenseResponse
```

Update plesk license

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Savvii\OpenproviderRest\Api\LicenseServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key_id = 56; // int | License key ID
$body = new \Savvii\OpenproviderRest\Model\LicenseUpdatePleskLicenseRequest(); // \Savvii\OpenproviderRest\Model\LicenseUpdatePleskLicenseRequest

try {
    $result = $apiInstance->updatePleskLicense($key_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicenseServiceApi->updatePleskLicense: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key_id** | **int**| License key ID | |
| **body** | [**\Savvii\OpenproviderRest\Model\LicenseUpdatePleskLicenseRequest**](../Model/LicenseUpdatePleskLicenseRequest.md)|  | |

### Return type

[**\Savvii\OpenproviderRest\Model\LicenseUpdateLicenseResponse**](../Model/LicenseUpdateLicenseResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateVirtuozzoLicense()`

```php
updateVirtuozzoLicense($key_id, $body): \Savvii\OpenproviderRest\Model\LicenseUpdateLicenseResponse
```

Update virtuozzo license

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Savvii\OpenproviderRest\Api\LicenseServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key_id = 56; // int | License key ID
$body = new \Savvii\OpenproviderRest\Model\LicenseUpdateVirtuozzoLicenseRequest(); // \Savvii\OpenproviderRest\Model\LicenseUpdateVirtuozzoLicenseRequest

try {
    $result = $apiInstance->updateVirtuozzoLicense($key_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicenseServiceApi->updateVirtuozzoLicense: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key_id** | **int**| License key ID | |
| **body** | [**\Savvii\OpenproviderRest\Model\LicenseUpdateVirtuozzoLicenseRequest**](../Model/LicenseUpdateVirtuozzoLicenseRequest.md)|  | |

### Return type

[**\Savvii\OpenproviderRest\Model\LicenseUpdateLicenseResponse**](../Model/LicenseUpdateLicenseResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
