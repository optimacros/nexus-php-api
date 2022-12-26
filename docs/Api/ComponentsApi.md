# Optimacros\NexusPhpApi\ComponentsApi

All URIs are relative to *https://localhost/service/rest/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteComponent**](ComponentsApi.md#deleteComponent) | **DELETE** /v1/components/{id} | Delete a single component
[**getComponentById**](ComponentsApi.md#getComponentById) | **GET** /v1/components/{id} | Get a single component
[**getComponents**](ComponentsApi.md#getComponents) | **GET** /v1/components | List components
[**uploadComponent**](ComponentsApi.md#uploadComponent) | **POST** /v1/components | Upload a single component


# **deleteComponent**
> deleteComponent($id)

Delete a single component



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\ComponentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | ID of the component to delete

try {
    $apiInstance->deleteComponent($id);
} catch (Exception $e) {
    echo 'Exception when calling ComponentsApi->deleteComponent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the component to delete |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getComponentById**
> \Optimacros\NexusPhpApi\Model\ComponentXO getComponentById($id)

Get a single component



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\ComponentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | ID of the component to retrieve

try {
    $result = $apiInstance->getComponentById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComponentsApi->getComponentById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the component to retrieve |

### Return type

[**\Optimacros\NexusPhpApi\Model\ComponentXO**](../Model/ComponentXO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getComponents**
> \Optimacros\NexusPhpApi\Model\PageComponentXO getComponents($repository, $continuationToken)

List components



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\ComponentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repository = "repository_example"; // string | Repository from which you would like to retrieve components
$continuationToken = "continuationToken_example"; // string | A token returned by a prior request. If present, the next page of results are returned

try {
    $result = $apiInstance->getComponents($repository, $continuationToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComponentsApi->getComponents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repository** | **string**| Repository from which you would like to retrieve components |
 **continuationToken** | **string**| A token returned by a prior request. If present, the next page of results are returned | [optional]

### Return type

[**\Optimacros\NexusPhpApi\Model\PageComponentXO**](../Model/PageComponentXO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadComponent**
> uploadComponent($repository, $rAsset, $rAssetPathId, $pypiAsset, $helmAsset, $yumDirectory, $yumAsset, $yumAssetFilename, $dockerAsset, $rubygemsAsset, $nugetAsset, $npmAsset, $rawDirectory, $rawAsset1, $rawAsset1Filename, $rawAsset2, $rawAsset2Filename, $rawAsset3, $rawAsset3Filename, $aptAsset, $maven2GroupId, $maven2ArtifactId, $maven2Version, $maven2GeneratePom, $maven2Packaging, $maven2Asset1, $maven2Asset1Classifier, $maven2Asset1Extension, $maven2Asset2, $maven2Asset2Classifier, $maven2Asset2Extension, $maven2Asset3, $maven2Asset3Classifier, $maven2Asset3Extension)

Upload a single component



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\ComponentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repository = "repository_example"; // string | Name of the repository to which you would like to upload the component
$rAsset = "/path/to/file.txt"; // \SplFileObject | r Asset
$rAssetPathId = "rAssetPathId_example"; // string | r Asset  Package Path
$pypiAsset = "/path/to/file.txt"; // \SplFileObject | pypi Asset
$helmAsset = "/path/to/file.txt"; // \SplFileObject | helm Asset
$yumDirectory = "yumDirectory_example"; // string | yum Directory
$yumAsset = "/path/to/file.txt"; // \SplFileObject | yum Asset
$yumAssetFilename = "yumAssetFilename_example"; // string | yum Asset  Filename
$dockerAsset = "/path/to/file.txt"; // \SplFileObject | docker Asset
$rubygemsAsset = "/path/to/file.txt"; // \SplFileObject | rubygems Asset
$nugetAsset = "/path/to/file.txt"; // \SplFileObject | nuget Asset
$npmAsset = "/path/to/file.txt"; // \SplFileObject | npm Asset
$rawDirectory = "rawDirectory_example"; // string | raw Directory
$rawAsset1 = "/path/to/file.txt"; // \SplFileObject | raw Asset 1
$rawAsset1Filename = "rawAsset1Filename_example"; // string | raw Asset 1 Filename
$rawAsset2 = "/path/to/file.txt"; // \SplFileObject | raw Asset 2
$rawAsset2Filename = "rawAsset2Filename_example"; // string | raw Asset 2 Filename
$rawAsset3 = "/path/to/file.txt"; // \SplFileObject | raw Asset 3
$rawAsset3Filename = "rawAsset3Filename_example"; // string | raw Asset 3 Filename
$aptAsset = "/path/to/file.txt"; // \SplFileObject | apt Asset
$maven2GroupId = "maven2GroupId_example"; // string | maven2 Group ID
$maven2ArtifactId = "maven2ArtifactId_example"; // string | maven2 Artifact ID
$maven2Version = "maven2Version_example"; // string | maven2 Version
$maven2GeneratePom = true; // bool | maven2 Generate a POM file with these coordinates
$maven2Packaging = "maven2Packaging_example"; // string | maven2 Packaging
$maven2Asset1 = "/path/to/file.txt"; // \SplFileObject | maven2 Asset 1
$maven2Asset1Classifier = "maven2Asset1Classifier_example"; // string | maven2 Asset 1 Classifier
$maven2Asset1Extension = "maven2Asset1Extension_example"; // string | maven2 Asset 1 Extension
$maven2Asset2 = "/path/to/file.txt"; // \SplFileObject | maven2 Asset 2
$maven2Asset2Classifier = "maven2Asset2Classifier_example"; // string | maven2 Asset 2 Classifier
$maven2Asset2Extension = "maven2Asset2Extension_example"; // string | maven2 Asset 2 Extension
$maven2Asset3 = "/path/to/file.txt"; // \SplFileObject | maven2 Asset 3
$maven2Asset3Classifier = "maven2Asset3Classifier_example"; // string | maven2 Asset 3 Classifier
$maven2Asset3Extension = "maven2Asset3Extension_example"; // string | maven2 Asset 3 Extension

try {
    $apiInstance->uploadComponent($repository, $rAsset, $rAssetPathId, $pypiAsset, $helmAsset, $yumDirectory, $yumAsset, $yumAssetFilename, $dockerAsset, $rubygemsAsset, $nugetAsset, $npmAsset, $rawDirectory, $rawAsset1, $rawAsset1Filename, $rawAsset2, $rawAsset2Filename, $rawAsset3, $rawAsset3Filename, $aptAsset, $maven2GroupId, $maven2ArtifactId, $maven2Version, $maven2GeneratePom, $maven2Packaging, $maven2Asset1, $maven2Asset1Classifier, $maven2Asset1Extension, $maven2Asset2, $maven2Asset2Classifier, $maven2Asset2Extension, $maven2Asset3, $maven2Asset3Classifier, $maven2Asset3Extension);
} catch (Exception $e) {
    echo 'Exception when calling ComponentsApi->uploadComponent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repository** | **string**| Name of the repository to which you would like to upload the component |
 **rAsset** | **\SplFileObject**| r Asset | [optional]
 **rAssetPathId** | **string**| r Asset  Package Path | [optional]
 **pypiAsset** | **\SplFileObject**| pypi Asset | [optional]
 **helmAsset** | **\SplFileObject**| helm Asset | [optional]
 **yumDirectory** | **string**| yum Directory | [optional]
 **yumAsset** | **\SplFileObject**| yum Asset | [optional]
 **yumAssetFilename** | **string**| yum Asset  Filename | [optional]
 **dockerAsset** | **\SplFileObject**| docker Asset | [optional]
 **rubygemsAsset** | **\SplFileObject**| rubygems Asset | [optional]
 **nugetAsset** | **\SplFileObject**| nuget Asset | [optional]
 **npmAsset** | **\SplFileObject**| npm Asset | [optional]
 **rawDirectory** | **string**| raw Directory | [optional]
 **rawAsset1** | **\SplFileObject**| raw Asset 1 | [optional]
 **rawAsset1Filename** | **string**| raw Asset 1 Filename | [optional]
 **rawAsset2** | **\SplFileObject**| raw Asset 2 | [optional]
 **rawAsset2Filename** | **string**| raw Asset 2 Filename | [optional]
 **rawAsset3** | **\SplFileObject**| raw Asset 3 | [optional]
 **rawAsset3Filename** | **string**| raw Asset 3 Filename | [optional]
 **aptAsset** | **\SplFileObject**| apt Asset | [optional]
 **maven2GroupId** | **string**| maven2 Group ID | [optional]
 **maven2ArtifactId** | **string**| maven2 Artifact ID | [optional]
 **maven2Version** | **string**| maven2 Version | [optional]
 **maven2GeneratePom** | **bool**| maven2 Generate a POM file with these coordinates | [optional]
 **maven2Packaging** | **string**| maven2 Packaging | [optional]
 **maven2Asset1** | **\SplFileObject**| maven2 Asset 1 | [optional]
 **maven2Asset1Classifier** | **string**| maven2 Asset 1 Classifier | [optional]
 **maven2Asset1Extension** | **string**| maven2 Asset 1 Extension | [optional]
 **maven2Asset2** | **\SplFileObject**| maven2 Asset 2 | [optional]
 **maven2Asset2Classifier** | **string**| maven2 Asset 2 Classifier | [optional]
 **maven2Asset2Extension** | **string**| maven2 Asset 2 Extension | [optional]
 **maven2Asset3** | **\SplFileObject**| maven2 Asset 3 | [optional]
 **maven2Asset3Classifier** | **string**| maven2 Asset 3 Classifier | [optional]
 **maven2Asset3Extension** | **string**| maven2 Asset 3 Extension | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

