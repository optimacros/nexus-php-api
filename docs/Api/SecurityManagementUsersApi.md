# Optimacros\NexusPhpApi\SecurityManagementUsersApi

All URIs are relative to *https://localhost/service/rest/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**changePassword**](SecurityManagementUsersApi.md#changePassword) | **PUT** /v1/security/users/{userId}/change-password | Change a user&#39;s password.
[**createUser**](SecurityManagementUsersApi.md#createUser) | **POST** /v1/security/users | Create a new user in the default source.
[**deleteUser**](SecurityManagementUsersApi.md#deleteUser) | **DELETE** /v1/security/users/{userId} | Delete a user.
[**getUsers**](SecurityManagementUsersApi.md#getUsers) | **GET** /v1/security/users | Retrieve a list of users. Note if the source is not &#39;default&#39; the response is limited to 100 users.
[**updateUser**](SecurityManagementUsersApi.md#updateUser) | **PUT** /v1/security/users/{userId} | Update an existing user.


# **changePassword**
> changePassword($userId, $body)

Change a user's password.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\SecurityManagementUsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$userId = "userId_example"; // string | The userid the request should apply to.
$body = "body_example"; // string | The new password to use.

try {
    $apiInstance->changePassword($userId, $body);
} catch (Exception $e) {
    echo 'Exception when calling SecurityManagementUsersApi->changePassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| The userid the request should apply to. |
 **body** | **string**| The new password to use. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: text/plain
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createUser**
> \Optimacros\NexusPhpApi\Model\ApiUser createUser($body)

Create a new user in the default source.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\SecurityManagementUsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Optimacros\NexusPhpApi\Model\ApiCreateUser(); // \Optimacros\NexusPhpApi\Model\ApiCreateUser | A representation of the user to create.

try {
    $result = $apiInstance->createUser($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityManagementUsersApi->createUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Optimacros\NexusPhpApi\Model\ApiCreateUser**](../Model/ApiCreateUser.md)| A representation of the user to create. | [optional]

### Return type

[**\Optimacros\NexusPhpApi\Model\ApiUser**](../Model/ApiUser.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteUser**
> deleteUser($userId)

Delete a user.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\SecurityManagementUsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$userId = "userId_example"; // string | The userid the request should apply to.

try {
    $apiInstance->deleteUser($userId);
} catch (Exception $e) {
    echo 'Exception when calling SecurityManagementUsersApi->deleteUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| The userid the request should apply to. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUsers**
> \Optimacros\NexusPhpApi\Model\ApiUser[] getUsers($userId, $source)

Retrieve a list of users. Note if the source is not 'default' the response is limited to 100 users.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\SecurityManagementUsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$userId = "userId_example"; // string | An optional term to search userids for.
$source = "source_example"; // string | An optional user source to restrict the search to.

try {
    $result = $apiInstance->getUsers($userId, $source);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityManagementUsersApi->getUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| An optional term to search userids for. | [optional]
 **source** | **string**| An optional user source to restrict the search to. | [optional]

### Return type

[**\Optimacros\NexusPhpApi\Model\ApiUser[]**](../Model/ApiUser.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateUser**
> updateUser($userId, $body)

Update an existing user.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optimacros\NexusPhpApi\Api\SecurityManagementUsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$userId = "userId_example"; // string | The userid the request should apply to.
$body = new \Optimacros\NexusPhpApi\Model\ApiUser(); // \Optimacros\NexusPhpApi\Model\ApiUser | A representation of the user to update.

try {
    $apiInstance->updateUser($userId, $body);
} catch (Exception $e) {
    echo 'Exception when calling SecurityManagementUsersApi->updateUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| The userid the request should apply to. |
 **body** | [**\Optimacros\NexusPhpApi\Model\ApiUser**](../Model/ApiUser.md)| A representation of the user to update. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

