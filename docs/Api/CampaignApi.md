# com.brand4impact.client.invoker\CampaignApi

All URIs are relative to http://localhost:8080/backend.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCampaign()**](CampaignApi.md#createCampaign) | **POST** /rest/platform/campaign | Create a new campaign
[**getCampaign()**](CampaignApi.md#getCampaign) | **GET** /rest/platform/campaign/{token} | Get a single campaign
[**getCampaigns()**](CampaignApi.md#getCampaigns) | **GET** /rest/platform/campaign | Get a set of campaigns
[**switchCampaign()**](CampaignApi.md#switchCampaign) | **PUT** /rest/platform/campaign/{token}/switch | Switch campaign status
[**updateCampaign()**](CampaignApi.md#updateCampaign) | **PUT** /rest/platform/campaign/{token} | Update a campaign


## `createCampaign()`

```php
createCampaign($campaign, $primaryImage, $secondaryImage): \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformCampaign
```

Create a new campaign

This method creates a new campaign within a Company  [![security](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/shield-check.png 'security')](http://localhost:8080/backend/blog/home#seguridad)[![multi-tenant](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/users.png 'multi-tenant')](http://localhost:8080/backend/blog/home#multitenant)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuthentication
$config = com.brand4impact.client.invoker\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new com.brand4impact.client.invoker\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign = new \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformCampaignCreate(); // \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformCampaignCreate
$primaryImage = "/path/to/file.txt"; // \SplFileObject
$secondaryImage = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->createCampaign($campaign, $primaryImage, $secondaryImage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->createCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign** | [**\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformCampaignCreate**](../Model/PlatformCampaignCreate.md)|  |
 **primaryImage** | **\SplFileObject****\SplFileObject**|  |
 **secondaryImage** | **\SplFileObject****\SplFileObject**|  |

### Return type

[**\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformCampaign**](../Model/PlatformCampaign.md)

### Authorization

[BearerAuthentication](../../README.md#BearerAuthentication)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCampaign()`

```php
getCampaign($token): \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformCampaign
```

Get a single campaign

This method returns a specific campaign within your tenant  [![security](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/shield-check.png 'security')](http://localhost:8080/backend/blog/home#seguridad)[![multi-tenant](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/users.png 'multi-tenant')](http://localhost:8080/backend/blog/home#multitenant)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuthentication
$config = com.brand4impact.client.invoker\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new com.brand4impact.client.invoker\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | The unique token for the campaign.

try {
    $result = $apiInstance->getCampaign($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| The unique token for the campaign. |

### Return type

[**\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformCampaign**](../Model/PlatformCampaign.md)

### Authorization

[BearerAuthentication](../../README.md#BearerAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCampaigns()`

```php
getCampaigns($titleFilter, $page, $size, $sort): \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformCampaignItemWrapper
```

Get a set of campaigns

This method returns a set of campaigns within your tenant    [![security](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/shield-check.png 'security')](http://localhost:8080/backend/blog/home#seguridad)[![multi-tenant](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/users.png 'multi-tenant')](http://localhost:8080/backend/blog/home#multitenant)[![pagination](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/brackets.png 'pagination')](http://localhost:8080/backend/blog/home#pagination)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuthentication
$config = com.brand4impact.client.invoker\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new com.brand4impact.client.invoker\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$titleFilter = 'titleFilter_example'; // string | The name of the filter
$page = 56; // int | The number of the page. Possible values: 0 to unlimited
$size = 56; // int | The number of items inside a page. Possible values: 1 to 100
$sort = 'sort_example'; // string | The order direction for sorted results. Possible values: ASC or DESC

try {
    $result = $apiInstance->getCampaigns($titleFilter, $page, $size, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getCampaigns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **titleFilter** | **string**| The name of the filter | [optional]
 **page** | **int**| The number of the page. Possible values: 0 to unlimited | [optional]
 **size** | **int**| The number of items inside a page. Possible values: 1 to 100 | [optional]
 **sort** | **string**| The order direction for sorted results. Possible values: ASC or DESC | [optional]

### Return type

[**\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformCampaignItemWrapper**](../Model/PlatformCampaignItemWrapper.md)

### Authorization

[BearerAuthentication](../../README.md#BearerAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `switchCampaign()`

```php
switchCampaign($token): \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformCampaign
```

Switch campaign status

This method switch the status of a specific campaign  [![security](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/shield-check.png 'security')](http://localhost:8080/backend/blog/home#seguridad)[![multi-tenant](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/users.png 'multi-tenant')](http://localhost:8080/backend/blog/home#multitenant)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuthentication
$config = com.brand4impact.client.invoker\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new com.brand4impact.client.invoker\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string

try {
    $result = $apiInstance->switchCampaign($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->switchCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**|  |

### Return type

[**\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformCampaign**](../Model/PlatformCampaign.md)

### Authorization

[BearerAuthentication](../../README.md#BearerAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCampaign()`

```php
updateCampaign($token, $campaign, $primaryImage, $secondaryImage): \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformCampaign
```

Update a campaign

This method updates an existing campaign  [![security](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/shield-check.png 'security')](http://localhost:8080/backend/blog/home#seguridad)[![multi-tenant](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/users.png 'multi-tenant')](http://localhost:8080/backend/blog/home#multitenant)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuthentication
$config = com.brand4impact.client.invoker\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new com.brand4impact.client.invoker\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string
$campaign = new \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformCampaignUpdate(); // \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformCampaignUpdate
$primaryImage = "/path/to/file.txt"; // \SplFileObject
$secondaryImage = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->updateCampaign($token, $campaign, $primaryImage, $secondaryImage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->updateCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**|  |
 **campaign** | [**\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformCampaignUpdate**](../Model/PlatformCampaignUpdate.md)|  |
 **primaryImage** | **\SplFileObject****\SplFileObject**|  |
 **secondaryImage** | **\SplFileObject****\SplFileObject**|  |

### Return type

[**\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformCampaign**](../Model/PlatformCampaign.md)

### Authorization

[BearerAuthentication](../../README.md#BearerAuthentication)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
