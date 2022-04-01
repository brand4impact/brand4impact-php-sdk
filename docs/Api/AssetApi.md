# com.brand4impact.client.invoker\AssetApi

All URIs are relative to http://localhost:8080/backend.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAsset()**](AssetApi.md#getAsset) | **GET** /rest/platform/asset/{token} | Get a single asset
[**getAssets()**](AssetApi.md#getAssets) | **GET** /rest/platform/asset | Get a set of assets


## `getAsset()`

```php
getAsset($token): \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformAsset
```

Get a single asset

This method returns a specific asset within your tenant (asset refers to static files, like images, pdf, ...)  [![security](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/shield-check.png 'security')](http://localhost:8080/backend/blog/home#seguridad)[![multi-tenant](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/users.png 'multi-tenant')](http://localhost:8080/backend/blog/home#multitenant)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuthentication
$config = com.brand4impact.client.invoker\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new com.brand4impact.client.invoker\Api\AssetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | The unique token for the asset.

try {
    $result = $apiInstance->getAsset($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetApi->getAsset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| The unique token for the asset. |

### Return type

[**\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformAsset**](../Model/PlatformAsset.md)

### Authorization

[BearerAuthentication](../../README.md#BearerAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAssets()`

```php
getAssets($page, $size, $sort): \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformAssetItemWrapper
```

Get a set of assets

This method returns a set of assets within your tenant (asset refers to static files, like images, pdf, ...)    [![security](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/shield-check.png 'security')](http://localhost:8080/backend/blog/home#seguridad)[![multi-tenant](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/users.png 'multi-tenant')](http://localhost:8080/backend/blog/home#multitenant)[![pagination](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/brackets.png 'pagination')](http://localhost:8080/backend/blog/home#pagination)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuthentication
$config = com.brand4impact.client.invoker\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new com.brand4impact.client.invoker\Api\AssetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | The number of the page. Possible values: 0 to unlimited
$size = 56; // int | The number of items inside a page. Possible values: 1 to 100
$sort = 'sort_example'; // string | The order direction for sorted results. Possible values: ASC or DESC

try {
    $result = $apiInstance->getAssets($page, $size, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetApi->getAssets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The number of the page. Possible values: 0 to unlimited | [optional]
 **size** | **int**| The number of items inside a page. Possible values: 1 to 100 | [optional]
 **sort** | **string**| The order direction for sorted results. Possible values: ASC or DESC | [optional]

### Return type

[**\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformAssetItemWrapper**](../Model/PlatformAssetItemWrapper.md)

### Authorization

[BearerAuthentication](../../README.md#BearerAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
