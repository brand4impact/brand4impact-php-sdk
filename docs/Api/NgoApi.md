# com.brand4impact.client.invoker\NgoApi

All URIs are relative to http://localhost:8080/backend.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createNgo()**](NgoApi.md#createNgo) | **POST** /rest/platform/ngo | Create a new NGO
[**getNgo()**](NgoApi.md#getNgo) | **GET** /rest/platform/ngo | Get your NGO
[**updateNgo()**](NgoApi.md#updateNgo) | **PUT** /rest/platform/ngo | Update NGO data
[**updateNgoBank()**](NgoApi.md#updateNgoBank) | **PUT** /rest/platform/ngo/bank | Update bank NGO info
[**updateNgoLegal()**](NgoApi.md#updateNgoLegal) | **PUT** /rest/platform/ngo/legal | Update legal NGO info
[**uploadNgoFiles()**](NgoApi.md#uploadNgoFiles) | **PUT** /rest/platform/ngo/upload | Upload NGO files


## `createNgo()`

```php
createNgo($ngo, $legal, $admin): \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformNgo
```

Create a new NGO

Register a new NGO allows you to have visibiliy that your NGO deserves, being visible to brand4impact users, and opting for their donations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new com.brand4impact.client.invoker\Api\NgoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ngo = new \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformNgoCreate(); // \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformNgoCreate
$legal = new \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformNgoCreateLegal(); // \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformNgoCreateLegal
$admin = new \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformNgoCreateAdmin(); // \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformNgoCreateAdmin

try {
    $result = $apiInstance->createNgo($ngo, $legal, $admin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NgoApi->createNgo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ngo** | [**\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformNgoCreate**](../Model/PlatformNgoCreate.md)|  |
 **legal** | [**\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformNgoCreateLegal**](../Model/PlatformNgoCreateLegal.md)|  |
 **admin** | [**\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformNgoCreateAdmin**](../Model/PlatformNgoCreateAdmin.md)|  |

### Return type

[**\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformNgo**](../Model/PlatformNgo.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNgo()`

```php
getNgo(): \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformNgo
```

Get your NGO

This method returns the NGO inside your tenant (theres no need to know the NGO token)  [![security](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/shield-check.png 'security')](http://localhost:8080/backend/blog/home#seguridad)[![multi-tenant](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/users.png 'multi-tenant')](http://localhost:8080/backend/blog/home#multitenant)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuthentication
$config = com.brand4impact.client.invoker\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new com.brand4impact.client.invoker\Api\NgoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getNgo();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NgoApi->getNgo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformNgo**](../Model/PlatformNgo.md)

### Authorization

[BearerAuthentication](../../README.md#BearerAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNgo()`

```php
updateNgo($ngo, $logo): \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformNgo
```

Update NGO data

This method updates any data for the NGO  [![security](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/shield-check.png 'security')](http://localhost:8080/backend/blog/home#seguridad)[![multi-tenant](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/users.png 'multi-tenant')](http://localhost:8080/backend/blog/home#multitenant)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuthentication
$config = com.brand4impact.client.invoker\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new com.brand4impact.client.invoker\Api\NgoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ngo = new \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformNgoUpdate(); // \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformNgoUpdate
$logo = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->updateNgo($ngo, $logo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NgoApi->updateNgo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ngo** | [**\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformNgoUpdate**](../Model/PlatformNgoUpdate.md)|  |
 **logo** | **\SplFileObject****\SplFileObject**|  |

### Return type

[**\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformNgo**](../Model/PlatformNgo.md)

### Authorization

[BearerAuthentication](../../README.md#BearerAuthentication)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNgoBank()`

```php
updateNgoBank($bank): \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformNgo
```

Update bank NGO info

This method updates the bank info for your NGO  [![security](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/shield-check.png 'security')](http://localhost:8080/backend/blog/home#seguridad)[![multi-tenant](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/users.png 'multi-tenant')](http://localhost:8080/backend/blog/home#multitenant)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuthentication
$config = com.brand4impact.client.invoker\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new com.brand4impact.client.invoker\Api\NgoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bank = new \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformNgoUpdateBank(); // \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformNgoUpdateBank

try {
    $result = $apiInstance->updateNgoBank($bank);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NgoApi->updateNgoBank: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bank** | [**\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformNgoUpdateBank**](../Model/PlatformNgoUpdateBank.md)|  |

### Return type

[**\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformNgo**](../Model/PlatformNgo.md)

### Authorization

[BearerAuthentication](../../README.md#BearerAuthentication)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNgoLegal()`

```php
updateNgoLegal($legal): \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformNgo
```

Update legal NGO info

This method updates the legal info for your NGO  [![security](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/shield-check.png 'security')](http://localhost:8080/backend/blog/home#seguridad)[![multi-tenant](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/users.png 'multi-tenant')](http://localhost:8080/backend/blog/home#multitenant)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuthentication
$config = com.brand4impact.client.invoker\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new com.brand4impact.client.invoker\Api\NgoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$legal = new \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformNgoUpdateLegal(); // \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformNgoUpdateLegal

try {
    $result = $apiInstance->updateNgoLegal($legal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NgoApi->updateNgoLegal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **legal** | [**\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformNgoUpdateLegal**](../Model/PlatformNgoUpdateLegal.md)|  |

### Return type

[**\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformNgo**](../Model/PlatformNgo.md)

### Authorization

[BearerAuthentication](../../README.md#BearerAuthentication)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadNgoFiles()`

```php
uploadNgoFiles($file): \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformNgo
```

Upload NGO files

This method uploads documentation (files, images, ...) of a NGO  [![security](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/shield-check.png 'security')](http://localhost:8080/backend/blog/home#seguridad)[![multi-tenant](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/users.png 'multi-tenant')](http://localhost:8080/backend/blog/home#multitenant)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuthentication
$config = com.brand4impact.client.invoker\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new com.brand4impact.client.invoker\Api\NgoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->uploadNgoFiles($file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NgoApi->uploadNgoFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **\SplFileObject****\SplFileObject**|  |

### Return type

[**\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformNgo**](../Model/PlatformNgo.md)

### Authorization

[BearerAuthentication](../../README.md#BearerAuthentication)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
