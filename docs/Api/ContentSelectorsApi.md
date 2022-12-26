# Optimacros\NexusPhpApi\ContentSelectorsApi

All URIs are relative to *https://localhost/service/rest/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createContentSelector**](ContentSelectorsApi.md#createContentSelector) | **POST** /v1/security/content-selectors | Create a new content selector
[**deleteContentSelector**](ContentSelectorsApi.md#deleteContentSelector) | **DELETE** /v1/security/content-selectors/{name} | Delete a content selector
[**getContentSelector**](ContentSelectorsApi.md#getContentSelector) | **GET** /v1/security/content-selectors/{name} | Get a content selector by name
[**getContentSelectors**](ContentSelectorsApi.md#getContentSelectors) | **GET** /v1/security/content-selectors | List content selectors
[**updateContentSelector**](ContentSelectorsApi.md#updateContentSelector) | **PUT** /v1/security/content-selectors/{name} | Update a content selector


# **createContentSelector**
> createContentSelector($body)

Create a new content selector



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\ContentSelectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Optimacros\NexusPhpApi\Model\ContentSelectorApiCreateRequest(); // \Optimacros\NexusPhpApi\Model\ContentSelectorApiCreateRequest | 

try {
    $apiInstance->createContentSelector($body);
} catch (Exception $e) {
    echo 'Exception when calling ContentSelectorsApi->createContentSelector: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Optimacros\NexusPhpApi\Model\ContentSelectorApiCreateRequest**](../Model/ContentSelectorApiCreateRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteContentSelector**
> deleteContentSelector($name)

Delete a content selector



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\ContentSelectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 

try {
    $apiInstance->deleteContentSelector($name);
} catch (Exception $e) {
    echo 'Exception when calling ContentSelectorsApi->deleteContentSelector: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContentSelector**
> \Optimacros\NexusPhpApi\Model\ContentSelectorApiResponse getContentSelector($name)

Get a content selector by name



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\ContentSelectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The content selector name

try {
    $result = $apiInstance->getContentSelector($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentSelectorsApi->getContentSelector: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The content selector name |

### Return type

[**\Optimacros\NexusPhpApi\Model\ContentSelectorApiResponse**](../Model/ContentSelectorApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContentSelectors**
> \Optimacros\NexusPhpApi\Model\ContentSelectorApiResponse[] getContentSelectors()

List content selectors



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\ContentSelectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getContentSelectors();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentSelectorsApi->getContentSelectors: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Optimacros\NexusPhpApi\Model\ContentSelectorApiResponse[]**](../Model/ContentSelectorApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateContentSelector**
> updateContentSelector($name, $body)

Update a content selector



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\ContentSelectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The content selector name
$body = new \Optimacros\NexusPhpApi\Model\ContentSelectorApiUpdateRequest(); // \Optimacros\NexusPhpApi\Model\ContentSelectorApiUpdateRequest | 

try {
    $apiInstance->updateContentSelector($name, $body);
} catch (Exception $e) {
    echo 'Exception when calling ContentSelectorsApi->updateContentSelector: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The content selector name |
 **body** | [**\Optimacros\NexusPhpApi\Model\ContentSelectorApiUpdateRequest**](../Model/ContentSelectorApiUpdateRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

