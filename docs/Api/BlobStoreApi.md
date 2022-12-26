# Optimacros\NexusPhpApi\BlobStoreApi

All URIs are relative to *https://localhost/service/rest/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createBlobStore**](BlobStoreApi.md#createBlobStore) | **POST** /v1/blobstores/s3 | Create an S3 blob store
[**createBlobStore1**](BlobStoreApi.md#createBlobStore1) | **POST** /v1/blobstores/azure | Create an Azure blob store
[**createFileBlobStore**](BlobStoreApi.md#createFileBlobStore) | **POST** /v1/blobstores/file | Create a file blob store
[**deleteBlobStore**](BlobStoreApi.md#deleteBlobStore) | **DELETE** /v1/blobstores/{name} | Delete a blob store by name
[**getBlobStore**](BlobStoreApi.md#getBlobStore) | **GET** /v1/blobstores/s3/{name} | Get a S3 blob store configuration by name
[**getBlobStore1**](BlobStoreApi.md#getBlobStore1) | **GET** /v1/blobstores/azure/{name} | Get an Azure blob store configuration by name
[**getFileBlobStoreConfiguration**](BlobStoreApi.md#getFileBlobStoreConfiguration) | **GET** /v1/blobstores/file/{name} | Get a file blob store configuration by name
[**listBlobStores**](BlobStoreApi.md#listBlobStores) | **GET** /v1/blobstores | List the blob stores
[**quotaStatus**](BlobStoreApi.md#quotaStatus) | **GET** /v1/blobstores/{name}/quota-status | Get quota status for a given blob store
[**updateBlobStore**](BlobStoreApi.md#updateBlobStore) | **PUT** /v1/blobstores/s3/{name} | Update an S3 blob store configuration by name
[**updateBlobStore1**](BlobStoreApi.md#updateBlobStore1) | **PUT** /v1/blobstores/azure/{name} | Update an Azure blob store configuration by name
[**updateFileBlobStore**](BlobStoreApi.md#updateFileBlobStore) | **PUT** /v1/blobstores/file/{name} | Update a file blob store configuration by name


# **createBlobStore**
> createBlobStore($body)

Create an S3 blob store



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\BlobStoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Optimacros\NexusPhpApi\Model\S3BlobStoreApiModel(); // \Optimacros\NexusPhpApi\Model\S3BlobStoreApiModel | 

try {
    $apiInstance->createBlobStore($body);
} catch (Exception $e) {
    echo 'Exception when calling BlobStoreApi->createBlobStore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Optimacros\NexusPhpApi\Model\S3BlobStoreApiModel**](../Model/S3BlobStoreApiModel.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createBlobStore1**
> createBlobStore1($body)

Create an Azure blob store



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\BlobStoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Optimacros\NexusPhpApi\Model\AzureBlobStoreApiModel(); // \Optimacros\NexusPhpApi\Model\AzureBlobStoreApiModel | 

try {
    $apiInstance->createBlobStore1($body);
} catch (Exception $e) {
    echo 'Exception when calling BlobStoreApi->createBlobStore1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Optimacros\NexusPhpApi\Model\AzureBlobStoreApiModel**](../Model/AzureBlobStoreApiModel.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createFileBlobStore**
> createFileBlobStore($body)

Create a file blob store



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\BlobStoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Optimacros\NexusPhpApi\Model\FileBlobStoreApiCreateRequest(); // \Optimacros\NexusPhpApi\Model\FileBlobStoreApiCreateRequest | 

try {
    $apiInstance->createFileBlobStore($body);
} catch (Exception $e) {
    echo 'Exception when calling BlobStoreApi->createFileBlobStore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Optimacros\NexusPhpApi\Model\FileBlobStoreApiCreateRequest**](../Model/FileBlobStoreApiCreateRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteBlobStore**
> deleteBlobStore($name)

Delete a blob store by name



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\BlobStoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The name of the blob store to delete

try {
    $apiInstance->deleteBlobStore($name);
} catch (Exception $e) {
    echo 'Exception when calling BlobStoreApi->deleteBlobStore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The name of the blob store to delete |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBlobStore**
> \Optimacros\NexusPhpApi\Model\S3BlobStoreApiModel getBlobStore($name)

Get a S3 blob store configuration by name



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\BlobStoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Name of the blob store configuration to fetch

try {
    $result = $apiInstance->getBlobStore($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlobStoreApi->getBlobStore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of the blob store configuration to fetch |

### Return type

[**\Optimacros\NexusPhpApi\Model\S3BlobStoreApiModel**](../Model/S3BlobStoreApiModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBlobStore1**
> \Optimacros\NexusPhpApi\Model\AzureBlobStoreApiModel getBlobStore1($name)

Get an Azure blob store configuration by name



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\BlobStoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Name of the blob store configuration to fetch

try {
    $result = $apiInstance->getBlobStore1($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlobStoreApi->getBlobStore1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of the blob store configuration to fetch |

### Return type

[**\Optimacros\NexusPhpApi\Model\AzureBlobStoreApiModel**](../Model/AzureBlobStoreApiModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFileBlobStoreConfiguration**
> \Optimacros\NexusPhpApi\Model\FileBlobStoreApiModel getFileBlobStoreConfiguration($name)

Get a file blob store configuration by name



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\BlobStoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "default"; // string | The name of the file blob store to read

try {
    $result = $apiInstance->getFileBlobStoreConfiguration($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlobStoreApi->getFileBlobStoreConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The name of the file blob store to read |

### Return type

[**\Optimacros\NexusPhpApi\Model\FileBlobStoreApiModel**](../Model/FileBlobStoreApiModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listBlobStores**
> \Optimacros\NexusPhpApi\Model\GenericBlobStoreApiResponse[] listBlobStores()

List the blob stores



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\BlobStoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->listBlobStores();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlobStoreApi->listBlobStores: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Optimacros\NexusPhpApi\Model\GenericBlobStoreApiResponse[]**](../Model/GenericBlobStoreApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quotaStatus**
> \Optimacros\NexusPhpApi\Model\BlobStoreQuotaResultXO quotaStatus($name)

Get quota status for a given blob store



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\BlobStoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 

try {
    $result = $apiInstance->quotaStatus($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlobStoreApi->quotaStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |

### Return type

[**\Optimacros\NexusPhpApi\Model\BlobStoreQuotaResultXO**](../Model/BlobStoreQuotaResultXO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateBlobStore**
> updateBlobStore($name, $body)

Update an S3 blob store configuration by name



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\BlobStoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Name of the blob store to update
$body = new \Optimacros\NexusPhpApi\Model\S3BlobStoreApiModel(); // \Optimacros\NexusPhpApi\Model\S3BlobStoreApiModel | 

try {
    $apiInstance->updateBlobStore($name, $body);
} catch (Exception $e) {
    echo 'Exception when calling BlobStoreApi->updateBlobStore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of the blob store to update |
 **body** | [**\Optimacros\NexusPhpApi\Model\S3BlobStoreApiModel**](../Model/S3BlobStoreApiModel.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateBlobStore1**
> updateBlobStore1($name, $body)

Update an Azure blob store configuration by name



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\BlobStoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Name of the blob store to update
$body = new \Optimacros\NexusPhpApi\Model\AzureBlobStoreApiModel(); // \Optimacros\NexusPhpApi\Model\AzureBlobStoreApiModel | 

try {
    $apiInstance->updateBlobStore1($name, $body);
} catch (Exception $e) {
    echo 'Exception when calling BlobStoreApi->updateBlobStore1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of the blob store to update |
 **body** | [**\Optimacros\NexusPhpApi\Model\AzureBlobStoreApiModel**](../Model/AzureBlobStoreApiModel.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateFileBlobStore**
> updateFileBlobStore($name, $body)

Update a file blob store configuration by name



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\BlobStoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The name of the file blob store to update
$body = new \Optimacros\NexusPhpApi\Model\FileBlobStoreApiUpdateRequest(); // \Optimacros\NexusPhpApi\Model\FileBlobStoreApiUpdateRequest | 

try {
    $apiInstance->updateFileBlobStore($name, $body);
} catch (Exception $e) {
    echo 'Exception when calling BlobStoreApi->updateFileBlobStore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The name of the file blob store to update |
 **body** | [**\Optimacros\NexusPhpApi\Model\FileBlobStoreApiUpdateRequest**](../Model/FileBlobStoreApiUpdateRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

