# com.brand4impact.client.invoker\SectorApi

All URIs are relative to http://localhost:8080/backend.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSector()**](SectorApi.md#getSector) | **GET** /rest/platform/sector/{token} | Get a single sector
[**getSectors()**](SectorApi.md#getSectors) | **GET** /rest/platform/sector | Get a set of sectors


## `getSector()`

```php
getSector($token): \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformSector
```

Get a single sector

This method returns a specific sector and represents principals industries

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new com.brand4impact.client.invoker\Api\SectorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = 'token_example'; // string | The unique token for the sector.

try {
    $result = $apiInstance->getSector($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SectorApi->getSector: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| The unique token for the sector. |

### Return type

[**\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformSector**](../Model/PlatformSector.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSectors()`

```php
getSectors($page, $size, $sort): \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformSectorItemWrapper
```

Get a set of sectors

This method returns all the sectors according the filters and represents principals industries    [![pagination](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/brackets.png 'pagination')](http://localhost:8080/backend/blog/home#pagination)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new com.brand4impact.client.invoker\Api\SectorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page = 56; // int | The number of the page. Possible values: 0 to unlimited
$size = 56; // int | The number of items inside a page. Possible values: 1 to 100
$sort = 'sort_example'; // string | The order direction for sorted results. Possible values: ASC or DESC

try {
    $result = $apiInstance->getSectors($page, $size, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SectorApi->getSectors: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The number of the page. Possible values: 0 to unlimited | [optional]
 **size** | **int**| The number of items inside a page. Possible values: 1 to 100 | [optional]
 **sort** | **string**| The order direction for sorted results. Possible values: ASC or DESC | [optional]

### Return type

[**\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformSectorItemWrapper**](../Model/PlatformSectorItemWrapper.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
