# # DomainCreateDomainRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accept_eap_fee** | **float** |  | [optional]
**accept_premium_fee** | **float** |  | [optional]
**additional_data** | [**\Savvii\OpenproviderRest\Model\DomainAdditionalData**](DomainAdditionalData.md) |  | [optional]
**admin_handle** | **string** |  | [optional]
**application_mode** | **string** | When new gTLD is started it gets through several phases before it becomes available for registration to everybody (General availability or GA). There are several phases before GA when it is still possible to apply for a domain, but with some restrictions. | [optional]
**application_notice_id** | **string** |  | [optional]
**application_smd** | **string** |  | [optional]
**auth_code** | **string** |  | [optional]
**autorenew** | **string** |  | [optional]
**billing_handle** | **string** |  | [optional]
**comments** | **string** |  | [optional]
**dnssec_keys** | [**\Savvii\OpenproviderRest\Model\DomainDnssecKey[]**](DomainDnssecKey.md) |  | [optional]
**domain** | [**\Savvii\OpenproviderRest\Model\DomainDomain**](DomainDomain.md) |  | [optional]
**is_dnssec_enabled** | **bool** |  | [optional]
**is_easy_dmarc_enabled** | **bool** |  | [optional] [default to false]
**is_private_whois_enabled** | **bool** |  | [optional]
**is_sectigo_dns_enabled** | **bool** |  | [optional]
**is_spamexperts_enabled** | **bool** |  | [optional]
**name_servers** | [**\Savvii\OpenproviderRest\Model\DomainNameserver[]**](DomainNameserver.md) |  | [optional]
**ns_group** | **string** |  | [optional]
**ns_template_id** | **int** |  | [optional]
**ns_template_name** | **string** |  | [optional]
**owner_handle** | **string** |  | [optional]
**period** | **int** |  | [optional]
**promo_code** | **string** |  | [optional]
**reseller_handle** | **string** |  | [optional]
**tech_handle** | **string** |  | [optional]
**unit** | **string** |  | [optional]
**use_domicile** | **bool** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
