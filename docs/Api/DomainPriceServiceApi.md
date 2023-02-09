# Savvii\OpenproviderRest\DomainPriceServiceApi

All URIs are relative to https://api.openprovider.eu, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getPrice()**](DomainPriceServiceApi.md#getPrice) | **GET** /v1beta/domains/prices | Get price |


## `getPrice()`

```php
getPrice($domain_name, $domain_extension, $operation, $additional_data_idn_script, $period): \Savvii\OpenproviderRest\Model\PriceGetPriceResponse
```

Get price

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Savvii\OpenproviderRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Savvii\OpenproviderRest\Api\DomainPriceServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_name = 'domain_name_example'; // string | Domain name without extension.
$domain_extension = 'domain_extension_example'; // string | Domain extension.
$operation = 'operation_example'; // string | Domain operation.
$additional_data_idn_script = 'additional_data_idn_script_example'; // string | The idn script states what language or character set the domain name is in Applicable to: .actor, .ae.org, .airforce, .army, .art, .attorney, .auction, .band, .bar, .best, .br.com, .ceo, .cn.com, .college, .com, .com.de, .com.se, .consulting, .dance, .de.com, .degree, .democrat, .dentist, .design, .engineer, .eu.com, .eus, .feedback, .fm, .forsale, .frl, .fun, .futbol, .gal, .gb.net, .gives, .gr.com, .haus, .hiv, .host, .immobilien, .in.net, .info, .ink, .jp.net, .jpn.com, .kaufen, .kyoto, .lawyer, .love, .market, .me, .mex.com, .moda, .mortgage, .navy, .net, .ninja, .nrw, .online, .ooo, .org, .press, .protection, .pub, .pw, .quebec, .radio.am, .radio.fm, .realty, .rehab, .rent, .republican, .rest, .reviews, .rip, .rocks, .ru.com, .sa.com, .scot, .se.net, .security, .site, .social, .software, .space, .store, .tech, .theatre, .tickets, .top, .uk.com, .uk.net, .us.com, .us.org, .vet, .website, .wiki, .xn--4gbrim, .xn--55qx5d, .xn--5tzm5g, .xn--80asehdb, .xn--80aswg, .xn--c1avg, .xn--czru2d, .xn--i1b6b1a6a2e, .xn--io0a7i, .xn--mk1bu44c, .xn--ngbc5azd, .xn--nqv7f, .xn--t60b56a, .xn--tckwe, .xyz, .za.com.
$period = 56; // int | Operation period.

try {
    $result = $apiInstance->getPrice($domain_name, $domain_extension, $operation, $additional_data_idn_script, $period);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainPriceServiceApi->getPrice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_name** | **string**| Domain name without extension. | [optional] |
| **domain_extension** | **string**| Domain extension. | [optional] |
| **operation** | **string**| Domain operation. | [optional] |
| **additional_data_idn_script** | **string**| The idn script states what language or character set the domain name is in Applicable to: .actor, .ae.org, .airforce, .army, .art, .attorney, .auction, .band, .bar, .best, .br.com, .ceo, .cn.com, .college, .com, .com.de, .com.se, .consulting, .dance, .de.com, .degree, .democrat, .dentist, .design, .engineer, .eu.com, .eus, .feedback, .fm, .forsale, .frl, .fun, .futbol, .gal, .gb.net, .gives, .gr.com, .haus, .hiv, .host, .immobilien, .in.net, .info, .ink, .jp.net, .jpn.com, .kaufen, .kyoto, .lawyer, .love, .market, .me, .mex.com, .moda, .mortgage, .navy, .net, .ninja, .nrw, .online, .ooo, .org, .press, .protection, .pub, .pw, .quebec, .radio.am, .radio.fm, .realty, .rehab, .rent, .republican, .rest, .reviews, .rip, .rocks, .ru.com, .sa.com, .scot, .se.net, .security, .site, .social, .software, .space, .store, .tech, .theatre, .tickets, .top, .uk.com, .uk.net, .us.com, .us.org, .vet, .website, .wiki, .xn--4gbrim, .xn--55qx5d, .xn--5tzm5g, .xn--80asehdb, .xn--80aswg, .xn--c1avg, .xn--czru2d, .xn--i1b6b1a6a2e, .xn--io0a7i, .xn--mk1bu44c, .xn--ngbc5azd, .xn--nqv7f, .xn--t60b56a, .xn--tckwe, .xyz, .za.com. | [optional] |
| **period** | **int**| Operation period. | [optional] |

### Return type

[**\Savvii\OpenproviderRest\Model\PriceGetPriceResponse**](../Model/PriceGetPriceResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
