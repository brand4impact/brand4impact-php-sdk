# com.brand4impact.client.invoker\CompanyApi

All URIs are relative to http://localhost:8080/backend.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCompany()**](CompanyApi.md#createCompany) | **POST** /rest/platform/company | Create a new Company
[**getCompany()**](CompanyApi.md#getCompany) | **GET** /rest/platform/company | Get your Company
[**updateCompany()**](CompanyApi.md#updateCompany) | **PUT** /rest/platform/company | Update Company data
[**updateCompanyLegal()**](CompanyApi.md#updateCompanyLegal) | **PUT** /rest/platform/company/legal | Update legal Company info
[**updateCompanyTopic()**](CompanyApi.md#updateCompanyTopic) | **PUT** /rest/platform/company/topic | Update selected topics for your Company


## `createCompany()`

```php
createCompany($company, $legal, $admin): \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformCompany
```

Create a new Company

Register a new company allows you to start to have visibility that your deserves, being visible to brand4impact users and opting to donate among a bunch of projects

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new com.brand4impact.client.invoker\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$company = new \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformCompanyCreate(); // \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformCompanyCreate
$legal = new \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformCompanyCreateLegal(); // \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformCompanyCreateLegal
$admin = new \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformCompanyCreateAdmin(); // \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformCompanyCreateAdmin

try {
    $result = $apiInstance->createCompany($company, $legal, $admin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->createCompany: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company** | [**\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformCompanyCreate**](../Model/PlatformCompanyCreate.md)|  |
 **legal** | [**\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformCompanyCreateLegal**](../Model/PlatformCompanyCreateLegal.md)|  |
 **admin** | [**\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformCompanyCreateAdmin**](../Model/PlatformCompanyCreateAdmin.md)|  |

### Return type

[**\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformCompany**](../Model/PlatformCompany.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCompany()`

```php
getCompany(): \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformCompany
```

Get your Company

This method returns the Company inside your tenant (theres no need to know the Company token)  [![security](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/shield-check.png 'security')](http://localhost:8080/backend/blog/home#seguridad)[![multi-tenant](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/users.png 'multi-tenant')](http://localhost:8080/backend/blog/home#multitenant)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuthentication
$config = com.brand4impact.client.invoker\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new com.brand4impact.client.invoker\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getCompany();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->getCompany: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformCompany**](../Model/PlatformCompany.md)

### Authorization

[BearerAuthentication](../../README.md#BearerAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCompany()`

```php
updateCompany($company, $logo): \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformCompany
```

Update Company data

This method updates any data for the Company  [![security](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/shield-check.png 'security')](http://localhost:8080/backend/blog/home#seguridad)[![multi-tenant](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/users.png 'multi-tenant')](http://localhost:8080/backend/blog/home#multitenant)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuthentication
$config = com.brand4impact.client.invoker\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new com.brand4impact.client.invoker\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company = new \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformCompanyUpdate(); // \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformCompanyUpdate
$logo = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->updateCompany($company, $logo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->updateCompany: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company** | [**\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformCompanyUpdate**](../Model/PlatformCompanyUpdate.md)|  |
 **logo** | **\SplFileObject****\SplFileObject**|  |

### Return type

[**\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformCompany**](../Model/PlatformCompany.md)

### Authorization

[BearerAuthentication](../../README.md#BearerAuthentication)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCompanyLegal()`

```php
updateCompanyLegal($legal): \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformCompany
```

Update legal Company info

This method updates the legal info for your Company  [![security](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/shield-check.png 'security')](http://localhost:8080/backend/blog/home#seguridad)[![multi-tenant](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/users.png 'multi-tenant')](http://localhost:8080/backend/blog/home#multitenant)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuthentication
$config = com.brand4impact.client.invoker\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new com.brand4impact.client.invoker\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$legal = new \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformCompanyUpdateLegal(); // \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformCompanyUpdateLegal

try {
    $result = $apiInstance->updateCompanyLegal($legal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->updateCompanyLegal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **legal** | [**\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformCompanyUpdateLegal**](../Model/PlatformCompanyUpdateLegal.md)|  |

### Return type

[**\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformCompany**](../Model/PlatformCompany.md)

### Authorization

[BearerAuthentication](../../README.md#BearerAuthentication)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCompanyTopic()`

```php
updateCompanyTopic($sdg): \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformCompany
```

Update selected topics for your Company

This method updates to which topics they can donate the vouchers of their campaigns  [![security](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/shield-check.png 'security')](http://localhost:8080/backend/blog/home#seguridad)[![multi-tenant](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/users.png 'multi-tenant')](http://localhost:8080/backend/blog/home#multitenant)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuthentication
$config = com.brand4impact.client.invoker\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new com.brand4impact.client.invoker\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sdg = new \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformCompanyUpdateTopic(); // \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformCompanyUpdateTopic

try {
    $result = $apiInstance->updateCompanyTopic($sdg);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->updateCompanyTopic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sdg** | [**\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformCompanyUpdateTopic**](../Model/PlatformCompanyUpdateTopic.md)|  |

### Return type

[**\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformCompany**](../Model/PlatformCompany.md)

### Authorization

[BearerAuthentication](../../README.md#BearerAuthentication)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
