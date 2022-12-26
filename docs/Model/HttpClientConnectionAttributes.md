# HttpClientConnectionAttributes

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**retries** | **int** | Total retries if the initial connection attempt suffers a timeout | [optional] 
**userAgentSuffix** | **string** | Custom fragment to append to User-Agent header in HTTP requests | [optional] 
**timeout** | **int** | Seconds to wait for activity before stopping and retrying the connection | [optional] 
**enableCircularRedirects** | **bool** | Whether to enable redirects to the same location (may be required by some servers) | [optional] 
**enableCookies** | **bool** | Whether to allow cookies to be stored and used | [optional] 
**useTrustStore** | **bool** | Use certificates stored in the Nexus Repository Manager truststore to connect to external systems | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


