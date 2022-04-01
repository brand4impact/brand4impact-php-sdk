# com.brand4impact.client.invoker\SecurityApi

All URIs are relative to http://localhost:8080/backend.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getJWTToken()**](SecurityApi.md#getJWTToken) | **GET** /security/jwt | get JWT token


## `getJWTToken()`

```php
getJWTToken(): \com.brand4impact.client.invoker\com.brand4impact.client.model\SecurityUser
```

get JWT token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuthentication
$config = com.brand4impact.client.invoker\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new com.brand4impact.client.invoker\Api\SecurityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getJWTToken();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityApi->getJWTToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\com.brand4impact.client.invoker\com.brand4impact.client.model\SecurityUser**](../Model/SecurityUser.md)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
