# com.brand4impact.client.invoker\UserApi

All URIs are relative to http://localhost:8080/backend.

Method | HTTP request | Description
------------- | ------------- | -------------
[**changeUserPassword()**](UserApi.md#changeUserPassword) | **PUT** /rest/platform/user/{token}/changepassword | Change user&#39;s password
[**confirmUser()**](UserApi.md#confirmUser) | **POST** /rest/platform/user/{token} | Activate a user
[**getUser()**](UserApi.md#getUser) | **GET** /rest/platform/user/{token} | Get a single user
[**getUsers()**](UserApi.md#getUsers) | **GET** /rest/platform/user | Get a set of users
[**inviteUser()**](UserApi.md#inviteUser) | **POST** /rest/platform/user/invite | Invite a new user
[**resetUserPassword()**](UserApi.md#resetUserPassword) | **PUT** /rest/platform/user/resetpassword | Reset user&#39;s password
[**switchUser()**](UserApi.md#switchUser) | **PUT** /rest/platform/user/{token}/switch | Switch user&#39;s status
[**updateUser()**](UserApi.md#updateUser) | **PUT** /rest/platform/user/{token} | Update user data
[**updateUserExt()**](UserApi.md#updateUserExt) | **PUT** /rest/platform/user/{token}/ext | Update sensitive user data


## `changeUserPassword()`

```php
changeUserPassword($token, $user): \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformUser
```

Change user's password

This method updates the password of a specific user  [![security](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/shield-check.png 'security')](http://localhost:8080/backend/blog/home#seguridad)[![multi-tenant](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/users.png 'multi-tenant')](http://localhost:8080/backend/blog/home#multitenant)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new com.brand4impact.client.invoker\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = 'token_example'; // string
$user = new \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformUserChangePassword(); // \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformUserChangePassword

try {
    $result = $apiInstance->changeUserPassword($token, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->changeUserPassword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**|  |
 **user** | [**\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformUserChangePassword**](../Model/PlatformUserChangePassword.md)|  |

### Return type

[**\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformUser**](../Model/PlatformUser.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `confirmUser()`

```php
confirmUser($token, $user): \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformUser
```

Activate a user

This method activate an invited user in the Company/NGO  [![security](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/shield-check.png 'security')](http://localhost:8080/backend/blog/home#seguridad)[![multi-tenant](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/users.png 'multi-tenant')](http://localhost:8080/backend/blog/home#multitenant)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new com.brand4impact.client.invoker\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = 'token_example'; // string
$user = new \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformUserConfirm(); // \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformUserConfirm

try {
    $result = $apiInstance->confirmUser($token, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->confirmUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**|  |
 **user** | [**\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformUserConfirm**](../Model/PlatformUserConfirm.md)|  |

### Return type

[**\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformUser**](../Model/PlatformUser.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUser()`

```php
getUser($token): \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformUser
```

Get a single user

This method returns a specific user within your tenant  [![security](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/shield-check.png 'security')](http://localhost:8080/backend/blog/home#seguridad)[![multi-tenant](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/users.png 'multi-tenant')](http://localhost:8080/backend/blog/home#multitenant)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuthentication
$config = com.brand4impact.client.invoker\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new com.brand4impact.client.invoker\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string

try {
    $result = $apiInstance->getUser($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**|  |

### Return type

[**\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformUser**](../Model/PlatformUser.md)

### Authorization

[BearerAuthentication](../../README.md#BearerAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUsers()`

```php
getUsers($firstnameLike, $page, $size, $sort): \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformUserItemWrapper
```

Get a set of users

This method returns a set of users within your tenant    [![security](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/shield-check.png 'security')](http://localhost:8080/backend/blog/home#seguridad)[![multi-tenant](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/users.png 'multi-tenant')](http://localhost:8080/backend/blog/home#multitenant)[![pagination](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/brackets.png 'pagination')](http://localhost:8080/backend/blog/home#pagination)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuthentication
$config = com.brand4impact.client.invoker\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new com.brand4impact.client.invoker\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$firstnameLike = 'firstnameLike_example'; // string | The name of the filter
$page = 56; // int | The number of the page. Possible values: 0 to unlimited
$size = 56; // int | The number of items inside a page. Possible values: 1 to 100
$sort = 'sort_example'; // string | The order direction for sorted results. Possible values: ASC or DESC

try {
    $result = $apiInstance->getUsers($firstnameLike, $page, $size, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **firstnameLike** | **string**| The name of the filter | [optional]
 **page** | **int**| The number of the page. Possible values: 0 to unlimited | [optional]
 **size** | **int**| The number of items inside a page. Possible values: 1 to 100 | [optional]
 **sort** | **string**| The order direction for sorted results. Possible values: ASC or DESC | [optional]

### Return type

[**\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformUserItemWrapper**](../Model/PlatformUserItemWrapper.md)

### Authorization

[BearerAuthentication](../../README.md#BearerAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `inviteUser()`

```php
inviteUser($user): \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformUser
```

Invite a new user

This method invites a user to join a Company/NGO  [![security](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/shield-check.png 'security')](http://localhost:8080/backend/blog/home#seguridad)[![multi-tenant](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/users.png 'multi-tenant')](http://localhost:8080/backend/blog/home#multitenant)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuthentication
$config = com.brand4impact.client.invoker\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new com.brand4impact.client.invoker\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user = new \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformUserInvite(); // \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformUserInvite

try {
    $result = $apiInstance->inviteUser($user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->inviteUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | [**\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformUserInvite**](../Model/PlatformUserInvite.md)|  |

### Return type

[**\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformUser**](../Model/PlatformUser.md)

### Authorization

[BearerAuthentication](../../README.md#BearerAuthentication)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resetUserPassword()`

```php
resetUserPassword($user): \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformUser
```

Reset user's password

This method reset the password of a specific user by sending an email to the user with a link to reset the password  [![security](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/shield-check.png 'security')](http://localhost:8080/backend/blog/home#seguridad)[![multi-tenant](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/users.png 'multi-tenant')](http://localhost:8080/backend/blog/home#multitenant)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new com.brand4impact.client.invoker\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user = new \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformUserResetPassword(); // \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformUserResetPassword

try {
    $result = $apiInstance->resetUserPassword($user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->resetUserPassword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | [**\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformUserResetPassword**](../Model/PlatformUserResetPassword.md)|  |

### Return type

[**\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformUser**](../Model/PlatformUser.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `switchUser()`

```php
switchUser($token): \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformUser
```

Switch user's status

This method updates the user status, possible values are: active|inactive  [![security](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/shield-check.png 'security')](http://localhost:8080/backend/blog/home#seguridad)[![multi-tenant](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/users.png 'multi-tenant')](http://localhost:8080/backend/blog/home#multitenant)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuthentication
$config = com.brand4impact.client.invoker\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new com.brand4impact.client.invoker\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string

try {
    $result = $apiInstance->switchUser($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->switchUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**|  |

### Return type

[**\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformUser**](../Model/PlatformUser.md)

### Authorization

[BearerAuthentication](../../README.md#BearerAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateUser()`

```php
updateUser($token, $user): \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformUser
```

Update user data

This method updates personal data for a user  [![security](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/shield-check.png 'security')](http://localhost:8080/backend/blog/home#seguridad)[![multi-tenant](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/users.png 'multi-tenant')](http://localhost:8080/backend/blog/home#multitenant)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuthentication
$config = com.brand4impact.client.invoker\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new com.brand4impact.client.invoker\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string
$user = new \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformUserUpdate(); // \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformUserUpdate

try {
    $result = $apiInstance->updateUser($token, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->updateUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**|  |
 **user** | [**\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformUserUpdate**](../Model/PlatformUserUpdate.md)|  |

### Return type

[**\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformUser**](../Model/PlatformUser.md)

### Authorization

[BearerAuthentication](../../README.md#BearerAuthentication)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateUserExt()`

```php
updateUserExt($token, $user): \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformUser
```

Update sensitive user data

This method updates sensitive user data  [![security](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/shield-check.png 'security')](http://localhost:8080/backend/blog/home#seguridad)[![multi-tenant](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/users.png 'multi-tenant')](http://localhost:8080/backend/blog/home#multitenant)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuthentication
$config = com.brand4impact.client.invoker\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new com.brand4impact.client.invoker\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string
$user = new \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformUserUpdateExt(); // \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformUserUpdateExt

try {
    $result = $apiInstance->updateUserExt($token, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->updateUserExt: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**|  |
 **user** | [**\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformUserUpdateExt**](../Model/PlatformUserUpdateExt.md)|  |

### Return type

[**\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformUser**](../Model/PlatformUser.md)

### Authorization

[BearerAuthentication](../../README.md#BearerAuthentication)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
