# Optimacros\NexusPhpApi\RepositoryManagementApi

All URIs are relative to *https://localhost/service/rest/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createRepository**](RepositoryManagementApi.md#createRepository) | **POST** /v1/repositories/maven/group | Create Maven group repository
[**createRepository1**](RepositoryManagementApi.md#createRepository1) | **POST** /v1/repositories/maven/hosted | Create Maven hosted repository
[**createRepository10**](RepositoryManagementApi.md#createRepository10) | **POST** /v1/repositories/npm/proxy | Create npm proxy repository
[**createRepository11**](RepositoryManagementApi.md#createRepository11) | **POST** /v1/repositories/nuget/group | Create NuGet group repository
[**createRepository12**](RepositoryManagementApi.md#createRepository12) | **POST** /v1/repositories/nuget/hosted | Create NuGet hosted repository
[**createRepository13**](RepositoryManagementApi.md#createRepository13) | **POST** /v1/repositories/nuget/proxy | Create NuGet proxy repository
[**createRepository14**](RepositoryManagementApi.md#createRepository14) | **POST** /v1/repositories/rubygems/group | Create RubyGems group repository
[**createRepository15**](RepositoryManagementApi.md#createRepository15) | **POST** /v1/repositories/rubygems/hosted | Create RubyGems hosted repository
[**createRepository16**](RepositoryManagementApi.md#createRepository16) | **POST** /v1/repositories/rubygems/proxy | Create RubyGems proxy repository
[**createRepository17**](RepositoryManagementApi.md#createRepository17) | **POST** /v1/repositories/docker/group | Create Docker group repository
[**createRepository18**](RepositoryManagementApi.md#createRepository18) | **POST** /v1/repositories/docker/hosted | Create Docker hosted repository
[**createRepository19**](RepositoryManagementApi.md#createRepository19) | **POST** /v1/repositories/docker/proxy | Create Docker proxy repository
[**createRepository2**](RepositoryManagementApi.md#createRepository2) | **POST** /v1/repositories/maven/proxy | Create Maven proxy repository
[**createRepository20**](RepositoryManagementApi.md#createRepository20) | **POST** /v1/repositories/yum/group | Create Yum group repository
[**createRepository21**](RepositoryManagementApi.md#createRepository21) | **POST** /v1/repositories/yum/hosted | Create Yum hosted repository
[**createRepository22**](RepositoryManagementApi.md#createRepository22) | **POST** /v1/repositories/yum/proxy | Create Yum proxy repository
[**createRepository23**](RepositoryManagementApi.md#createRepository23) | **POST** /v1/repositories/helm/hosted | Create Helm hosted repository
[**createRepository24**](RepositoryManagementApi.md#createRepository24) | **POST** /v1/repositories/helm/proxy | Create Helm proxy repository
[**createRepository25**](RepositoryManagementApi.md#createRepository25) | **POST** /v1/repositories/gitlfs/hosted | Create Git LFS hosted repository
[**createRepository26**](RepositoryManagementApi.md#createRepository26) | **POST** /v1/repositories/pypi/group | Create PyPI group repository
[**createRepository27**](RepositoryManagementApi.md#createRepository27) | **POST** /v1/repositories/pypi/hosted | Create PyPI hosted repository
[**createRepository28**](RepositoryManagementApi.md#createRepository28) | **POST** /v1/repositories/pypi/proxy | Create PyPI proxy repository
[**createRepository29**](RepositoryManagementApi.md#createRepository29) | **POST** /v1/repositories/conda/proxy | Create conda proxy repository
[**createRepository3**](RepositoryManagementApi.md#createRepository3) | **POST** /v1/repositories/apt/hosted | Create APT hosted repository
[**createRepository30**](RepositoryManagementApi.md#createRepository30) | **POST** /v1/repositories/conan/proxy | Create Conan proxy repository
[**createRepository31**](RepositoryManagementApi.md#createRepository31) | **POST** /v1/repositories/r/group | Create R group repository
[**createRepository32**](RepositoryManagementApi.md#createRepository32) | **POST** /v1/repositories/r/hosted | Create R hosted repository
[**createRepository33**](RepositoryManagementApi.md#createRepository33) | **POST** /v1/repositories/r/proxy | Create R proxy repository
[**createRepository34**](RepositoryManagementApi.md#createRepository34) | **POST** /v1/repositories/cocoapods/proxy | Create Cocoapods proxy repository
[**createRepository35**](RepositoryManagementApi.md#createRepository35) | **POST** /v1/repositories/go/group | Create a Go group repository
[**createRepository36**](RepositoryManagementApi.md#createRepository36) | **POST** /v1/repositories/go/proxy | Create a Go proxy repository
[**createRepository37**](RepositoryManagementApi.md#createRepository37) | **POST** /v1/repositories/p2/proxy | Create p2 proxy repository
[**createRepository38**](RepositoryManagementApi.md#createRepository38) | **POST** /v1/repositories/bower/group | Create Bower group repository
[**createRepository39**](RepositoryManagementApi.md#createRepository39) | **POST** /v1/repositories/bower/hosted | Create Bower hosted repository
[**createRepository4**](RepositoryManagementApi.md#createRepository4) | **POST** /v1/repositories/apt/proxy | Create APT proxy repository
[**createRepository40**](RepositoryManagementApi.md#createRepository40) | **POST** /v1/repositories/bower/proxy | Create Bower proxy repository
[**createRepository5**](RepositoryManagementApi.md#createRepository5) | **POST** /v1/repositories/raw/group | Create raw group repository
[**createRepository6**](RepositoryManagementApi.md#createRepository6) | **POST** /v1/repositories/raw/hosted | Create raw hosted repository
[**createRepository7**](RepositoryManagementApi.md#createRepository7) | **POST** /v1/repositories/raw/proxy | Create raw proxy repository
[**createRepository8**](RepositoryManagementApi.md#createRepository8) | **POST** /v1/repositories/npm/group | Create npm group repository
[**createRepository9**](RepositoryManagementApi.md#createRepository9) | **POST** /v1/repositories/npm/hosted | Create npm hosted repository
[**deleteRepository**](RepositoryManagementApi.md#deleteRepository) | **DELETE** /v1/repositories/{repositoryName} | Delete repository of any format
[**disableRepositoryHealthCheck**](RepositoryManagementApi.md#disableRepositoryHealthCheck) | **DELETE** /v1/repositories/{repositoryName}/health-check | Disable repository health check. Proxy repositories only.
[**enableRepositoryHealthCheck**](RepositoryManagementApi.md#enableRepositoryHealthCheck) | **POST** /v1/repositories/{repositoryName}/health-check | Enable repository health check. Proxy repositories only.
[**getRepositories**](RepositoryManagementApi.md#getRepositories) | **GET** /v1/repositorySettings | List repositories
[**getRepositories1**](RepositoryManagementApi.md#getRepositories1) | **GET** /v1/repositories | List repositories
[**getRepository**](RepositoryManagementApi.md#getRepository) | **GET** /v1/repositories/{repositoryName} | Get repository details
[**getRepository1**](RepositoryManagementApi.md#getRepository1) | **GET** /v1/repositories/maven/group/{repositoryName} | Get repository
[**getRepository10**](RepositoryManagementApi.md#getRepository10) | **GET** /v1/repositories/npm/hosted/{repositoryName} | Get repository
[**getRepository11**](RepositoryManagementApi.md#getRepository11) | **GET** /v1/repositories/npm/proxy/{repositoryName} | Get repository
[**getRepository12**](RepositoryManagementApi.md#getRepository12) | **GET** /v1/repositories/nuget/group/{repositoryName} | Get repository
[**getRepository13**](RepositoryManagementApi.md#getRepository13) | **GET** /v1/repositories/nuget/hosted/{repositoryName} | Get repository
[**getRepository14**](RepositoryManagementApi.md#getRepository14) | **GET** /v1/repositories/nuget/proxy/{repositoryName} | Get repository
[**getRepository15**](RepositoryManagementApi.md#getRepository15) | **GET** /v1/repositories/rubygems/group/{repositoryName} | Get repository
[**getRepository16**](RepositoryManagementApi.md#getRepository16) | **GET** /v1/repositories/rubygems/hosted/{repositoryName} | Get repository
[**getRepository17**](RepositoryManagementApi.md#getRepository17) | **GET** /v1/repositories/rubygems/proxy/{repositoryName} | Get repository
[**getRepository18**](RepositoryManagementApi.md#getRepository18) | **GET** /v1/repositories/docker/group/{repositoryName} | Get repository
[**getRepository19**](RepositoryManagementApi.md#getRepository19) | **GET** /v1/repositories/docker/hosted/{repositoryName} | Get repository
[**getRepository2**](RepositoryManagementApi.md#getRepository2) | **GET** /v1/repositories/maven/hosted/{repositoryName} | Get repository
[**getRepository20**](RepositoryManagementApi.md#getRepository20) | **GET** /v1/repositories/docker/proxy/{repositoryName} | Get repository
[**getRepository21**](RepositoryManagementApi.md#getRepository21) | **GET** /v1/repositories/yum/group/{repositoryName} | Get repository
[**getRepository22**](RepositoryManagementApi.md#getRepository22) | **GET** /v1/repositories/yum/hosted/{repositoryName} | Get repository
[**getRepository23**](RepositoryManagementApi.md#getRepository23) | **GET** /v1/repositories/yum/proxy/{repositoryName} | Get repository
[**getRepository24**](RepositoryManagementApi.md#getRepository24) | **GET** /v1/repositories/helm/hosted/{repositoryName} | Get repository
[**getRepository25**](RepositoryManagementApi.md#getRepository25) | **GET** /v1/repositories/helm/proxy/{repositoryName} | Get repository
[**getRepository26**](RepositoryManagementApi.md#getRepository26) | **GET** /v1/repositories/gitlfs/hosted/{repositoryName} | Get repository
[**getRepository27**](RepositoryManagementApi.md#getRepository27) | **GET** /v1/repositories/pypi/group/{repositoryName} | Get repository
[**getRepository28**](RepositoryManagementApi.md#getRepository28) | **GET** /v1/repositories/pypi/hosted/{repositoryName} | Get repository
[**getRepository29**](RepositoryManagementApi.md#getRepository29) | **GET** /v1/repositories/pypi/proxy/{repositoryName} | Get repository
[**getRepository3**](RepositoryManagementApi.md#getRepository3) | **GET** /v1/repositories/maven/proxy/{repositoryName} | Get repository
[**getRepository30**](RepositoryManagementApi.md#getRepository30) | **GET** /v1/repositories/conda/proxy/{repositoryName} | Get repository
[**getRepository31**](RepositoryManagementApi.md#getRepository31) | **GET** /v1/repositories/conan/proxy/{repositoryName} | Get repository
[**getRepository32**](RepositoryManagementApi.md#getRepository32) | **GET** /v1/repositories/r/group/{repositoryName} | Get repository
[**getRepository33**](RepositoryManagementApi.md#getRepository33) | **GET** /v1/repositories/r/hosted/{repositoryName} | Get repository
[**getRepository34**](RepositoryManagementApi.md#getRepository34) | **GET** /v1/repositories/r/proxy/{repositoryName} | Get repository
[**getRepository35**](RepositoryManagementApi.md#getRepository35) | **GET** /v1/repositories/cocoapods/proxy/{repositoryName} | Get repository
[**getRepository36**](RepositoryManagementApi.md#getRepository36) | **GET** /v1/repositories/go/group/{repositoryName} | Get repository
[**getRepository37**](RepositoryManagementApi.md#getRepository37) | **GET** /v1/repositories/go/proxy/{repositoryName} | Get repository
[**getRepository38**](RepositoryManagementApi.md#getRepository38) | **GET** /v1/repositories/p2/proxy/{repositoryName} | Get repository
[**getRepository39**](RepositoryManagementApi.md#getRepository39) | **GET** /v1/repositories/bower/group/{repositoryName} | Get repository
[**getRepository4**](RepositoryManagementApi.md#getRepository4) | **GET** /v1/repositories/apt/hosted/{repositoryName} | Get repository
[**getRepository40**](RepositoryManagementApi.md#getRepository40) | **GET** /v1/repositories/bower/hosted/{repositoryName} | Get repository
[**getRepository41**](RepositoryManagementApi.md#getRepository41) | **GET** /v1/repositories/bower/proxy/{repositoryName} | Get repository
[**getRepository5**](RepositoryManagementApi.md#getRepository5) | **GET** /v1/repositories/apt/proxy/{repositoryName} | Get repository
[**getRepository6**](RepositoryManagementApi.md#getRepository6) | **GET** /v1/repositories/raw/group/{repositoryName} | Get repository
[**getRepository7**](RepositoryManagementApi.md#getRepository7) | **GET** /v1/repositories/raw/hosted/{repositoryName} | Get repository
[**getRepository8**](RepositoryManagementApi.md#getRepository8) | **GET** /v1/repositories/raw/proxy/{repositoryName} | Get repository
[**getRepository9**](RepositoryManagementApi.md#getRepository9) | **GET** /v1/repositories/npm/group/{repositoryName} | Get repository
[**invalidateCache**](RepositoryManagementApi.md#invalidateCache) | **POST** /v1/repositories/{repositoryName}/invalidate-cache | Invalidate repository cache. Proxy or group repositories only.
[**rebuildIndex**](RepositoryManagementApi.md#rebuildIndex) | **POST** /v1/repositories/{repositoryName}/rebuild-index | Schedule a &#39;Repair - Rebuild repository search&#39; Task. Hosted or proxy repositories only.
[**updateRepository**](RepositoryManagementApi.md#updateRepository) | **PUT** /v1/repositories/maven/group/{repositoryName} | Update Maven group repository
[**updateRepository1**](RepositoryManagementApi.md#updateRepository1) | **PUT** /v1/repositories/maven/hosted/{repositoryName} | Update Maven hosted repository
[**updateRepository10**](RepositoryManagementApi.md#updateRepository10) | **PUT** /v1/repositories/npm/proxy/{repositoryName} | Update npm proxy repository
[**updateRepository11**](RepositoryManagementApi.md#updateRepository11) | **PUT** /v1/repositories/nuget/group/{repositoryName} | Update NuGet group repository
[**updateRepository12**](RepositoryManagementApi.md#updateRepository12) | **PUT** /v1/repositories/nuget/hosted/{repositoryName} | Update NuGet hosted repository
[**updateRepository13**](RepositoryManagementApi.md#updateRepository13) | **PUT** /v1/repositories/nuget/proxy/{repositoryName} | Update NuGet proxy repository
[**updateRepository14**](RepositoryManagementApi.md#updateRepository14) | **PUT** /v1/repositories/rubygems/group/{repositoryName} | Update RubyGems group repository
[**updateRepository15**](RepositoryManagementApi.md#updateRepository15) | **PUT** /v1/repositories/rubygems/hosted/{repositoryName} | Update RubyGems hosted repository
[**updateRepository16**](RepositoryManagementApi.md#updateRepository16) | **PUT** /v1/repositories/rubygems/proxy/{repositoryName} | Update RubyGems proxy repository
[**updateRepository17**](RepositoryManagementApi.md#updateRepository17) | **PUT** /v1/repositories/docker/group/{repositoryName} | Update Docker group repository
[**updateRepository18**](RepositoryManagementApi.md#updateRepository18) | **PUT** /v1/repositories/docker/hosted/{repositoryName} | Update Docker hosted repository
[**updateRepository19**](RepositoryManagementApi.md#updateRepository19) | **PUT** /v1/repositories/docker/proxy/{repositoryName} | Update Docker group repository
[**updateRepository2**](RepositoryManagementApi.md#updateRepository2) | **PUT** /v1/repositories/maven/proxy/{repositoryName} | Update Maven proxy repository
[**updateRepository20**](RepositoryManagementApi.md#updateRepository20) | **PUT** /v1/repositories/yum/group/{repositoryName} | Update Yum group repository
[**updateRepository21**](RepositoryManagementApi.md#updateRepository21) | **PUT** /v1/repositories/yum/hosted/{repositoryName} | Update Yum hosted repository
[**updateRepository22**](RepositoryManagementApi.md#updateRepository22) | **PUT** /v1/repositories/yum/proxy/{repositoryName} | Update Yum proxy repository
[**updateRepository23**](RepositoryManagementApi.md#updateRepository23) | **PUT** /v1/repositories/helm/hosted/{repositoryName} | Update Helm hosted repository
[**updateRepository24**](RepositoryManagementApi.md#updateRepository24) | **PUT** /v1/repositories/helm/proxy/{repositoryName} | Update Helm proxy repository
[**updateRepository25**](RepositoryManagementApi.md#updateRepository25) | **PUT** /v1/repositories/gitlfs/hosted/{repositoryName} | Update Git LFS hosted repository
[**updateRepository26**](RepositoryManagementApi.md#updateRepository26) | **PUT** /v1/repositories/pypi/group/{repositoryName} | Update PyPI group repository
[**updateRepository27**](RepositoryManagementApi.md#updateRepository27) | **PUT** /v1/repositories/pypi/hosted/{repositoryName} | Update PyPI hosted repository
[**updateRepository28**](RepositoryManagementApi.md#updateRepository28) | **PUT** /v1/repositories/pypi/proxy/{repositoryName} | Update PyPI proxy repository
[**updateRepository29**](RepositoryManagementApi.md#updateRepository29) | **PUT** /v1/repositories/conda/proxy/{repositoryName} | Update conda proxy repository
[**updateRepository3**](RepositoryManagementApi.md#updateRepository3) | **PUT** /v1/repositories/apt/hosted/{repositoryName} | Update APT hosted repository
[**updateRepository30**](RepositoryManagementApi.md#updateRepository30) | **PUT** /v1/repositories/conan/proxy/{repositoryName} | Update Conan proxy repository
[**updateRepository31**](RepositoryManagementApi.md#updateRepository31) | **PUT** /v1/repositories/r/group/{repositoryName} | Update R group repository
[**updateRepository32**](RepositoryManagementApi.md#updateRepository32) | **PUT** /v1/repositories/r/hosted/{repositoryName} | Update R hosted repository
[**updateRepository33**](RepositoryManagementApi.md#updateRepository33) | **PUT** /v1/repositories/r/proxy/{repositoryName} | Update R proxy repository
[**updateRepository34**](RepositoryManagementApi.md#updateRepository34) | **PUT** /v1/repositories/cocoapods/proxy/{repositoryName} | Update Cocoapods proxy repository
[**updateRepository35**](RepositoryManagementApi.md#updateRepository35) | **PUT** /v1/repositories/go/group/{repositoryName} | Update a Go group repository
[**updateRepository36**](RepositoryManagementApi.md#updateRepository36) | **PUT** /v1/repositories/go/proxy/{repositoryName} | Update a Go proxy repository
[**updateRepository37**](RepositoryManagementApi.md#updateRepository37) | **PUT** /v1/repositories/p2/proxy/{repositoryName} | Update p2 proxy repository
[**updateRepository38**](RepositoryManagementApi.md#updateRepository38) | **PUT** /v1/repositories/bower/group/{repositoryName} | Update Bower group repository
[**updateRepository39**](RepositoryManagementApi.md#updateRepository39) | **PUT** /v1/repositories/bower/hosted/{repositoryName} | Update Bower hosted repository
[**updateRepository4**](RepositoryManagementApi.md#updateRepository4) | **PUT** /v1/repositories/apt/proxy/{repositoryName} | Update APT proxy repository
[**updateRepository40**](RepositoryManagementApi.md#updateRepository40) | **PUT** /v1/repositories/bower/proxy/{repositoryName} | Update Bower proxy repository
[**updateRepository5**](RepositoryManagementApi.md#updateRepository5) | **PUT** /v1/repositories/raw/group/{repositoryName} | Update raw group repository
[**updateRepository6**](RepositoryManagementApi.md#updateRepository6) | **PUT** /v1/repositories/raw/hosted/{repositoryName} | Update raw hosted repository
[**updateRepository7**](RepositoryManagementApi.md#updateRepository7) | **PUT** /v1/repositories/raw/proxy/{repositoryName} | Update raw proxy repository
[**updateRepository8**](RepositoryManagementApi.md#updateRepository8) | **PUT** /v1/repositories/npm/group/{repositoryName} | Update npm group repository
[**updateRepository9**](RepositoryManagementApi.md#updateRepository9) | **PUT** /v1/repositories/npm/hosted/{repositoryName} | Update npm hosted repository


# **createRepository**
> createRepository($body)

Create Maven group repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Optimacros\NexusPhpApi\Model\MavenGroupRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\MavenGroupRepositoryApiRequest | 

try {
    $apiInstance->createRepository($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Optimacros\NexusPhpApi\Model\MavenGroupRepositoryApiRequest**](../Model/MavenGroupRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository1**
> createRepository1($body)

Create Maven hosted repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Optimacros\NexusPhpApi\Model\MavenHostedRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\MavenHostedRepositoryApiRequest | 

try {
    $apiInstance->createRepository1($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Optimacros\NexusPhpApi\Model\MavenHostedRepositoryApiRequest**](../Model/MavenHostedRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository10**
> createRepository10($body)

Create npm proxy repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Optimacros\NexusPhpApi\Model\NpmProxyRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\NpmProxyRepositoryApiRequest | 

try {
    $apiInstance->createRepository10($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository10: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Optimacros\NexusPhpApi\Model\NpmProxyRepositoryApiRequest**](../Model/NpmProxyRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository11**
> createRepository11($body)

Create NuGet group repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Optimacros\NexusPhpApi\Model\NugetGroupRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\NugetGroupRepositoryApiRequest | 

try {
    $apiInstance->createRepository11($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository11: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Optimacros\NexusPhpApi\Model\NugetGroupRepositoryApiRequest**](../Model/NugetGroupRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository12**
> createRepository12($body)

Create NuGet hosted repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Optimacros\NexusPhpApi\Model\NugetHostedRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\NugetHostedRepositoryApiRequest | 

try {
    $apiInstance->createRepository12($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository12: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Optimacros\NexusPhpApi\Model\NugetHostedRepositoryApiRequest**](../Model/NugetHostedRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository13**
> createRepository13($body)

Create NuGet proxy repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Optimacros\NexusPhpApi\Model\NugetProxyRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\NugetProxyRepositoryApiRequest | 

try {
    $apiInstance->createRepository13($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository13: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Optimacros\NexusPhpApi\Model\NugetProxyRepositoryApiRequest**](../Model/NugetProxyRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository14**
> createRepository14($body)

Create RubyGems group repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Optimacros\NexusPhpApi\Model\RubyGemsGroupRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\RubyGemsGroupRepositoryApiRequest | 

try {
    $apiInstance->createRepository14($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository14: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Optimacros\NexusPhpApi\Model\RubyGemsGroupRepositoryApiRequest**](../Model/RubyGemsGroupRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository15**
> createRepository15($body)

Create RubyGems hosted repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Optimacros\NexusPhpApi\Model\RubyGemsHostedRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\RubyGemsHostedRepositoryApiRequest | 

try {
    $apiInstance->createRepository15($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository15: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Optimacros\NexusPhpApi\Model\RubyGemsHostedRepositoryApiRequest**](../Model/RubyGemsHostedRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository16**
> createRepository16($body)

Create RubyGems proxy repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Optimacros\NexusPhpApi\Model\RubyGemsProxyRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\RubyGemsProxyRepositoryApiRequest | 

try {
    $apiInstance->createRepository16($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository16: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Optimacros\NexusPhpApi\Model\RubyGemsProxyRepositoryApiRequest**](../Model/RubyGemsProxyRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository17**
> createRepository17($body)

Create Docker group repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Optimacros\NexusPhpApi\Model\DockerGroupRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\DockerGroupRepositoryApiRequest | 

try {
    $apiInstance->createRepository17($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository17: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Optimacros\NexusPhpApi\Model\DockerGroupRepositoryApiRequest**](../Model/DockerGroupRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository18**
> createRepository18($body)

Create Docker hosted repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Optimacros\NexusPhpApi\Model\DockerHostedRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\DockerHostedRepositoryApiRequest | 

try {
    $apiInstance->createRepository18($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository18: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Optimacros\NexusPhpApi\Model\DockerHostedRepositoryApiRequest**](../Model/DockerHostedRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository19**
> createRepository19($body)

Create Docker proxy repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Optimacros\NexusPhpApi\Model\DockerProxyRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\DockerProxyRepositoryApiRequest | 

try {
    $apiInstance->createRepository19($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository19: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Optimacros\NexusPhpApi\Model\DockerProxyRepositoryApiRequest**](../Model/DockerProxyRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository2**
> createRepository2($body)

Create Maven proxy repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Optimacros\NexusPhpApi\Model\MavenProxyRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\MavenProxyRepositoryApiRequest | 

try {
    $apiInstance->createRepository2($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Optimacros\NexusPhpApi\Model\MavenProxyRepositoryApiRequest**](../Model/MavenProxyRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository20**
> createRepository20($body)

Create Yum group repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Optimacros\NexusPhpApi\Model\YumGroupRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\YumGroupRepositoryApiRequest | 

try {
    $apiInstance->createRepository20($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository20: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Optimacros\NexusPhpApi\Model\YumGroupRepositoryApiRequest**](../Model/YumGroupRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository21**
> createRepository21($body)

Create Yum hosted repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Optimacros\NexusPhpApi\Model\YumHostedRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\YumHostedRepositoryApiRequest | 

try {
    $apiInstance->createRepository21($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository21: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Optimacros\NexusPhpApi\Model\YumHostedRepositoryApiRequest**](../Model/YumHostedRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository22**
> createRepository22($body)

Create Yum proxy repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Optimacros\NexusPhpApi\Model\YumProxyRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\YumProxyRepositoryApiRequest | 

try {
    $apiInstance->createRepository22($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository22: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Optimacros\NexusPhpApi\Model\YumProxyRepositoryApiRequest**](../Model/YumProxyRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository23**
> createRepository23($body)

Create Helm hosted repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Optimacros\NexusPhpApi\Model\HelmHostedRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\HelmHostedRepositoryApiRequest | 

try {
    $apiInstance->createRepository23($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository23: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Optimacros\NexusPhpApi\Model\HelmHostedRepositoryApiRequest**](../Model/HelmHostedRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository24**
> createRepository24($body)

Create Helm proxy repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Optimacros\NexusPhpApi\Model\HelmProxyRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\HelmProxyRepositoryApiRequest | 

try {
    $apiInstance->createRepository24($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository24: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Optimacros\NexusPhpApi\Model\HelmProxyRepositoryApiRequest**](../Model/HelmProxyRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository25**
> createRepository25($body)

Create Git LFS hosted repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Optimacros\NexusPhpApi\Model\GitLfsHostedRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\GitLfsHostedRepositoryApiRequest | 

try {
    $apiInstance->createRepository25($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository25: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Optimacros\NexusPhpApi\Model\GitLfsHostedRepositoryApiRequest**](../Model/GitLfsHostedRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository26**
> createRepository26($body)

Create PyPI group repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Optimacros\NexusPhpApi\Model\PypiGroupRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\PypiGroupRepositoryApiRequest | 

try {
    $apiInstance->createRepository26($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository26: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Optimacros\NexusPhpApi\Model\PypiGroupRepositoryApiRequest**](../Model/PypiGroupRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository27**
> createRepository27($body)

Create PyPI hosted repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Optimacros\NexusPhpApi\Model\PypiHostedRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\PypiHostedRepositoryApiRequest | 

try {
    $apiInstance->createRepository27($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository27: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Optimacros\NexusPhpApi\Model\PypiHostedRepositoryApiRequest**](../Model/PypiHostedRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository28**
> createRepository28($body)

Create PyPI proxy repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Optimacros\NexusPhpApi\Model\PypiProxyRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\PypiProxyRepositoryApiRequest | 

try {
    $apiInstance->createRepository28($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository28: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Optimacros\NexusPhpApi\Model\PypiProxyRepositoryApiRequest**](../Model/PypiProxyRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository29**
> createRepository29($body)

Create conda proxy repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Optimacros\NexusPhpApi\Model\CondaProxyRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\CondaProxyRepositoryApiRequest | 

try {
    $apiInstance->createRepository29($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository29: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Optimacros\NexusPhpApi\Model\CondaProxyRepositoryApiRequest**](../Model/CondaProxyRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository3**
> createRepository3($body)

Create APT hosted repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Optimacros\NexusPhpApi\Model\AptHostedRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\AptHostedRepositoryApiRequest | 

try {
    $apiInstance->createRepository3($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Optimacros\NexusPhpApi\Model\AptHostedRepositoryApiRequest**](../Model/AptHostedRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository30**
> createRepository30($body)

Create Conan proxy repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Optimacros\NexusPhpApi\Model\ConanProxyRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\ConanProxyRepositoryApiRequest | 

try {
    $apiInstance->createRepository30($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository30: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Optimacros\NexusPhpApi\Model\ConanProxyRepositoryApiRequest**](../Model/ConanProxyRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository31**
> createRepository31($body)

Create R group repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Optimacros\NexusPhpApi\Model\RGroupRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\RGroupRepositoryApiRequest | 

try {
    $apiInstance->createRepository31($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository31: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Optimacros\NexusPhpApi\Model\RGroupRepositoryApiRequest**](../Model/RGroupRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository32**
> createRepository32($body)

Create R hosted repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Optimacros\NexusPhpApi\Model\RHostedRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\RHostedRepositoryApiRequest | 

try {
    $apiInstance->createRepository32($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository32: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Optimacros\NexusPhpApi\Model\RHostedRepositoryApiRequest**](../Model/RHostedRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository33**
> createRepository33($body)

Create R proxy repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Optimacros\NexusPhpApi\Model\RProxyRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\RProxyRepositoryApiRequest | 

try {
    $apiInstance->createRepository33($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository33: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Optimacros\NexusPhpApi\Model\RProxyRepositoryApiRequest**](../Model/RProxyRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository34**
> createRepository34($body)

Create Cocoapods proxy repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Optimacros\NexusPhpApi\Model\CocoapodsProxyRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\CocoapodsProxyRepositoryApiRequest | 

try {
    $apiInstance->createRepository34($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository34: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Optimacros\NexusPhpApi\Model\CocoapodsProxyRepositoryApiRequest**](../Model/CocoapodsProxyRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository35**
> createRepository35($body)

Create a Go group repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Optimacros\NexusPhpApi\Model\GolangGroupRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\GolangGroupRepositoryApiRequest | 

try {
    $apiInstance->createRepository35($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository35: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Optimacros\NexusPhpApi\Model\GolangGroupRepositoryApiRequest**](../Model/GolangGroupRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository36**
> createRepository36($body)

Create a Go proxy repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Optimacros\NexusPhpApi\Model\GolangProxyRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\GolangProxyRepositoryApiRequest | 

try {
    $apiInstance->createRepository36($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository36: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Optimacros\NexusPhpApi\Model\GolangProxyRepositoryApiRequest**](../Model/GolangProxyRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository37**
> createRepository37($body)

Create p2 proxy repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Optimacros\NexusPhpApi\Model\P2ProxyRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\P2ProxyRepositoryApiRequest | 

try {
    $apiInstance->createRepository37($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository37: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Optimacros\NexusPhpApi\Model\P2ProxyRepositoryApiRequest**](../Model/P2ProxyRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository38**
> createRepository38($body)

Create Bower group repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Optimacros\NexusPhpApi\Model\BowerGroupRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\BowerGroupRepositoryApiRequest | 

try {
    $apiInstance->createRepository38($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository38: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Optimacros\NexusPhpApi\Model\BowerGroupRepositoryApiRequest**](../Model/BowerGroupRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository39**
> createRepository39($body)

Create Bower hosted repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Optimacros\NexusPhpApi\Model\BowerHostedRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\BowerHostedRepositoryApiRequest | 

try {
    $apiInstance->createRepository39($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository39: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Optimacros\NexusPhpApi\Model\BowerHostedRepositoryApiRequest**](../Model/BowerHostedRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository4**
> createRepository4($body)

Create APT proxy repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Optimacros\NexusPhpApi\Model\AptProxyRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\AptProxyRepositoryApiRequest | 

try {
    $apiInstance->createRepository4($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository4: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Optimacros\NexusPhpApi\Model\AptProxyRepositoryApiRequest**](../Model/AptProxyRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository40**
> createRepository40($body)

Create Bower proxy repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Optimacros\NexusPhpApi\Model\BowerProxyRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\BowerProxyRepositoryApiRequest | 

try {
    $apiInstance->createRepository40($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository40: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Optimacros\NexusPhpApi\Model\BowerProxyRepositoryApiRequest**](../Model/BowerProxyRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository5**
> createRepository5($body)

Create raw group repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Optimacros\NexusPhpApi\Model\RawGroupRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\RawGroupRepositoryApiRequest | 

try {
    $apiInstance->createRepository5($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository5: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Optimacros\NexusPhpApi\Model\RawGroupRepositoryApiRequest**](../Model/RawGroupRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository6**
> createRepository6($body)

Create raw hosted repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Optimacros\NexusPhpApi\Model\RawHostedRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\RawHostedRepositoryApiRequest | 

try {
    $apiInstance->createRepository6($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository6: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Optimacros\NexusPhpApi\Model\RawHostedRepositoryApiRequest**](../Model/RawHostedRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository7**
> createRepository7($body)

Create raw proxy repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Optimacros\NexusPhpApi\Model\RawProxyRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\RawProxyRepositoryApiRequest | 

try {
    $apiInstance->createRepository7($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository7: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Optimacros\NexusPhpApi\Model\RawProxyRepositoryApiRequest**](../Model/RawProxyRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository8**
> createRepository8($body)

Create npm group repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Optimacros\NexusPhpApi\Model\NpmGroupRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\NpmGroupRepositoryApiRequest | 

try {
    $apiInstance->createRepository8($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository8: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Optimacros\NexusPhpApi\Model\NpmGroupRepositoryApiRequest**](../Model/NpmGroupRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository9**
> createRepository9($body)

Create npm hosted repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Optimacros\NexusPhpApi\Model\NpmHostedRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\NpmHostedRepositoryApiRequest | 

try {
    $apiInstance->createRepository9($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository9: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Optimacros\NexusPhpApi\Model\NpmHostedRepositoryApiRequest**](../Model/NpmHostedRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRepository**
> deleteRepository($repositoryName)

Delete repository of any format



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | Name of the repository to delete

try {
    $apiInstance->deleteRepository($repositoryName);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->deleteRepository: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**| Name of the repository to delete |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **disableRepositoryHealthCheck**
> disableRepositoryHealthCheck($repositoryName)

Disable repository health check. Proxy repositories only.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | Name of the repository to disable Repository Health Check for

try {
    $apiInstance->disableRepositoryHealthCheck($repositoryName);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->disableRepositoryHealthCheck: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**| Name of the repository to disable Repository Health Check for |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enableRepositoryHealthCheck**
> enableRepositoryHealthCheck($repositoryName)

Enable repository health check. Proxy repositories only.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | Name of the repository to enable Repository Health Check for

try {
    $apiInstance->enableRepositoryHealthCheck($repositoryName);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->enableRepositoryHealthCheck: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**| Name of the repository to enable Repository Health Check for |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRepositories**
> \Optimacros\NexusPhpApi\Model\AbstractApiRepository[] getRepositories()

List repositories



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getRepositories();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->getRepositories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Optimacros\NexusPhpApi\Model\AbstractApiRepository[]**](../Model/AbstractApiRepository.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRepositories1**
> \Optimacros\NexusPhpApi\Model\RepositoryXO[] getRepositories1()

List repositories



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getRepositories1();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->getRepositories1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Optimacros\NexusPhpApi\Model\RepositoryXO[]**](../Model/RepositoryXO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRepository**
> \Optimacros\NexusPhpApi\Model\RepositoryXO getRepository($repositoryName)

Get repository details



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | Name of the repository to get

try {
    $result = $apiInstance->getRepository($repositoryName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->getRepository: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**| Name of the repository to get |

### Return type

[**\Optimacros\NexusPhpApi\Model\RepositoryXO**](../Model/RepositoryXO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRepository1**
> \Optimacros\NexusPhpApi\Model\SimpleApiGroupRepository getRepository1($repositoryName)

Get repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | 

try {
    $result = $apiInstance->getRepository1($repositoryName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->getRepository1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**|  |

### Return type

[**\Optimacros\NexusPhpApi\Model\SimpleApiGroupRepository**](../Model/SimpleApiGroupRepository.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRepository10**
> \Optimacros\NexusPhpApi\Model\SimpleApiHostedRepository getRepository10($repositoryName)

Get repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | 

try {
    $result = $apiInstance->getRepository10($repositoryName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->getRepository10: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**|  |

### Return type

[**\Optimacros\NexusPhpApi\Model\SimpleApiHostedRepository**](../Model/SimpleApiHostedRepository.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRepository11**
> \Optimacros\NexusPhpApi\Model\NpmProxyApiRepository getRepository11($repositoryName)

Get repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | 

try {
    $result = $apiInstance->getRepository11($repositoryName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->getRepository11: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**|  |

### Return type

[**\Optimacros\NexusPhpApi\Model\NpmProxyApiRepository**](../Model/NpmProxyApiRepository.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRepository12**
> \Optimacros\NexusPhpApi\Model\SimpleApiGroupRepository getRepository12($repositoryName)

Get repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | 

try {
    $result = $apiInstance->getRepository12($repositoryName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->getRepository12: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**|  |

### Return type

[**\Optimacros\NexusPhpApi\Model\SimpleApiGroupRepository**](../Model/SimpleApiGroupRepository.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRepository13**
> \Optimacros\NexusPhpApi\Model\SimpleApiHostedRepository getRepository13($repositoryName)

Get repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | 

try {
    $result = $apiInstance->getRepository13($repositoryName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->getRepository13: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**|  |

### Return type

[**\Optimacros\NexusPhpApi\Model\SimpleApiHostedRepository**](../Model/SimpleApiHostedRepository.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRepository14**
> \Optimacros\NexusPhpApi\Model\NugetProxyApiRepository getRepository14($repositoryName)

Get repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | 

try {
    $result = $apiInstance->getRepository14($repositoryName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->getRepository14: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**|  |

### Return type

[**\Optimacros\NexusPhpApi\Model\NugetProxyApiRepository**](../Model/NugetProxyApiRepository.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRepository15**
> \Optimacros\NexusPhpApi\Model\SimpleApiGroupRepository getRepository15($repositoryName)

Get repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | 

try {
    $result = $apiInstance->getRepository15($repositoryName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->getRepository15: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**|  |

### Return type

[**\Optimacros\NexusPhpApi\Model\SimpleApiGroupRepository**](../Model/SimpleApiGroupRepository.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRepository16**
> \Optimacros\NexusPhpApi\Model\SimpleApiHostedRepository getRepository16($repositoryName)

Get repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | 

try {
    $result = $apiInstance->getRepository16($repositoryName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->getRepository16: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**|  |

### Return type

[**\Optimacros\NexusPhpApi\Model\SimpleApiHostedRepository**](../Model/SimpleApiHostedRepository.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRepository17**
> \Optimacros\NexusPhpApi\Model\SimpleApiProxyRepository getRepository17($repositoryName)

Get repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | 

try {
    $result = $apiInstance->getRepository17($repositoryName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->getRepository17: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**|  |

### Return type

[**\Optimacros\NexusPhpApi\Model\SimpleApiProxyRepository**](../Model/SimpleApiProxyRepository.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRepository18**
> \Optimacros\NexusPhpApi\Model\DockerGroupApiRepository getRepository18($repositoryName)

Get repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | 

try {
    $result = $apiInstance->getRepository18($repositoryName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->getRepository18: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**|  |

### Return type

[**\Optimacros\NexusPhpApi\Model\DockerGroupApiRepository**](../Model/DockerGroupApiRepository.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRepository19**
> \Optimacros\NexusPhpApi\Model\DockerHostedApiRepository getRepository19($repositoryName)

Get repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | 

try {
    $result = $apiInstance->getRepository19($repositoryName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->getRepository19: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**|  |

### Return type

[**\Optimacros\NexusPhpApi\Model\DockerHostedApiRepository**](../Model/DockerHostedApiRepository.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRepository2**
> \Optimacros\NexusPhpApi\Model\MavenHostedApiRepository getRepository2($repositoryName)

Get repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | 

try {
    $result = $apiInstance->getRepository2($repositoryName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->getRepository2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**|  |

### Return type

[**\Optimacros\NexusPhpApi\Model\MavenHostedApiRepository**](../Model/MavenHostedApiRepository.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRepository20**
> \Optimacros\NexusPhpApi\Model\DockerProxyApiRepository getRepository20($repositoryName)

Get repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | 

try {
    $result = $apiInstance->getRepository20($repositoryName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->getRepository20: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**|  |

### Return type

[**\Optimacros\NexusPhpApi\Model\DockerProxyApiRepository**](../Model/DockerProxyApiRepository.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRepository21**
> \Optimacros\NexusPhpApi\Model\SimpleApiGroupRepository getRepository21($repositoryName)

Get repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | 

try {
    $result = $apiInstance->getRepository21($repositoryName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->getRepository21: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**|  |

### Return type

[**\Optimacros\NexusPhpApi\Model\SimpleApiGroupRepository**](../Model/SimpleApiGroupRepository.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRepository22**
> \Optimacros\NexusPhpApi\Model\YumHostedApiRepository getRepository22($repositoryName)

Get repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | 

try {
    $result = $apiInstance->getRepository22($repositoryName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->getRepository22: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**|  |

### Return type

[**\Optimacros\NexusPhpApi\Model\YumHostedApiRepository**](../Model/YumHostedApiRepository.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRepository23**
> \Optimacros\NexusPhpApi\Model\SimpleApiProxyRepository getRepository23($repositoryName)

Get repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | 

try {
    $result = $apiInstance->getRepository23($repositoryName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->getRepository23: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**|  |

### Return type

[**\Optimacros\NexusPhpApi\Model\SimpleApiProxyRepository**](../Model/SimpleApiProxyRepository.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRepository24**
> \Optimacros\NexusPhpApi\Model\SimpleApiHostedRepository getRepository24($repositoryName)

Get repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | 

try {
    $result = $apiInstance->getRepository24($repositoryName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->getRepository24: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**|  |

### Return type

[**\Optimacros\NexusPhpApi\Model\SimpleApiHostedRepository**](../Model/SimpleApiHostedRepository.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRepository25**
> \Optimacros\NexusPhpApi\Model\SimpleApiProxyRepository getRepository25($repositoryName)

Get repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | 

try {
    $result = $apiInstance->getRepository25($repositoryName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->getRepository25: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**|  |

### Return type

[**\Optimacros\NexusPhpApi\Model\SimpleApiProxyRepository**](../Model/SimpleApiProxyRepository.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRepository26**
> \Optimacros\NexusPhpApi\Model\SimpleApiHostedRepository getRepository26($repositoryName)

Get repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | 

try {
    $result = $apiInstance->getRepository26($repositoryName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->getRepository26: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**|  |

### Return type

[**\Optimacros\NexusPhpApi\Model\SimpleApiHostedRepository**](../Model/SimpleApiHostedRepository.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRepository27**
> \Optimacros\NexusPhpApi\Model\SimpleApiGroupRepository getRepository27($repositoryName)

Get repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | 

try {
    $result = $apiInstance->getRepository27($repositoryName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->getRepository27: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**|  |

### Return type

[**\Optimacros\NexusPhpApi\Model\SimpleApiGroupRepository**](../Model/SimpleApiGroupRepository.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRepository28**
> \Optimacros\NexusPhpApi\Model\SimpleApiHostedRepository getRepository28($repositoryName)

Get repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | 

try {
    $result = $apiInstance->getRepository28($repositoryName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->getRepository28: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**|  |

### Return type

[**\Optimacros\NexusPhpApi\Model\SimpleApiHostedRepository**](../Model/SimpleApiHostedRepository.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRepository29**
> \Optimacros\NexusPhpApi\Model\SimpleApiProxyRepository getRepository29($repositoryName)

Get repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | 

try {
    $result = $apiInstance->getRepository29($repositoryName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->getRepository29: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**|  |

### Return type

[**\Optimacros\NexusPhpApi\Model\SimpleApiProxyRepository**](../Model/SimpleApiProxyRepository.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRepository3**
> \Optimacros\NexusPhpApi\Model\MavenProxyApiRepository getRepository3($repositoryName)

Get repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | 

try {
    $result = $apiInstance->getRepository3($repositoryName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->getRepository3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**|  |

### Return type

[**\Optimacros\NexusPhpApi\Model\MavenProxyApiRepository**](../Model/MavenProxyApiRepository.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRepository30**
> \Optimacros\NexusPhpApi\Model\SimpleApiProxyRepository getRepository30($repositoryName)

Get repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | 

try {
    $result = $apiInstance->getRepository30($repositoryName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->getRepository30: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**|  |

### Return type

[**\Optimacros\NexusPhpApi\Model\SimpleApiProxyRepository**](../Model/SimpleApiProxyRepository.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRepository31**
> \Optimacros\NexusPhpApi\Model\SimpleApiProxyRepository getRepository31($repositoryName)

Get repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | 

try {
    $result = $apiInstance->getRepository31($repositoryName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->getRepository31: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**|  |

### Return type

[**\Optimacros\NexusPhpApi\Model\SimpleApiProxyRepository**](../Model/SimpleApiProxyRepository.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRepository32**
> \Optimacros\NexusPhpApi\Model\SimpleApiGroupRepository getRepository32($repositoryName)

Get repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | 

try {
    $result = $apiInstance->getRepository32($repositoryName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->getRepository32: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**|  |

### Return type

[**\Optimacros\NexusPhpApi\Model\SimpleApiGroupRepository**](../Model/SimpleApiGroupRepository.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRepository33**
> \Optimacros\NexusPhpApi\Model\SimpleApiHostedRepository getRepository33($repositoryName)

Get repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | 

try {
    $result = $apiInstance->getRepository33($repositoryName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->getRepository33: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**|  |

### Return type

[**\Optimacros\NexusPhpApi\Model\SimpleApiHostedRepository**](../Model/SimpleApiHostedRepository.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRepository34**
> \Optimacros\NexusPhpApi\Model\SimpleApiProxyRepository getRepository34($repositoryName)

Get repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | 

try {
    $result = $apiInstance->getRepository34($repositoryName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->getRepository34: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**|  |

### Return type

[**\Optimacros\NexusPhpApi\Model\SimpleApiProxyRepository**](../Model/SimpleApiProxyRepository.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRepository35**
> \Optimacros\NexusPhpApi\Model\SimpleApiProxyRepository getRepository35($repositoryName)

Get repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | 

try {
    $result = $apiInstance->getRepository35($repositoryName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->getRepository35: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**|  |

### Return type

[**\Optimacros\NexusPhpApi\Model\SimpleApiProxyRepository**](../Model/SimpleApiProxyRepository.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRepository36**
> \Optimacros\NexusPhpApi\Model\SimpleApiGroupRepository getRepository36($repositoryName)

Get repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | 

try {
    $result = $apiInstance->getRepository36($repositoryName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->getRepository36: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**|  |

### Return type

[**\Optimacros\NexusPhpApi\Model\SimpleApiGroupRepository**](../Model/SimpleApiGroupRepository.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRepository37**
> \Optimacros\NexusPhpApi\Model\SimpleApiProxyRepository getRepository37($repositoryName)

Get repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | 

try {
    $result = $apiInstance->getRepository37($repositoryName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->getRepository37: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**|  |

### Return type

[**\Optimacros\NexusPhpApi\Model\SimpleApiProxyRepository**](../Model/SimpleApiProxyRepository.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRepository38**
> \Optimacros\NexusPhpApi\Model\SimpleApiProxyRepository getRepository38($repositoryName)

Get repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | 

try {
    $result = $apiInstance->getRepository38($repositoryName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->getRepository38: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**|  |

### Return type

[**\Optimacros\NexusPhpApi\Model\SimpleApiProxyRepository**](../Model/SimpleApiProxyRepository.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRepository39**
> \Optimacros\NexusPhpApi\Model\SimpleApiGroupRepository getRepository39($repositoryName)

Get repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | 

try {
    $result = $apiInstance->getRepository39($repositoryName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->getRepository39: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**|  |

### Return type

[**\Optimacros\NexusPhpApi\Model\SimpleApiGroupRepository**](../Model/SimpleApiGroupRepository.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRepository4**
> \Optimacros\NexusPhpApi\Model\AptHostedApiRepository getRepository4($repositoryName)

Get repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | 

try {
    $result = $apiInstance->getRepository4($repositoryName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->getRepository4: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**|  |

### Return type

[**\Optimacros\NexusPhpApi\Model\AptHostedApiRepository**](../Model/AptHostedApiRepository.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRepository40**
> \Optimacros\NexusPhpApi\Model\SimpleApiHostedRepository getRepository40($repositoryName)

Get repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | 

try {
    $result = $apiInstance->getRepository40($repositoryName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->getRepository40: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**|  |

### Return type

[**\Optimacros\NexusPhpApi\Model\SimpleApiHostedRepository**](../Model/SimpleApiHostedRepository.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRepository41**
> \Optimacros\NexusPhpApi\Model\BowerProxyApiRepository getRepository41($repositoryName)

Get repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | 

try {
    $result = $apiInstance->getRepository41($repositoryName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->getRepository41: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**|  |

### Return type

[**\Optimacros\NexusPhpApi\Model\BowerProxyApiRepository**](../Model/BowerProxyApiRepository.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRepository5**
> \Optimacros\NexusPhpApi\Model\AptProxyApiRepository getRepository5($repositoryName)

Get repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | 

try {
    $result = $apiInstance->getRepository5($repositoryName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->getRepository5: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**|  |

### Return type

[**\Optimacros\NexusPhpApi\Model\AptProxyApiRepository**](../Model/AptProxyApiRepository.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRepository6**
> \Optimacros\NexusPhpApi\Model\SimpleApiGroupRepository getRepository6($repositoryName)

Get repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | 

try {
    $result = $apiInstance->getRepository6($repositoryName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->getRepository6: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**|  |

### Return type

[**\Optimacros\NexusPhpApi\Model\SimpleApiGroupRepository**](../Model/SimpleApiGroupRepository.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRepository7**
> \Optimacros\NexusPhpApi\Model\SimpleApiHostedRepository getRepository7($repositoryName)

Get repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | 

try {
    $result = $apiInstance->getRepository7($repositoryName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->getRepository7: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**|  |

### Return type

[**\Optimacros\NexusPhpApi\Model\SimpleApiHostedRepository**](../Model/SimpleApiHostedRepository.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRepository8**
> \Optimacros\NexusPhpApi\Model\SimpleApiProxyRepository getRepository8($repositoryName)

Get repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | 

try {
    $result = $apiInstance->getRepository8($repositoryName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->getRepository8: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**|  |

### Return type

[**\Optimacros\NexusPhpApi\Model\SimpleApiProxyRepository**](../Model/SimpleApiProxyRepository.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRepository9**
> \Optimacros\NexusPhpApi\Model\SimpleApiGroupDeployRepository getRepository9($repositoryName)

Get repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | 

try {
    $result = $apiInstance->getRepository9($repositoryName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->getRepository9: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**|  |

### Return type

[**\Optimacros\NexusPhpApi\Model\SimpleApiGroupDeployRepository**](../Model/SimpleApiGroupDeployRepository.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invalidateCache**
> invalidateCache($repositoryName)

Invalidate repository cache. Proxy or group repositories only.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | Name of the repository to invalidate cache

try {
    $apiInstance->invalidateCache($repositoryName);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->invalidateCache: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**| Name of the repository to invalidate cache |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rebuildIndex**
> rebuildIndex($repositoryName)

Schedule a 'Repair - Rebuild repository search' Task. Hosted or proxy repositories only.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | Name of the repository to rebuild index

try {
    $apiInstance->rebuildIndex($repositoryName);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->rebuildIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**| Name of the repository to rebuild index |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository**
> updateRepository($repositoryName, $body)

Update Maven group repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | Name of the repository to update
$body = new \Optimacros\NexusPhpApi\Model\MavenGroupRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\MavenGroupRepositoryApiRequest | 

try {
    $apiInstance->updateRepository($repositoryName, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**| Name of the repository to update |
 **body** | [**\Optimacros\NexusPhpApi\Model\MavenGroupRepositoryApiRequest**](../Model/MavenGroupRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository1**
> updateRepository1($repositoryName, $body)

Update Maven hosted repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | Name of the repository to update
$body = new \Optimacros\NexusPhpApi\Model\MavenHostedRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\MavenHostedRepositoryApiRequest | 

try {
    $apiInstance->updateRepository1($repositoryName, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**| Name of the repository to update |
 **body** | [**\Optimacros\NexusPhpApi\Model\MavenHostedRepositoryApiRequest**](../Model/MavenHostedRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository10**
> updateRepository10($repositoryName, $body)

Update npm proxy repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | Name of the repository to update
$body = new \Optimacros\NexusPhpApi\Model\NpmProxyRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\NpmProxyRepositoryApiRequest | 

try {
    $apiInstance->updateRepository10($repositoryName, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository10: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**| Name of the repository to update |
 **body** | [**\Optimacros\NexusPhpApi\Model\NpmProxyRepositoryApiRequest**](../Model/NpmProxyRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository11**
> updateRepository11($repositoryName, $body)

Update NuGet group repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | Name of the repository to update
$body = new \Optimacros\NexusPhpApi\Model\NugetGroupRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\NugetGroupRepositoryApiRequest | 

try {
    $apiInstance->updateRepository11($repositoryName, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository11: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**| Name of the repository to update |
 **body** | [**\Optimacros\NexusPhpApi\Model\NugetGroupRepositoryApiRequest**](../Model/NugetGroupRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository12**
> updateRepository12($repositoryName, $body)

Update NuGet hosted repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | Name of the repository to update
$body = new \Optimacros\NexusPhpApi\Model\NugetHostedRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\NugetHostedRepositoryApiRequest | 

try {
    $apiInstance->updateRepository12($repositoryName, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository12: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**| Name of the repository to update |
 **body** | [**\Optimacros\NexusPhpApi\Model\NugetHostedRepositoryApiRequest**](../Model/NugetHostedRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository13**
> updateRepository13($repositoryName, $body)

Update NuGet proxy repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | Name of the repository to update
$body = new \Optimacros\NexusPhpApi\Model\NugetProxyRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\NugetProxyRepositoryApiRequest | 

try {
    $apiInstance->updateRepository13($repositoryName, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository13: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**| Name of the repository to update |
 **body** | [**\Optimacros\NexusPhpApi\Model\NugetProxyRepositoryApiRequest**](../Model/NugetProxyRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository14**
> updateRepository14($repositoryName, $body)

Update RubyGems group repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | Name of the repository to update
$body = new \Optimacros\NexusPhpApi\Model\RubyGemsGroupRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\RubyGemsGroupRepositoryApiRequest | 

try {
    $apiInstance->updateRepository14($repositoryName, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository14: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**| Name of the repository to update |
 **body** | [**\Optimacros\NexusPhpApi\Model\RubyGemsGroupRepositoryApiRequest**](../Model/RubyGemsGroupRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository15**
> updateRepository15($repositoryName, $body)

Update RubyGems hosted repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | Name of the repository to update
$body = new \Optimacros\NexusPhpApi\Model\RubyGemsHostedRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\RubyGemsHostedRepositoryApiRequest | 

try {
    $apiInstance->updateRepository15($repositoryName, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository15: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**| Name of the repository to update |
 **body** | [**\Optimacros\NexusPhpApi\Model\RubyGemsHostedRepositoryApiRequest**](../Model/RubyGemsHostedRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository16**
> updateRepository16($repositoryName, $body)

Update RubyGems proxy repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | Name of the repository to update
$body = new \Optimacros\NexusPhpApi\Model\RubyGemsProxyRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\RubyGemsProxyRepositoryApiRequest | 

try {
    $apiInstance->updateRepository16($repositoryName, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository16: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**| Name of the repository to update |
 **body** | [**\Optimacros\NexusPhpApi\Model\RubyGemsProxyRepositoryApiRequest**](../Model/RubyGemsProxyRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository17**
> updateRepository17($repositoryName, $body)

Update Docker group repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | Name of the repository to update
$body = new \Optimacros\NexusPhpApi\Model\DockerGroupRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\DockerGroupRepositoryApiRequest | 

try {
    $apiInstance->updateRepository17($repositoryName, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository17: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**| Name of the repository to update |
 **body** | [**\Optimacros\NexusPhpApi\Model\DockerGroupRepositoryApiRequest**](../Model/DockerGroupRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository18**
> updateRepository18($repositoryName, $body)

Update Docker hosted repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | Name of the repository to update
$body = new \Optimacros\NexusPhpApi\Model\DockerHostedRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\DockerHostedRepositoryApiRequest | 

try {
    $apiInstance->updateRepository18($repositoryName, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository18: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**| Name of the repository to update |
 **body** | [**\Optimacros\NexusPhpApi\Model\DockerHostedRepositoryApiRequest**](../Model/DockerHostedRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository19**
> updateRepository19($repositoryName, $body)

Update Docker group repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | Name of the repository to update
$body = new \Optimacros\NexusPhpApi\Model\DockerProxyRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\DockerProxyRepositoryApiRequest | 

try {
    $apiInstance->updateRepository19($repositoryName, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository19: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**| Name of the repository to update |
 **body** | [**\Optimacros\NexusPhpApi\Model\DockerProxyRepositoryApiRequest**](../Model/DockerProxyRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository2**
> updateRepository2($repositoryName, $body)

Update Maven proxy repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | Name of the repository to update
$body = new \Optimacros\NexusPhpApi\Model\MavenProxyRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\MavenProxyRepositoryApiRequest | 

try {
    $apiInstance->updateRepository2($repositoryName, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**| Name of the repository to update |
 **body** | [**\Optimacros\NexusPhpApi\Model\MavenProxyRepositoryApiRequest**](../Model/MavenProxyRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository20**
> updateRepository20($repositoryName, $body)

Update Yum group repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | Name of the repository to update
$body = new \Optimacros\NexusPhpApi\Model\YumGroupRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\YumGroupRepositoryApiRequest | 

try {
    $apiInstance->updateRepository20($repositoryName, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository20: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**| Name of the repository to update |
 **body** | [**\Optimacros\NexusPhpApi\Model\YumGroupRepositoryApiRequest**](../Model/YumGroupRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository21**
> updateRepository21($repositoryName, $body)

Update Yum hosted repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | Name of the repository to update
$body = new \Optimacros\NexusPhpApi\Model\YumHostedRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\YumHostedRepositoryApiRequest | 

try {
    $apiInstance->updateRepository21($repositoryName, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository21: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**| Name of the repository to update |
 **body** | [**\Optimacros\NexusPhpApi\Model\YumHostedRepositoryApiRequest**](../Model/YumHostedRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository22**
> updateRepository22($repositoryName, $body)

Update Yum proxy repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | Name of the repository to update
$body = new \Optimacros\NexusPhpApi\Model\YumProxyRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\YumProxyRepositoryApiRequest | 

try {
    $apiInstance->updateRepository22($repositoryName, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository22: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**| Name of the repository to update |
 **body** | [**\Optimacros\NexusPhpApi\Model\YumProxyRepositoryApiRequest**](../Model/YumProxyRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository23**
> updateRepository23($repositoryName, $body)

Update Helm hosted repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | Name of the repository to update
$body = new \Optimacros\NexusPhpApi\Model\HelmHostedRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\HelmHostedRepositoryApiRequest | 

try {
    $apiInstance->updateRepository23($repositoryName, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository23: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**| Name of the repository to update |
 **body** | [**\Optimacros\NexusPhpApi\Model\HelmHostedRepositoryApiRequest**](../Model/HelmHostedRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository24**
> updateRepository24($repositoryName, $body)

Update Helm proxy repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | Name of the repository to update
$body = new \Optimacros\NexusPhpApi\Model\HelmProxyRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\HelmProxyRepositoryApiRequest | 

try {
    $apiInstance->updateRepository24($repositoryName, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository24: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**| Name of the repository to update |
 **body** | [**\Optimacros\NexusPhpApi\Model\HelmProxyRepositoryApiRequest**](../Model/HelmProxyRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository25**
> updateRepository25($repositoryName, $body)

Update Git LFS hosted repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | Name of the repository to update
$body = new \Optimacros\NexusPhpApi\Model\GitLfsHostedRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\GitLfsHostedRepositoryApiRequest | 

try {
    $apiInstance->updateRepository25($repositoryName, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository25: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**| Name of the repository to update |
 **body** | [**\Optimacros\NexusPhpApi\Model\GitLfsHostedRepositoryApiRequest**](../Model/GitLfsHostedRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository26**
> updateRepository26($repositoryName, $body)

Update PyPI group repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | Name of the repository to update
$body = new \Optimacros\NexusPhpApi\Model\PypiGroupRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\PypiGroupRepositoryApiRequest | 

try {
    $apiInstance->updateRepository26($repositoryName, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository26: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**| Name of the repository to update |
 **body** | [**\Optimacros\NexusPhpApi\Model\PypiGroupRepositoryApiRequest**](../Model/PypiGroupRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository27**
> updateRepository27($repositoryName, $body)

Update PyPI hosted repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | Name of the repository to update
$body = new \Optimacros\NexusPhpApi\Model\PypiHostedRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\PypiHostedRepositoryApiRequest | 

try {
    $apiInstance->updateRepository27($repositoryName, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository27: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**| Name of the repository to update |
 **body** | [**\Optimacros\NexusPhpApi\Model\PypiHostedRepositoryApiRequest**](../Model/PypiHostedRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository28**
> updateRepository28($repositoryName, $body)

Update PyPI proxy repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | Name of the repository to update
$body = new \Optimacros\NexusPhpApi\Model\PypiProxyRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\PypiProxyRepositoryApiRequest | 

try {
    $apiInstance->updateRepository28($repositoryName, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository28: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**| Name of the repository to update |
 **body** | [**\Optimacros\NexusPhpApi\Model\PypiProxyRepositoryApiRequest**](../Model/PypiProxyRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository29**
> updateRepository29($repositoryName, $body)

Update conda proxy repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | Name of the repository to update
$body = new \Optimacros\NexusPhpApi\Model\CondaProxyRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\CondaProxyRepositoryApiRequest | 

try {
    $apiInstance->updateRepository29($repositoryName, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository29: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**| Name of the repository to update |
 **body** | [**\Optimacros\NexusPhpApi\Model\CondaProxyRepositoryApiRequest**](../Model/CondaProxyRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository3**
> updateRepository3($repositoryName, $body)

Update APT hosted repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | Name of the repository to update
$body = new \Optimacros\NexusPhpApi\Model\AptHostedRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\AptHostedRepositoryApiRequest | 

try {
    $apiInstance->updateRepository3($repositoryName, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**| Name of the repository to update |
 **body** | [**\Optimacros\NexusPhpApi\Model\AptHostedRepositoryApiRequest**](../Model/AptHostedRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository30**
> updateRepository30($repositoryName, $body)

Update Conan proxy repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | Name of the repository to update
$body = new \Optimacros\NexusPhpApi\Model\ConanProxyRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\ConanProxyRepositoryApiRequest | 

try {
    $apiInstance->updateRepository30($repositoryName, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository30: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**| Name of the repository to update |
 **body** | [**\Optimacros\NexusPhpApi\Model\ConanProxyRepositoryApiRequest**](../Model/ConanProxyRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository31**
> updateRepository31($repositoryName, $body)

Update R group repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | Name of the repository to update
$body = new \Optimacros\NexusPhpApi\Model\RGroupRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\RGroupRepositoryApiRequest | 

try {
    $apiInstance->updateRepository31($repositoryName, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository31: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**| Name of the repository to update |
 **body** | [**\Optimacros\NexusPhpApi\Model\RGroupRepositoryApiRequest**](../Model/RGroupRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository32**
> updateRepository32($repositoryName, $body)

Update R hosted repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | Name of the repository to update
$body = new \Optimacros\NexusPhpApi\Model\RHostedRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\RHostedRepositoryApiRequest | 

try {
    $apiInstance->updateRepository32($repositoryName, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository32: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**| Name of the repository to update |
 **body** | [**\Optimacros\NexusPhpApi\Model\RHostedRepositoryApiRequest**](../Model/RHostedRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository33**
> updateRepository33($repositoryName, $body)

Update R proxy repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | Name of the repository to update
$body = new \Optimacros\NexusPhpApi\Model\RProxyRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\RProxyRepositoryApiRequest | 

try {
    $apiInstance->updateRepository33($repositoryName, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository33: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**| Name of the repository to update |
 **body** | [**\Optimacros\NexusPhpApi\Model\RProxyRepositoryApiRequest**](../Model/RProxyRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository34**
> updateRepository34($repositoryName, $body)

Update Cocoapods proxy repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | Name of the repository to update
$body = new \Optimacros\NexusPhpApi\Model\CocoapodsProxyRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\CocoapodsProxyRepositoryApiRequest | 

try {
    $apiInstance->updateRepository34($repositoryName, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository34: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**| Name of the repository to update |
 **body** | [**\Optimacros\NexusPhpApi\Model\CocoapodsProxyRepositoryApiRequest**](../Model/CocoapodsProxyRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository35**
> updateRepository35($repositoryName, $body)

Update a Go group repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | Name of the repository to update
$body = new \Optimacros\NexusPhpApi\Model\GolangGroupRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\GolangGroupRepositoryApiRequest | 

try {
    $apiInstance->updateRepository35($repositoryName, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository35: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**| Name of the repository to update |
 **body** | [**\Optimacros\NexusPhpApi\Model\GolangGroupRepositoryApiRequest**](../Model/GolangGroupRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository36**
> updateRepository36($repositoryName, $body)

Update a Go proxy repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | Name of the repository to update
$body = new \Optimacros\NexusPhpApi\Model\GolangProxyRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\GolangProxyRepositoryApiRequest | 

try {
    $apiInstance->updateRepository36($repositoryName, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository36: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**| Name of the repository to update |
 **body** | [**\Optimacros\NexusPhpApi\Model\GolangProxyRepositoryApiRequest**](../Model/GolangProxyRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository37**
> updateRepository37($repositoryName, $body)

Update p2 proxy repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | Name of the repository to update
$body = new \Optimacros\NexusPhpApi\Model\P2ProxyRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\P2ProxyRepositoryApiRequest | 

try {
    $apiInstance->updateRepository37($repositoryName, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository37: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**| Name of the repository to update |
 **body** | [**\Optimacros\NexusPhpApi\Model\P2ProxyRepositoryApiRequest**](../Model/P2ProxyRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository38**
> updateRepository38($repositoryName, $body)

Update Bower group repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | Name of the repository to update
$body = new \Optimacros\NexusPhpApi\Model\BowerGroupRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\BowerGroupRepositoryApiRequest | 

try {
    $apiInstance->updateRepository38($repositoryName, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository38: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**| Name of the repository to update |
 **body** | [**\Optimacros\NexusPhpApi\Model\BowerGroupRepositoryApiRequest**](../Model/BowerGroupRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository39**
> updateRepository39($repositoryName, $body)

Update Bower hosted repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | Name of the repository to update
$body = new \Optimacros\NexusPhpApi\Model\BowerHostedRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\BowerHostedRepositoryApiRequest | 

try {
    $apiInstance->updateRepository39($repositoryName, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository39: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**| Name of the repository to update |
 **body** | [**\Optimacros\NexusPhpApi\Model\BowerHostedRepositoryApiRequest**](../Model/BowerHostedRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository4**
> updateRepository4($repositoryName, $body)

Update APT proxy repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | Name of the repository to update
$body = new \Optimacros\NexusPhpApi\Model\AptProxyRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\AptProxyRepositoryApiRequest | 

try {
    $apiInstance->updateRepository4($repositoryName, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository4: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**| Name of the repository to update |
 **body** | [**\Optimacros\NexusPhpApi\Model\AptProxyRepositoryApiRequest**](../Model/AptProxyRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository40**
> updateRepository40($repositoryName, $body)

Update Bower proxy repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | Name of the repository to update
$body = new \Optimacros\NexusPhpApi\Model\BowerProxyRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\BowerProxyRepositoryApiRequest | 

try {
    $apiInstance->updateRepository40($repositoryName, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository40: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**| Name of the repository to update |
 **body** | [**\Optimacros\NexusPhpApi\Model\BowerProxyRepositoryApiRequest**](../Model/BowerProxyRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository5**
> updateRepository5($repositoryName, $body)

Update raw group repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | Name of the repository to update
$body = new \Optimacros\NexusPhpApi\Model\RawGroupRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\RawGroupRepositoryApiRequest | 

try {
    $apiInstance->updateRepository5($repositoryName, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository5: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**| Name of the repository to update |
 **body** | [**\Optimacros\NexusPhpApi\Model\RawGroupRepositoryApiRequest**](../Model/RawGroupRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository6**
> updateRepository6($repositoryName, $body)

Update raw hosted repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | Name of the repository to update
$body = new \Optimacros\NexusPhpApi\Model\RawHostedRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\RawHostedRepositoryApiRequest | 

try {
    $apiInstance->updateRepository6($repositoryName, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository6: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**| Name of the repository to update |
 **body** | [**\Optimacros\NexusPhpApi\Model\RawHostedRepositoryApiRequest**](../Model/RawHostedRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository7**
> updateRepository7($repositoryName, $body)

Update raw proxy repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | Name of the repository to update
$body = new \Optimacros\NexusPhpApi\Model\RawProxyRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\RawProxyRepositoryApiRequest | 

try {
    $apiInstance->updateRepository7($repositoryName, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository7: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**| Name of the repository to update |
 **body** | [**\Optimacros\NexusPhpApi\Model\RawProxyRepositoryApiRequest**](../Model/RawProxyRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository8**
> updateRepository8($repositoryName, $body)

Update npm group repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | Name of the repository to update
$body = new \Optimacros\NexusPhpApi\Model\NpmGroupRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\NpmGroupRepositoryApiRequest | 

try {
    $apiInstance->updateRepository8($repositoryName, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository8: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**| Name of the repository to update |
 **body** | [**\Optimacros\NexusPhpApi\Model\NpmGroupRepositoryApiRequest**](../Model/NpmGroupRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository9**
> updateRepository9($repositoryName, $body)

Update npm hosted repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repositoryName = "repositoryName_example"; // string | Name of the repository to update
$body = new \Optimacros\NexusPhpApi\Model\NpmHostedRepositoryApiRequest(); // \Optimacros\NexusPhpApi\Model\NpmHostedRepositoryApiRequest | 

try {
    $apiInstance->updateRepository9($repositoryName, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository9: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repositoryName** | **string**| Name of the repository to update |
 **body** | [**\Optimacros\NexusPhpApi\Model\NpmHostedRepositoryApiRequest**](../Model/NpmHostedRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

