# com.brand4impact.client.invoker\TopicApi

All URIs are relative to http://localhost:8080/backend.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTopic()**](TopicApi.md#getTopic) | **GET** /rest/platform/topic/{token} | Get a single topic
[**getTopics()**](TopicApi.md#getTopics) | **GET** /rest/platform/topic | Get a set of topics


## `getTopic()`

```php
getTopic($token): \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformTopic
```

Get a single topic

This method returns a specific topic  A topic refers to the 17th SDG objectives [(United Nations)](https://sdgs.un.org/goals)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new com.brand4impact.client.invoker\Api\TopicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = 'token_example'; // string | The unique token for the topic.

try {
    $result = $apiInstance->getTopic($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TopicApi->getTopic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| The unique token for the topic. |

### Return type

[**\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformTopic**](../Model/PlatformTopic.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTopics()`

```php
getTopics($titleLike, $page, $size, $sort): \com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformTopicItemWrapper
```

Get a set of topics

This method returns all the topics according the filters  A topic refers to the 17th SDG objectives [(United Nations)](https://sdgs.un.org/goals)    [![pagination](https://b4i.ams3.digitaloceanspaces.com/statics/swagger/brackets.png 'pagination')](http://localhost:8080/backend/blog/home#pagination)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new com.brand4impact.client.invoker\Api\TopicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$titleLike = 'titleLike_example'; // string | The name of the filter
$page = 56; // int | The number of the page. Possible values: 0 to unlimited
$size = 56; // int | The number of items inside a page. Possible values: 1 to 100
$sort = 'sort_example'; // string | The order direction for sorted results. Possible values: ASC or DESC

try {
    $result = $apiInstance->getTopics($titleLike, $page, $size, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TopicApi->getTopics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **titleLike** | **string**| The name of the filter | [optional]
 **page** | **int**| The number of the page. Possible values: 0 to unlimited | [optional]
 **size** | **int**| The number of items inside a page. Possible values: 1 to 100 | [optional]
 **sort** | **string**| The order direction for sorted results. Possible values: ASC or DESC | [optional]

### Return type

[**\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformTopicItemWrapper**](../Model/PlatformTopicItemWrapper.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
