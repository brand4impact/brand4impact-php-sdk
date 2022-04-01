# com.brand4impact.client.invoker\VoucherApi

All URIs are relative to http://localhost:8080/backend.

Method | HTTP request | Description
------------- | ------------- | -------------
[**downloadVoucherQr()**](VoucherApi.md#downloadVoucherQr) | **GET** /rest/platform/voucher/{token}/qr | Download the voucher QR image
[**downloadVouchersFile()**](VoucherApi.md#downloadVouchersFile) | **GET** /rest/platform/voucher/campaign/{campaignToken}/file | Download a set of voucher&#39;s links file
[**downloadVouchersQr()**](VoucherApi.md#downloadVouchersQr) | **GET** /rest/platform/voucher/campaign/{campaignToken}/qr | Download a set of voucher QR images
[**getVoucher()**](VoucherApi.md#getVoucher) | **GET** /rest/platform/voucher/{token} | Get a single voucher
[**getVouchers()**](VoucherApi.md#getVouchers) | **GET** /rest/platform/voucher/campaign/{campaignToken} | Get a set of vouchers


## `downloadVoucherQr()`

```php
downloadVoucherQr($token): string
```

Download the voucher QR image

This method returns a QR image of the voucher within your tenant to be able to access the donation graphically  [![security](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/shield-check.png 'security')](http://localhost:8080/backend/blog/home#seguridad)[![multi-tenant](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/users.png 'multi-tenant')](http://localhost:8080/backend/blog/home#multitenant)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuthentication
$config = com.brand4impact.client.invoker\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new com.brand4impact.client.invoker\Api\VoucherApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string

try {
    $result = $apiInstance->downloadVoucherQr($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->downloadVoucherQr: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**|  |

### Return type

**string**

### Authorization

[BearerAuthentication](../../README.md#BearerAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `downloadVouchersFile()`

```php
downloadVouchersFile($campaignToken, $status, $min, $max): string
```

Download a set of voucher's links file

This method returns a set of voucher's links file within your tenant    [![security](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/shield-check.png 'security')](http://localhost:8080/backend/blog/home#seguridad)[![multi-tenant](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/users.png 'multi-tenant')](http://localhost:8080/backend/blog/home#multitenant)[![pagination](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/brackets.png 'pagination')](http://localhost:8080/backend/blog/home#pagination)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuthentication
$config = com.brand4impact.client.invoker\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new com.brand4impact.client.invoker\Api\VoucherApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignToken = 'campaignToken_example'; // string | The unique token for the campaign.
$status = 'status_example'; // string | The status of the voucher. Possible values: Active or Inactive
$min = 56; // int | Min value of the voucher
$max = 56; // int | Max value of the voucher

try {
    $result = $apiInstance->downloadVouchersFile($campaignToken, $status, $min, $max);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->downloadVouchersFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaignToken** | **string**| The unique token for the campaign. |
 **status** | **string**| The status of the voucher. Possible values: Active or Inactive | [optional]
 **min** | **int**| Min value of the voucher | [optional]
 **max** | **int**| Max value of the voucher | [optional]

### Return type

**string**

### Authorization

[BearerAuthentication](../../README.md#BearerAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `downloadVouchersQr()`

```php
downloadVouchersQr($campaignToken, $status, $min, $max): string
```

Download a set of voucher QR images

This method returns a set of voucher QR images within your tenant    [![security](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/shield-check.png 'security')](http://localhost:8080/backend/blog/home#seguridad)[![multi-tenant](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/users.png 'multi-tenant')](http://localhost:8080/backend/blog/home#multitenant)[![pagination](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/brackets.png 'pagination')](http://localhost:8080/backend/blog/home#pagination)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuthentication
$config = com.brand4impact.client.invoker\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new com.brand4impact.client.invoker\Api\VoucherApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignToken = 'campaignToken_example'; // string | The unique token for the campaign.
$status = 'status_example'; // string | The status of the voucher. Possible values: Active or Inactive
$min = 56; // int | Min value of the voucher
$max = 56; // int | Max value of the voucher

try {
    $result = $apiInstance->downloadVouchersQr($campaignToken, $status, $min, $max);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->downloadVouchersQr: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaignToken** | **string**| The unique token for the campaign. |
 **status** | **string**| The status of the voucher. Possible values: Active or Inactive | [optional]
 **min** | **int**| Min value of the voucher | [optional]
 **max** | **int**| Max value of the voucher | [optional]

### Return type

**string**

### Authorization

[BearerAuthentication](../../README.md#BearerAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVoucher()`

```php
getVoucher($token): \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformVoucher
```

Get a single voucher

This method returns a specific voucher within your tenant  [![security](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/shield-check.png 'security')](http://localhost:8080/backend/blog/home#seguridad)[![multi-tenant](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/users.png 'multi-tenant')](http://localhost:8080/backend/blog/home#multitenant)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuthentication
$config = com.brand4impact.client.invoker\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new com.brand4impact.client.invoker\Api\VoucherApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string

try {
    $result = $apiInstance->getVoucher($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->getVoucher: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**|  |

### Return type

[**\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformVoucher**](../Model/PlatformVoucher.md)

### Authorization

[BearerAuthentication](../../README.md#BearerAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVouchers()`

```php
getVouchers($campaignToken, $status, $min, $max, $page, $size): \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformVoucherItemWrapper
```

Get a set of vouchers

This method returns a set of vouchers within your tenant    [![security](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/shield-check.png 'security')](http://localhost:8080/backend/blog/home#seguridad)[![multi-tenant](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/users.png 'multi-tenant')](http://localhost:8080/backend/blog/home#multitenant)[![pagination](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/brackets.png 'pagination')](http://localhost:8080/backend/blog/home#pagination)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuthentication
$config = com.brand4impact.client.invoker\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new com.brand4impact.client.invoker\Api\VoucherApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignToken = 'campaignToken_example'; // string | The unique token for the campaign.
$status = 'status_example'; // string | The status of the voucher. Possible values: Active or Inactive
$min = 56; // int | Min value of the voucher
$max = 56; // int | Max value of the voucher
$page = 56; // int | The number of the page. Possible values: 0 to unlimited
$size = 56; // int | The number of items inside a page. Possible values: 1 to 100

try {
    $result = $apiInstance->getVouchers($campaignToken, $status, $min, $max, $page, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->getVouchers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaignToken** | **string**| The unique token for the campaign. |
 **status** | **string**| The status of the voucher. Possible values: Active or Inactive | [optional]
 **min** | **int**| Min value of the voucher | [optional]
 **max** | **int**| Max value of the voucher | [optional]
 **page** | **int**| The number of the page. Possible values: 0 to unlimited | [optional]
 **size** | **int**| The number of items inside a page. Possible values: 1 to 100 | [optional]

### Return type

[**\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformVoucherItemWrapper**](../Model/PlatformVoucherItemWrapper.md)

### Authorization

[BearerAuthentication](../../README.md#BearerAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
