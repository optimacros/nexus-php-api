# Optimacros\NexusPhpApi\SupportApi

All URIs are relative to *https://localhost/service/rest/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**supportzip**](SupportApi.md#supportzip) | **POST** /v1/support/supportzip | Creates and downloads a support zip
[**supportzippath**](SupportApi.md#supportzippath) | **POST** /v1/support/supportzippath | Creates a support zip and returns the path


# **supportzip**
> supportzip($body)

Creates and downloads a support zip



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\SupportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Optimacros\NexusPhpApi\Model\SupportZipGeneratorRequest(); // \Optimacros\NexusPhpApi\Model\SupportZipGeneratorRequest | 

try {
    $apiInstance->supportzip($body);
} catch (Exception $e) {
    echo 'Exception when calling SupportApi->supportzip: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Optimacros\NexusPhpApi\Model\SupportZipGeneratorRequest**](../Model/SupportZipGeneratorRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **supportzippath**
> \Optimacros\NexusPhpApi\Model\SupportZipXO supportzippath($body)

Creates a support zip and returns the path



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\SupportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Optimacros\NexusPhpApi\Model\SupportZipGeneratorRequest(); // \Optimacros\NexusPhpApi\Model\SupportZipGeneratorRequest | 

try {
    $result = $apiInstance->supportzippath($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupportApi->supportzippath: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Optimacros\NexusPhpApi\Model\SupportZipGeneratorRequest**](../Model/SupportZipGeneratorRequest.md)|  | [optional]

### Return type

[**\Optimacros\NexusPhpApi\Model\SupportZipXO**](../Model/SupportZipXO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

