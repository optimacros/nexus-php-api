# Optimacros\NexusPhpApi\AzureBlobStoreApi

All URIs are relative to *https://localhost/service/rest/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**verifyConnection1**](AzureBlobStoreApi.md#verifyConnection1) | **POST** /v1/azureblobstore/test-connection | Verify connection using supplied Azure Blob Store settings


# **verifyConnection1**
> verifyConnection1($body)

Verify connection using supplied Azure Blob Store settings



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\AzureBlobStoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Optimacros\NexusPhpApi\Model\AzureConnectionXO(); // \Optimacros\NexusPhpApi\Model\AzureConnectionXO | 

try {
    $apiInstance->verifyConnection1($body);
} catch (Exception $e) {
    echo 'Exception when calling AzureBlobStoreApi->verifyConnection1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Optimacros\NexusPhpApi\Model\AzureConnectionXO**](../Model/AzureConnectionXO.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

