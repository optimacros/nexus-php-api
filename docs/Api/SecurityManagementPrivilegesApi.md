# Optimacros\NexusPhpApi\SecurityManagementPrivilegesApi

All URIs are relative to *https://localhost/service/rest/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPrivilege**](SecurityManagementPrivilegesApi.md#createPrivilege) | **POST** /v1/security/privileges/wildcard | Create a wildcard type privilege.
[**createPrivilege1**](SecurityManagementPrivilegesApi.md#createPrivilege1) | **POST** /v1/security/privileges/application | Create an application type privilege.
[**createPrivilege2**](SecurityManagementPrivilegesApi.md#createPrivilege2) | **POST** /v1/security/privileges/repository-content-selector | Create a repository content selector type privilege.
[**createPrivilege3**](SecurityManagementPrivilegesApi.md#createPrivilege3) | **POST** /v1/security/privileges/repository-view | Create a repository view type privilege.
[**createPrivilege4**](SecurityManagementPrivilegesApi.md#createPrivilege4) | **POST** /v1/security/privileges/repository-admin | Create a repository admin type privilege.
[**createPrivilege5**](SecurityManagementPrivilegesApi.md#createPrivilege5) | **POST** /v1/security/privileges/script | Create a script type privilege.
[**deletePrivilege**](SecurityManagementPrivilegesApi.md#deletePrivilege) | **DELETE** /v1/security/privileges/{privilegeName} | Delete a privilege by name.
[**getPrivilege**](SecurityManagementPrivilegesApi.md#getPrivilege) | **GET** /v1/security/privileges/{privilegeName} | Retrieve a privilege by name.
[**getPrivileges**](SecurityManagementPrivilegesApi.md#getPrivileges) | **GET** /v1/security/privileges | Retrieve a list of privileges.
[**updatePrivilege**](SecurityManagementPrivilegesApi.md#updatePrivilege) | **PUT** /v1/security/privileges/wildcard/{privilegeName} | Update a wildcard type privilege.
[**updatePrivilege1**](SecurityManagementPrivilegesApi.md#updatePrivilege1) | **PUT** /v1/security/privileges/application/{privilegeName} | Update an application type privilege.
[**updatePrivilege2**](SecurityManagementPrivilegesApi.md#updatePrivilege2) | **PUT** /v1/security/privileges/repository-view/{privilegeName} | Update a repository view type privilege.
[**updatePrivilege3**](SecurityManagementPrivilegesApi.md#updatePrivilege3) | **PUT** /v1/security/privileges/repository-admin/{privilegeName} | Update a repository admin type privilege.
[**updatePrivilege4**](SecurityManagementPrivilegesApi.md#updatePrivilege4) | **PUT** /v1/security/privileges/repository-content-selector/{privilegeName} | Update a repository content selector type privilege.
[**updatePrivilege5**](SecurityManagementPrivilegesApi.md#updatePrivilege5) | **PUT** /v1/security/privileges/script/{privilegeName} | Update a script type privilege.


# **createPrivilege**
> createPrivilege($body)

Create a wildcard type privilege.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\SecurityManagementPrivilegesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Optimacros\NexusPhpApi\Model\ApiPrivilegeWildcardRequest(); // \Optimacros\NexusPhpApi\Model\ApiPrivilegeWildcardRequest | The privilege to create.

try {
    $apiInstance->createPrivilege($body);
} catch (Exception $e) {
    echo 'Exception when calling SecurityManagementPrivilegesApi->createPrivilege: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Optimacros\NexusPhpApi\Model\ApiPrivilegeWildcardRequest**](../Model/ApiPrivilegeWildcardRequest.md)| The privilege to create. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPrivilege1**
> createPrivilege1($body)

Create an application type privilege.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\SecurityManagementPrivilegesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Optimacros\NexusPhpApi\Model\ApiPrivilegeApplicationRequest(); // \Optimacros\NexusPhpApi\Model\ApiPrivilegeApplicationRequest | The privilege to create.

try {
    $apiInstance->createPrivilege1($body);
} catch (Exception $e) {
    echo 'Exception when calling SecurityManagementPrivilegesApi->createPrivilege1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Optimacros\NexusPhpApi\Model\ApiPrivilegeApplicationRequest**](../Model/ApiPrivilegeApplicationRequest.md)| The privilege to create. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPrivilege2**
> createPrivilege2($body)

Create a repository content selector type privilege.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\SecurityManagementPrivilegesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Optimacros\NexusPhpApi\Model\ApiPrivilegeRepositoryContentSelectorRequest(); // \Optimacros\NexusPhpApi\Model\ApiPrivilegeRepositoryContentSelectorRequest | The privilege to create.

try {
    $apiInstance->createPrivilege2($body);
} catch (Exception $e) {
    echo 'Exception when calling SecurityManagementPrivilegesApi->createPrivilege2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Optimacros\NexusPhpApi\Model\ApiPrivilegeRepositoryContentSelectorRequest**](../Model/ApiPrivilegeRepositoryContentSelectorRequest.md)| The privilege to create. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPrivilege3**
> createPrivilege3($body)

Create a repository view type privilege.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\SecurityManagementPrivilegesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Optimacros\NexusPhpApi\Model\ApiPrivilegeRepositoryViewRequest(); // \Optimacros\NexusPhpApi\Model\ApiPrivilegeRepositoryViewRequest | The privilege to create.

try {
    $apiInstance->createPrivilege3($body);
} catch (Exception $e) {
    echo 'Exception when calling SecurityManagementPrivilegesApi->createPrivilege3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Optimacros\NexusPhpApi\Model\ApiPrivilegeRepositoryViewRequest**](../Model/ApiPrivilegeRepositoryViewRequest.md)| The privilege to create. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPrivilege4**
> createPrivilege4($body)

Create a repository admin type privilege.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\SecurityManagementPrivilegesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Optimacros\NexusPhpApi\Model\ApiPrivilegeRepositoryAdminRequest(); // \Optimacros\NexusPhpApi\Model\ApiPrivilegeRepositoryAdminRequest | The privilege to create.

try {
    $apiInstance->createPrivilege4($body);
} catch (Exception $e) {
    echo 'Exception when calling SecurityManagementPrivilegesApi->createPrivilege4: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Optimacros\NexusPhpApi\Model\ApiPrivilegeRepositoryAdminRequest**](../Model/ApiPrivilegeRepositoryAdminRequest.md)| The privilege to create. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPrivilege5**
> createPrivilege5($body)

Create a script type privilege.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\SecurityManagementPrivilegesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Optimacros\NexusPhpApi\Model\ApiPrivilegeScriptRequest(); // \Optimacros\NexusPhpApi\Model\ApiPrivilegeScriptRequest | The privilege to create.

try {
    $apiInstance->createPrivilege5($body);
} catch (Exception $e) {
    echo 'Exception when calling SecurityManagementPrivilegesApi->createPrivilege5: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Optimacros\NexusPhpApi\Model\ApiPrivilegeScriptRequest**](../Model/ApiPrivilegeScriptRequest.md)| The privilege to create. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePrivilege**
> deletePrivilege($privilegeName)

Delete a privilege by name.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\SecurityManagementPrivilegesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$privilegeName = "privilegeName_example"; // string | The name of the privilege to delete.

try {
    $apiInstance->deletePrivilege($privilegeName);
} catch (Exception $e) {
    echo 'Exception when calling SecurityManagementPrivilegesApi->deletePrivilege: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **privilegeName** | **string**| The name of the privilege to delete. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPrivilege**
> \Optimacros\NexusPhpApi\Model\ApiPrivilege getPrivilege($privilegeName)

Retrieve a privilege by name.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\SecurityManagementPrivilegesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$privilegeName = "privilegeName_example"; // string | The name of the privilege to retrieve.

try {
    $result = $apiInstance->getPrivilege($privilegeName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityManagementPrivilegesApi->getPrivilege: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **privilegeName** | **string**| The name of the privilege to retrieve. |

### Return type

[**\Optimacros\NexusPhpApi\Model\ApiPrivilege**](../Model/ApiPrivilege.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPrivileges**
> \Optimacros\NexusPhpApi\Model\ApiPrivilege[] getPrivileges()

Retrieve a list of privileges.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\SecurityManagementPrivilegesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getPrivileges();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityManagementPrivilegesApi->getPrivileges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Optimacros\NexusPhpApi\Model\ApiPrivilege[]**](../Model/ApiPrivilege.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePrivilege**
> updatePrivilege($privilegeName, $body)

Update a wildcard type privilege.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\SecurityManagementPrivilegesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$privilegeName = "privilegeName_example"; // string | The name of the privilege to update.
$body = new \Optimacros\NexusPhpApi\Model\ApiPrivilegeWildcardRequest(); // \Optimacros\NexusPhpApi\Model\ApiPrivilegeWildcardRequest | The privilege to update.

try {
    $apiInstance->updatePrivilege($privilegeName, $body);
} catch (Exception $e) {
    echo 'Exception when calling SecurityManagementPrivilegesApi->updatePrivilege: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **privilegeName** | **string**| The name of the privilege to update. |
 **body** | [**\Optimacros\NexusPhpApi\Model\ApiPrivilegeWildcardRequest**](../Model/ApiPrivilegeWildcardRequest.md)| The privilege to update. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePrivilege1**
> updatePrivilege1($privilegeName, $body)

Update an application type privilege.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\SecurityManagementPrivilegesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$privilegeName = "privilegeName_example"; // string | The name of the privilege to update.
$body = new \Optimacros\NexusPhpApi\Model\ApiPrivilegeApplicationRequest(); // \Optimacros\NexusPhpApi\Model\ApiPrivilegeApplicationRequest | The privilege to update.

try {
    $apiInstance->updatePrivilege1($privilegeName, $body);
} catch (Exception $e) {
    echo 'Exception when calling SecurityManagementPrivilegesApi->updatePrivilege1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **privilegeName** | **string**| The name of the privilege to update. |
 **body** | [**\Optimacros\NexusPhpApi\Model\ApiPrivilegeApplicationRequest**](../Model/ApiPrivilegeApplicationRequest.md)| The privilege to update. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePrivilege2**
> updatePrivilege2($privilegeName, $body)

Update a repository view type privilege.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\SecurityManagementPrivilegesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$privilegeName = "privilegeName_example"; // string | The name of the privilege to update.
$body = new \Optimacros\NexusPhpApi\Model\ApiPrivilegeRepositoryViewRequest(); // \Optimacros\NexusPhpApi\Model\ApiPrivilegeRepositoryViewRequest | The privilege to update.

try {
    $apiInstance->updatePrivilege2($privilegeName, $body);
} catch (Exception $e) {
    echo 'Exception when calling SecurityManagementPrivilegesApi->updatePrivilege2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **privilegeName** | **string**| The name of the privilege to update. |
 **body** | [**\Optimacros\NexusPhpApi\Model\ApiPrivilegeRepositoryViewRequest**](../Model/ApiPrivilegeRepositoryViewRequest.md)| The privilege to update. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePrivilege3**
> updatePrivilege3($privilegeName, $body)

Update a repository admin type privilege.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\SecurityManagementPrivilegesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$privilegeName = "privilegeName_example"; // string | The name of the privilege to update.
$body = new \Optimacros\NexusPhpApi\Model\ApiPrivilegeRepositoryAdminRequest(); // \Optimacros\NexusPhpApi\Model\ApiPrivilegeRepositoryAdminRequest | The privilege to update.

try {
    $apiInstance->updatePrivilege3($privilegeName, $body);
} catch (Exception $e) {
    echo 'Exception when calling SecurityManagementPrivilegesApi->updatePrivilege3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **privilegeName** | **string**| The name of the privilege to update. |
 **body** | [**\Optimacros\NexusPhpApi\Model\ApiPrivilegeRepositoryAdminRequest**](../Model/ApiPrivilegeRepositoryAdminRequest.md)| The privilege to update. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePrivilege4**
> updatePrivilege4($privilegeName, $body)

Update a repository content selector type privilege.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\SecurityManagementPrivilegesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$privilegeName = "privilegeName_example"; // string | The name of the privilege to update.
$body = new \Optimacros\NexusPhpApi\Model\ApiPrivilegeRepositoryContentSelectorRequest(); // \Optimacros\NexusPhpApi\Model\ApiPrivilegeRepositoryContentSelectorRequest | The privilege to update.

try {
    $apiInstance->updatePrivilege4($privilegeName, $body);
} catch (Exception $e) {
    echo 'Exception when calling SecurityManagementPrivilegesApi->updatePrivilege4: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **privilegeName** | **string**| The name of the privilege to update. |
 **body** | [**\Optimacros\NexusPhpApi\Model\ApiPrivilegeRepositoryContentSelectorRequest**](../Model/ApiPrivilegeRepositoryContentSelectorRequest.md)| The privilege to update. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePrivilege5**
> updatePrivilege5($privilegeName, $body)

Update a script type privilege.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\SecurityManagementPrivilegesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$privilegeName = "privilegeName_example"; // string | The name of the privilege to update.
$body = new \Optimacros\NexusPhpApi\Model\ApiPrivilegeScriptRequest(); // \Optimacros\NexusPhpApi\Model\ApiPrivilegeScriptRequest | The privilege to update.

try {
    $apiInstance->updatePrivilege5($privilegeName, $body);
} catch (Exception $e) {
    echo 'Exception when calling SecurityManagementPrivilegesApi->updatePrivilege5: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **privilegeName** | **string**| The name of the privilege to update. |
 **body** | [**\Optimacros\NexusPhpApi\Model\ApiPrivilegeScriptRequest**](../Model/ApiPrivilegeScriptRequest.md)| The privilege to update. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

