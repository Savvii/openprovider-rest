# # OrderUpdateOrderRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**approver_email** | **string** | Email for domain ownership verification. Should start with well-known generic name like admin@, hostmater@, administrator@, etc. | [optional]
**autorenew** | **string** |  | [optional]
**csr** | **string** |  | [optional]
**domain_validation_methods** | [**\Savvii\OpenproviderRest\Model\OrderSslOrderDomainValidationMethods[]**](OrderSslOrderDomainValidationMethods.md) |  | [optional]
**enable_dns_automation** | **bool** |  | [optional] [default to false]
**host_names** | **string[]** |  | [optional]
**id** | **int** |  | [optional]
**organization_handle** | **string** |  | [optional]
**signature_hash_algorithm** | **string** |  | [optional]
**software_id** | **string** |  | [optional]
**start_provision** | **bool** |  | [optional]
**technical_handle** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
