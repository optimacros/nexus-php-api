# YumProxyRepositoryApiRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | A unique identifier for this repository | 
**online** | **bool** | Whether this repository accepts incoming requests | 
**storage** | [**\Optimacros\NexusPhpApi\Model\StorageAttributes**](StorageAttributes.md) |  | 
**cleanup** | [**\Optimacros\NexusPhpApi\Model\CleanupPolicyAttributes**](CleanupPolicyAttributes.md) |  | [optional] 
**proxy** | [**\Optimacros\NexusPhpApi\Model\ProxyAttributes**](ProxyAttributes.md) |  | 
**negativeCache** | [**\Optimacros\NexusPhpApi\Model\NegativeCacheAttributes**](NegativeCacheAttributes.md) |  | 
**httpClient** | [**\Optimacros\NexusPhpApi\Model\HttpClientAttributes**](HttpClientAttributes.md) |  | 
**routingRule** | **string** |  | [optional] 
**replication** | [**\Optimacros\NexusPhpApi\Model\ReplicationAttributes**](ReplicationAttributes.md) |  | [optional] 
**yumSigning** | [**\Optimacros\NexusPhpApi\Model\YumSigningRepositoriesAttributes**](YumSigningRepositoriesAttributes.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


