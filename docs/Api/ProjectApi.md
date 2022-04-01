# com.brand4impact.client.invoker\ProjectApi

All URIs are relative to http://localhost:8080/backend.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProject()**](ProjectApi.md#createProject) | **POST** /rest/platform/project | Create a new project
[**getProject()**](ProjectApi.md#getProject) | **GET** /rest/platform/project/{token} | Get a single project
[**getProjects()**](ProjectApi.md#getProjects) | **GET** /rest/platform/project | Get a set of projects
[**switchProject()**](ProjectApi.md#switchProject) | **PUT** /rest/platform/project/{token}/switch | Switch project status
[**updateProject()**](ProjectApi.md#updateProject) | **PUT** /rest/platform/project/{token} | Update a project


## `createProject()`

```php
createProject($project, $primaryImage, $secondaryImage): \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformProject
```

Create a new project

This method creates a new project within a NGO  [![security](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/shield-check.png 'security')](http://localhost:8080/backend/blog/home#seguridad)[![multi-tenant](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/users.png 'multi-tenant')](http://localhost:8080/backend/blog/home#multitenant)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuthentication
$config = com.brand4impact.client.invoker\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new com.brand4impact.client.invoker\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project = new \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformProjectCreate(); // \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformProjectCreate
$primaryImage = "/path/to/file.txt"; // \SplFileObject
$secondaryImage = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->createProject($project, $primaryImage, $secondaryImage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->createProject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project** | [**\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformProjectCreate**](../Model/PlatformProjectCreate.md)|  |
 **primaryImage** | **\SplFileObject****\SplFileObject**|  |
 **secondaryImage** | **\SplFileObject****\SplFileObject**|  |

### Return type

[**\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformProject**](../Model/PlatformProject.md)

### Authorization

[BearerAuthentication](../../README.md#BearerAuthentication)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProject()`

```php
getProject($token): \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformProject
```

Get a single project

This method returns a specific project within your tenant  [![security](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/shield-check.png 'security')](http://localhost:8080/backend/blog/home#seguridad)[![multi-tenant](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/users.png 'multi-tenant')](http://localhost:8080/backend/blog/home#multitenant)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuthentication
$config = com.brand4impact.client.invoker\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new com.brand4impact.client.invoker\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | The unique token for the campaign.

try {
    $result = $apiInstance->getProject($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->getProject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| The unique token for the campaign. |

### Return type

[**\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformProject**](../Model/PlatformProject.md)

### Authorization

[BearerAuthentication](../../README.md#BearerAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProjects()`

```php
getProjects($descriptionLike, $country, $topicToken, $page, $size, $sort): \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformProjectItemWrapper
```

Get a set of projects

This method returns a set of projects within your tenant    [![security](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/shield-check.png 'security')](http://localhost:8080/backend/blog/home#seguridad)[![multi-tenant](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/users.png 'multi-tenant')](http://localhost:8080/backend/blog/home#multitenant)[![pagination](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/brackets.png 'pagination')](http://localhost:8080/backend/blog/home#pagination)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuthentication
$config = com.brand4impact.client.invoker\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new com.brand4impact.client.invoker\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$descriptionLike = 'descriptionLike_example'; // string
$country = 'country_example'; // string | The country
$topicToken = 'topicToken_example'; // string | The topicToken
$page = 56; // int | The number of the page. Possible values: 0 to unlimited
$size = 56; // int | The number of items inside a page. Possible values: 1 to 100
$sort = 'sort_example'; // string | The order direction for sorted results. Possible values: ASC or DESC

try {
    $result = $apiInstance->getProjects($descriptionLike, $country, $topicToken, $page, $size, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->getProjects: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **descriptionLike** | **string**|  | [optional]
 **country** | **string**| The country | [optional]
 **topicToken** | **string**| The topicToken | [optional]
 **page** | **int**| The number of the page. Possible values: 0 to unlimited | [optional]
 **size** | **int**| The number of items inside a page. Possible values: 1 to 100 | [optional]
 **sort** | **string**| The order direction for sorted results. Possible values: ASC or DESC | [optional]

### Return type

[**\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformProjectItemWrapper**](../Model/PlatformProjectItemWrapper.md)

### Authorization

[BearerAuthentication](../../README.md#BearerAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `switchProject()`

```php
switchProject($token): \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformProject
```

Switch project status

This method switch the status of a specific project  [![security](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/shield-check.png 'security')](http://localhost:8080/backend/blog/home#seguridad)[![multi-tenant](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/users.png 'multi-tenant')](http://localhost:8080/backend/blog/home#multitenant)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuthentication
$config = com.brand4impact.client.invoker\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new com.brand4impact.client.invoker\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string

try {
    $result = $apiInstance->switchProject($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->switchProject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**|  |

### Return type

[**\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformProject**](../Model/PlatformProject.md)

### Authorization

[BearerAuthentication](../../README.md#BearerAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateProject()`

```php
updateProject($token, $project, $primaryImage, $secondaryImage): \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformProject
```

Update a project

This method updates an existing project  [![security](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/shield-check.png 'security')](http://localhost:8080/backend/blog/home#seguridad)[![multi-tenant](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/users.png 'multi-tenant')](http://localhost:8080/backend/blog/home#multitenant)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuthentication
$config = com.brand4impact.client.invoker\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new com.brand4impact.client.invoker\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string
$project = new \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformProjectUpdate(); // \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformProjectUpdate
$primaryImage = "/path/to/file.txt"; // \SplFileObject
$secondaryImage = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->updateProject($token, $project, $primaryImage, $secondaryImage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->updateProject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**|  |
 **project** | [**\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformProjectUpdate**](../Model/PlatformProjectUpdate.md)|  |
 **primaryImage** | **\SplFileObject****\SplFileObject**|  |
 **secondaryImage** | **\SplFileObject****\SplFileObject**|  |

### Return type

[**\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformProject**](../Model/PlatformProject.md)

### Authorization

[BearerAuthentication](../../README.md#BearerAuthentication)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
