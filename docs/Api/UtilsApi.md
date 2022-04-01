# com.brand4impact.client.invoker\UtilsApi

All URIs are relative to http://localhost:8080/backend.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCountries()**](UtilsApi.md#getCountries) | **GET** /rest/platform/utils/country | Get countries
[**getCurrencies()**](UtilsApi.md#getCurrencies) | **GET** /rest/platform/utils/currency | Get currencies
[**getLanguages()**](UtilsApi.md#getLanguages) | **GET** /rest/platform/utils/language | Get languages
[**getRoles()**](UtilsApi.md#getRoles) | **GET** /rest/platform/utils/roles | Get roles
[**getZones()**](UtilsApi.md#getZones) | **GET** /rest/platform/utils/zone | Get zones


## `getCountries()`

```php
getCountries($language): \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformCountry[]
```

Get countries

This method returns all the countries available, you can indicate a locale to do the search

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new com.brand4impact.client.invoker\Api\UtilsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$language = 'language_example'; // string | List of countries

try {
    $result = $apiInstance->getCountries($language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UtilsApi->getCountries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **language** | **string**| List of countries |

### Return type

[**\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformCountry[]**](../Model/PlatformCountry.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCurrencies()`

```php
getCurrencies($language): \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformCurrency[]
```

Get currencies

This method returns all the currencies available, you can indicate a locale to do the search

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new com.brand4impact.client.invoker\Api\UtilsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$language = 'language_example'; // string | List of currencies

try {
    $result = $apiInstance->getCurrencies($language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UtilsApi->getCurrencies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **language** | **string**| List of currencies |

### Return type

[**\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformCurrency[]**](../Model/PlatformCurrency.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLanguages()`

```php
getLanguages($language): \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformLanguage[]
```

Get languages

This method returns all the languages available, you can indicate a locale to do the search

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new com.brand4impact.client.invoker\Api\UtilsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$language = 'language_example'; // string | List of languages

try {
    $result = $apiInstance->getLanguages($language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UtilsApi->getLanguages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **language** | **string**| List of languages |

### Return type

[**\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformLanguage[]**](../Model/PlatformLanguage.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRoles()`

```php
getRoles(): \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformRole[]
```

Get roles

This method returns all the roles available, you can indicate a locale to do the search

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new com.brand4impact.client.invoker\Api\UtilsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getRoles();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UtilsApi->getRoles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformRole[]**](../Model/PlatformRole.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getZones()`

```php
getZones($language): \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformZone[]
```

Get zones

This method returns all the zones available, you can indicate a locale to do the search

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new com.brand4impact.client.invoker\Api\UtilsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$language = 'language_example'; // string | List of zones

try {
    $result = $apiInstance->getZones($language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UtilsApi->getZones: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **language** | **string**| List of zones |

### Return type

[**\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformZone[]**](../Model/PlatformZone.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
