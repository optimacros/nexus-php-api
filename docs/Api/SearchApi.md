# Optimacros\NexusPhpApi\SearchApi

All URIs are relative to *https://localhost/service/rest/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**search**](SearchApi.md#search) | **GET** /v1/search | Search components
[**searchAndDownloadAssets**](SearchApi.md#searchAndDownloadAssets) | **GET** /v1/search/assets/download | Search and download asset
[**searchAssets**](SearchApi.md#searchAssets) | **GET** /v1/search/assets | Search assets


# **search**
> \Optimacros\NexusPhpApi\Model\PageComponentXO search($continuationToken, $sort, $direction, $timeout, $q, $repository, $format, $group, $name, $version, $prerelease, $md5, $sha1, $sha256, $sha512, $conanBaseVersion, $conanChannel, $dockerImageName, $dockerImageTag, $dockerLayerId, $dockerContentDigest, $mavenGroupId, $mavenArtifactId, $mavenBaseVersion, $mavenExtension, $mavenClassifier, $npmScope, $nugetId, $nugetTags, $p2PluginName, $pypiClassifiers, $pypiDescription, $pypiKeywords, $pypiSummary, $rubygemsDescription, $rubygemsPlatform, $rubygemsSummary, $yumArchitecture)

Search components



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$continuationToken = "continuationToken_example"; // string | A token returned by a prior request. If present, the next page of results are returned
$sort = "sort_example"; // string | The field to sort the results against, if left empty, a sort based on match weight will be used.
$direction = "direction_example"; // string | The direction to sort records in, defaults to ascending ('asc') for all sort fields, except version, which defaults to descending ('desc')
$timeout = 56; // int | How long to wait for search results in seconds. If this value is not provided, the system default timeout will be used.
$q = "q_example"; // string | Query by keyword
$repository = "repository_example"; // string | Repository name
$format = "format_example"; // string | Query by format
$group = "group_example"; // string | Component group
$name = "name_example"; // string | Component name
$version = "version_example"; // string | Component version
$prerelease = "prerelease_example"; // string | Prerelease version flag
$md5 = "md5_example"; // string | Specific MD5 hash of component's asset
$sha1 = "sha1_example"; // string | Specific SHA-1 hash of component's asset
$sha256 = "sha256_example"; // string | Specific SHA-256 hash of component's asset
$sha512 = "sha512_example"; // string | Specific SHA-512 hash of component's asset
$conanBaseVersion = "conanBaseVersion_example"; // string | Conan base version
$conanChannel = "conanChannel_example"; // string | Conan channel
$dockerImageName = "dockerImageName_example"; // string | Docker image name
$dockerImageTag = "dockerImageTag_example"; // string | Docker image tag
$dockerLayerId = "dockerLayerId_example"; // string | Docker layer ID
$dockerContentDigest = "dockerContentDigest_example"; // string | Docker content digest
$mavenGroupId = "mavenGroupId_example"; // string | Maven groupId
$mavenArtifactId = "mavenArtifactId_example"; // string | Maven artifactId
$mavenBaseVersion = "mavenBaseVersion_example"; // string | Maven base version
$mavenExtension = "mavenExtension_example"; // string | Maven extension of component's asset
$mavenClassifier = "mavenClassifier_example"; // string | Maven classifier of component's asset
$npmScope = "npmScope_example"; // string | npm scope
$nugetId = "nugetId_example"; // string | NuGet id
$nugetTags = "nugetTags_example"; // string | NuGet tags
$p2PluginName = "p2PluginName_example"; // string | p2 plugin name
$pypiClassifiers = "pypiClassifiers_example"; // string | PyPI classifiers
$pypiDescription = "pypiDescription_example"; // string | PyPI description
$pypiKeywords = "pypiKeywords_example"; // string | PyPI keywords
$pypiSummary = "pypiSummary_example"; // string | PyPI summary
$rubygemsDescription = "rubygemsDescription_example"; // string | RubyGems description
$rubygemsPlatform = "rubygemsPlatform_example"; // string | RubyGems platform
$rubygemsSummary = "rubygemsSummary_example"; // string | RubyGems summary
$yumArchitecture = "yumArchitecture_example"; // string | Yum architecture

try {
    $result = $apiInstance->search($continuationToken, $sort, $direction, $timeout, $q, $repository, $format, $group, $name, $version, $prerelease, $md5, $sha1, $sha256, $sha512, $conanBaseVersion, $conanChannel, $dockerImageName, $dockerImageTag, $dockerLayerId, $dockerContentDigest, $mavenGroupId, $mavenArtifactId, $mavenBaseVersion, $mavenExtension, $mavenClassifier, $npmScope, $nugetId, $nugetTags, $p2PluginName, $pypiClassifiers, $pypiDescription, $pypiKeywords, $pypiSummary, $rubygemsDescription, $rubygemsPlatform, $rubygemsSummary, $yumArchitecture);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->search: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **continuationToken** | **string**| A token returned by a prior request. If present, the next page of results are returned | [optional]
 **sort** | **string**| The field to sort the results against, if left empty, a sort based on match weight will be used. | [optional]
 **direction** | **string**| The direction to sort records in, defaults to ascending (&#39;asc&#39;) for all sort fields, except version, which defaults to descending (&#39;desc&#39;) | [optional]
 **timeout** | **int**| How long to wait for search results in seconds. If this value is not provided, the system default timeout will be used. | [optional]
 **q** | **string**| Query by keyword | [optional]
 **repository** | **string**| Repository name | [optional]
 **format** | **string**| Query by format | [optional]
 **group** | **string**| Component group | [optional]
 **name** | **string**| Component name | [optional]
 **version** | **string**| Component version | [optional]
 **prerelease** | **string**| Prerelease version flag | [optional]
 **md5** | **string**| Specific MD5 hash of component&#39;s asset | [optional]
 **sha1** | **string**| Specific SHA-1 hash of component&#39;s asset | [optional]
 **sha256** | **string**| Specific SHA-256 hash of component&#39;s asset | [optional]
 **sha512** | **string**| Specific SHA-512 hash of component&#39;s asset | [optional]
 **conanBaseVersion** | **string**| Conan base version | [optional]
 **conanChannel** | **string**| Conan channel | [optional]
 **dockerImageName** | **string**| Docker image name | [optional]
 **dockerImageTag** | **string**| Docker image tag | [optional]
 **dockerLayerId** | **string**| Docker layer ID | [optional]
 **dockerContentDigest** | **string**| Docker content digest | [optional]
 **mavenGroupId** | **string**| Maven groupId | [optional]
 **mavenArtifactId** | **string**| Maven artifactId | [optional]
 **mavenBaseVersion** | **string**| Maven base version | [optional]
 **mavenExtension** | **string**| Maven extension of component&#39;s asset | [optional]
 **mavenClassifier** | **string**| Maven classifier of component&#39;s asset | [optional]
 **npmScope** | **string**| npm scope | [optional]
 **nugetId** | **string**| NuGet id | [optional]
 **nugetTags** | **string**| NuGet tags | [optional]
 **p2PluginName** | **string**| p2 plugin name | [optional]
 **pypiClassifiers** | **string**| PyPI classifiers | [optional]
 **pypiDescription** | **string**| PyPI description | [optional]
 **pypiKeywords** | **string**| PyPI keywords | [optional]
 **pypiSummary** | **string**| PyPI summary | [optional]
 **rubygemsDescription** | **string**| RubyGems description | [optional]
 **rubygemsPlatform** | **string**| RubyGems platform | [optional]
 **rubygemsSummary** | **string**| RubyGems summary | [optional]
 **yumArchitecture** | **string**| Yum architecture | [optional]

### Return type

[**\Optimacros\NexusPhpApi\Model\PageComponentXO**](../Model/PageComponentXO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchAndDownloadAssets**
> searchAndDownloadAssets($sort, $direction, $timeout, $q, $repository, $format, $group, $name, $version, $prerelease, $md5, $sha1, $sha256, $sha512, $conanBaseVersion, $conanChannel, $dockerImageName, $dockerImageTag, $dockerLayerId, $dockerContentDigest, $mavenGroupId, $mavenArtifactId, $mavenBaseVersion, $mavenExtension, $mavenClassifier, $npmScope, $nugetId, $nugetTags, $p2PluginName, $pypiClassifiers, $pypiDescription, $pypiKeywords, $pypiSummary, $rubygemsDescription, $rubygemsPlatform, $rubygemsSummary, $yumArchitecture)

Search and download asset

Returns a 302 Found with location header field set to download URL. Unless a sort parameter is supplied, the search must return a single asset to receive download URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sort = "sort_example"; // string | The field to sort the results against, if left empty and more than 1 result is returned, the request will fail.
$direction = "direction_example"; // string | The direction to sort records in, defaults to ascending ('asc') for all sort fields, except version, which defaults to descending ('desc')
$timeout = 56; // int | How long to wait for search results in seconds. If this value is not provided, the system default timeout will be used.
$q = "q_example"; // string | Query by keyword
$repository = "repository_example"; // string | Repository name
$format = "format_example"; // string | Query by format
$group = "group_example"; // string | Component group
$name = "name_example"; // string | Component name
$version = "version_example"; // string | Component version
$prerelease = "prerelease_example"; // string | Prerelease version flag
$md5 = "md5_example"; // string | Specific MD5 hash of component's asset
$sha1 = "sha1_example"; // string | Specific SHA-1 hash of component's asset
$sha256 = "sha256_example"; // string | Specific SHA-256 hash of component's asset
$sha512 = "sha512_example"; // string | Specific SHA-512 hash of component's asset
$conanBaseVersion = "conanBaseVersion_example"; // string | Conan base version
$conanChannel = "conanChannel_example"; // string | Conan channel
$dockerImageName = "dockerImageName_example"; // string | Docker image name
$dockerImageTag = "dockerImageTag_example"; // string | Docker image tag
$dockerLayerId = "dockerLayerId_example"; // string | Docker layer ID
$dockerContentDigest = "dockerContentDigest_example"; // string | Docker content digest
$mavenGroupId = "mavenGroupId_example"; // string | Maven groupId
$mavenArtifactId = "mavenArtifactId_example"; // string | Maven artifactId
$mavenBaseVersion = "mavenBaseVersion_example"; // string | Maven base version
$mavenExtension = "mavenExtension_example"; // string | Maven extension of component's asset
$mavenClassifier = "mavenClassifier_example"; // string | Maven classifier of component's asset
$npmScope = "npmScope_example"; // string | npm scope
$nugetId = "nugetId_example"; // string | NuGet id
$nugetTags = "nugetTags_example"; // string | NuGet tags
$p2PluginName = "p2PluginName_example"; // string | p2 plugin name
$pypiClassifiers = "pypiClassifiers_example"; // string | PyPI classifiers
$pypiDescription = "pypiDescription_example"; // string | PyPI description
$pypiKeywords = "pypiKeywords_example"; // string | PyPI keywords
$pypiSummary = "pypiSummary_example"; // string | PyPI summary
$rubygemsDescription = "rubygemsDescription_example"; // string | RubyGems description
$rubygemsPlatform = "rubygemsPlatform_example"; // string | RubyGems platform
$rubygemsSummary = "rubygemsSummary_example"; // string | RubyGems summary
$yumArchitecture = "yumArchitecture_example"; // string | Yum architecture

try {
    $apiInstance->searchAndDownloadAssets($sort, $direction, $timeout, $q, $repository, $format, $group, $name, $version, $prerelease, $md5, $sha1, $sha256, $sha512, $conanBaseVersion, $conanChannel, $dockerImageName, $dockerImageTag, $dockerLayerId, $dockerContentDigest, $mavenGroupId, $mavenArtifactId, $mavenBaseVersion, $mavenExtension, $mavenClassifier, $npmScope, $nugetId, $nugetTags, $p2PluginName, $pypiClassifiers, $pypiDescription, $pypiKeywords, $pypiSummary, $rubygemsDescription, $rubygemsPlatform, $rubygemsSummary, $yumArchitecture);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchAndDownloadAssets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | **string**| The field to sort the results against, if left empty and more than 1 result is returned, the request will fail. | [optional]
 **direction** | **string**| The direction to sort records in, defaults to ascending (&#39;asc&#39;) for all sort fields, except version, which defaults to descending (&#39;desc&#39;) | [optional]
 **timeout** | **int**| How long to wait for search results in seconds. If this value is not provided, the system default timeout will be used. | [optional]
 **q** | **string**| Query by keyword | [optional]
 **repository** | **string**| Repository name | [optional]
 **format** | **string**| Query by format | [optional]
 **group** | **string**| Component group | [optional]
 **name** | **string**| Component name | [optional]
 **version** | **string**| Component version | [optional]
 **prerelease** | **string**| Prerelease version flag | [optional]
 **md5** | **string**| Specific MD5 hash of component&#39;s asset | [optional]
 **sha1** | **string**| Specific SHA-1 hash of component&#39;s asset | [optional]
 **sha256** | **string**| Specific SHA-256 hash of component&#39;s asset | [optional]
 **sha512** | **string**| Specific SHA-512 hash of component&#39;s asset | [optional]
 **conanBaseVersion** | **string**| Conan base version | [optional]
 **conanChannel** | **string**| Conan channel | [optional]
 **dockerImageName** | **string**| Docker image name | [optional]
 **dockerImageTag** | **string**| Docker image tag | [optional]
 **dockerLayerId** | **string**| Docker layer ID | [optional]
 **dockerContentDigest** | **string**| Docker content digest | [optional]
 **mavenGroupId** | **string**| Maven groupId | [optional]
 **mavenArtifactId** | **string**| Maven artifactId | [optional]
 **mavenBaseVersion** | **string**| Maven base version | [optional]
 **mavenExtension** | **string**| Maven extension of component&#39;s asset | [optional]
 **mavenClassifier** | **string**| Maven classifier of component&#39;s asset | [optional]
 **npmScope** | **string**| npm scope | [optional]
 **nugetId** | **string**| NuGet id | [optional]
 **nugetTags** | **string**| NuGet tags | [optional]
 **p2PluginName** | **string**| p2 plugin name | [optional]
 **pypiClassifiers** | **string**| PyPI classifiers | [optional]
 **pypiDescription** | **string**| PyPI description | [optional]
 **pypiKeywords** | **string**| PyPI keywords | [optional]
 **pypiSummary** | **string**| PyPI summary | [optional]
 **rubygemsDescription** | **string**| RubyGems description | [optional]
 **rubygemsPlatform** | **string**| RubyGems platform | [optional]
 **rubygemsSummary** | **string**| RubyGems summary | [optional]
 **yumArchitecture** | **string**| Yum architecture | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchAssets**
> \Optimacros\NexusPhpApi\Model\PageAssetXO searchAssets($continuationToken, $sort, $direction, $timeout, $q, $repository, $format, $group, $name, $version, $prerelease, $md5, $sha1, $sha256, $sha512, $conanBaseVersion, $conanChannel, $dockerImageName, $dockerImageTag, $dockerLayerId, $dockerContentDigest, $mavenGroupId, $mavenArtifactId, $mavenBaseVersion, $mavenExtension, $mavenClassifier, $npmScope, $nugetId, $nugetTags, $p2PluginName, $pypiClassifiers, $pypiDescription, $pypiKeywords, $pypiSummary, $rubygemsDescription, $rubygemsPlatform, $rubygemsSummary, $yumArchitecture)

Search assets



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$continuationToken = "continuationToken_example"; // string | A token returned by a prior request. If present, the next page of results are returned
$sort = "sort_example"; // string | The field to sort the results against, if left empty, a sort based on match weight will be used.
$direction = "direction_example"; // string | The direction to sort records in, defaults to ascending ('asc') for all sort fields, except version, which defaults to descending ('desc')
$timeout = 56; // int | How long to wait for search results in seconds. If this value is not provided, the system default timeout will be used.
$q = "q_example"; // string | Query by keyword
$repository = "repository_example"; // string | Repository name
$format = "format_example"; // string | Query by format
$group = "group_example"; // string | Component group
$name = "name_example"; // string | Component name
$version = "version_example"; // string | Component version
$prerelease = "prerelease_example"; // string | Prerelease version flag
$md5 = "md5_example"; // string | Specific MD5 hash of component's asset
$sha1 = "sha1_example"; // string | Specific SHA-1 hash of component's asset
$sha256 = "sha256_example"; // string | Specific SHA-256 hash of component's asset
$sha512 = "sha512_example"; // string | Specific SHA-512 hash of component's asset
$conanBaseVersion = "conanBaseVersion_example"; // string | Conan base version
$conanChannel = "conanChannel_example"; // string | Conan channel
$dockerImageName = "dockerImageName_example"; // string | Docker image name
$dockerImageTag = "dockerImageTag_example"; // string | Docker image tag
$dockerLayerId = "dockerLayerId_example"; // string | Docker layer ID
$dockerContentDigest = "dockerContentDigest_example"; // string | Docker content digest
$mavenGroupId = "mavenGroupId_example"; // string | Maven groupId
$mavenArtifactId = "mavenArtifactId_example"; // string | Maven artifactId
$mavenBaseVersion = "mavenBaseVersion_example"; // string | Maven base version
$mavenExtension = "mavenExtension_example"; // string | Maven extension of component's asset
$mavenClassifier = "mavenClassifier_example"; // string | Maven classifier of component's asset
$npmScope = "npmScope_example"; // string | npm scope
$nugetId = "nugetId_example"; // string | NuGet id
$nugetTags = "nugetTags_example"; // string | NuGet tags
$p2PluginName = "p2PluginName_example"; // string | p2 plugin name
$pypiClassifiers = "pypiClassifiers_example"; // string | PyPI classifiers
$pypiDescription = "pypiDescription_example"; // string | PyPI description
$pypiKeywords = "pypiKeywords_example"; // string | PyPI keywords
$pypiSummary = "pypiSummary_example"; // string | PyPI summary
$rubygemsDescription = "rubygemsDescription_example"; // string | RubyGems description
$rubygemsPlatform = "rubygemsPlatform_example"; // string | RubyGems platform
$rubygemsSummary = "rubygemsSummary_example"; // string | RubyGems summary
$yumArchitecture = "yumArchitecture_example"; // string | Yum architecture

try {
    $result = $apiInstance->searchAssets($continuationToken, $sort, $direction, $timeout, $q, $repository, $format, $group, $name, $version, $prerelease, $md5, $sha1, $sha256, $sha512, $conanBaseVersion, $conanChannel, $dockerImageName, $dockerImageTag, $dockerLayerId, $dockerContentDigest, $mavenGroupId, $mavenArtifactId, $mavenBaseVersion, $mavenExtension, $mavenClassifier, $npmScope, $nugetId, $nugetTags, $p2PluginName, $pypiClassifiers, $pypiDescription, $pypiKeywords, $pypiSummary, $rubygemsDescription, $rubygemsPlatform, $rubygemsSummary, $yumArchitecture);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchAssets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **continuationToken** | **string**| A token returned by a prior request. If present, the next page of results are returned | [optional]
 **sort** | **string**| The field to sort the results against, if left empty, a sort based on match weight will be used. | [optional]
 **direction** | **string**| The direction to sort records in, defaults to ascending (&#39;asc&#39;) for all sort fields, except version, which defaults to descending (&#39;desc&#39;) | [optional]
 **timeout** | **int**| How long to wait for search results in seconds. If this value is not provided, the system default timeout will be used. | [optional]
 **q** | **string**| Query by keyword | [optional]
 **repository** | **string**| Repository name | [optional]
 **format** | **string**| Query by format | [optional]
 **group** | **string**| Component group | [optional]
 **name** | **string**| Component name | [optional]
 **version** | **string**| Component version | [optional]
 **prerelease** | **string**| Prerelease version flag | [optional]
 **md5** | **string**| Specific MD5 hash of component&#39;s asset | [optional]
 **sha1** | **string**| Specific SHA-1 hash of component&#39;s asset | [optional]
 **sha256** | **string**| Specific SHA-256 hash of component&#39;s asset | [optional]
 **sha512** | **string**| Specific SHA-512 hash of component&#39;s asset | [optional]
 **conanBaseVersion** | **string**| Conan base version | [optional]
 **conanChannel** | **string**| Conan channel | [optional]
 **dockerImageName** | **string**| Docker image name | [optional]
 **dockerImageTag** | **string**| Docker image tag | [optional]
 **dockerLayerId** | **string**| Docker layer ID | [optional]
 **dockerContentDigest** | **string**| Docker content digest | [optional]
 **mavenGroupId** | **string**| Maven groupId | [optional]
 **mavenArtifactId** | **string**| Maven artifactId | [optional]
 **mavenBaseVersion** | **string**| Maven base version | [optional]
 **mavenExtension** | **string**| Maven extension of component&#39;s asset | [optional]
 **mavenClassifier** | **string**| Maven classifier of component&#39;s asset | [optional]
 **npmScope** | **string**| npm scope | [optional]
 **nugetId** | **string**| NuGet id | [optional]
 **nugetTags** | **string**| NuGet tags | [optional]
 **p2PluginName** | **string**| p2 plugin name | [optional]
 **pypiClassifiers** | **string**| PyPI classifiers | [optional]
 **pypiDescription** | **string**| PyPI description | [optional]
 **pypiKeywords** | **string**| PyPI keywords | [optional]
 **pypiSummary** | **string**| PyPI summary | [optional]
 **rubygemsDescription** | **string**| RubyGems description | [optional]
 **rubygemsPlatform** | **string**| RubyGems platform | [optional]
 **rubygemsSummary** | **string**| RubyGems summary | [optional]
 **yumArchitecture** | **string**| Yum architecture | [optional]

### Return type

[**\Optimacros\NexusPhpApi\Model\PageAssetXO**](../Model/PageAssetXO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

