# AutoPilot\HooksApi

All URIs are relative to *https://private-anon-b40d4dece5-autopilot.apiary-mock.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteHooks**](HooksApi.md#deleteHooks) | **DELETE** /hooks | delete all hooks
[**getHooks**](HooksApi.md#getHooks) | **GET** /hooks | get all list of all hooks present in AutoPilot
[**registerHooks**](HooksApi.md#registerHooks) | **POST** /hook | register a hook
[**unregisterHook**](HooksApi.md#unregisterHook) | **DELETE** /hook/{hook_id} | Unregister a hook

# **deleteHooks**
> deleteHooks()

delete all hooks

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: autopilotapikey
$config = AutoPilot\Configuration::getDefaultConfiguration()->setApiKey('autopilotapikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AutoPilot\Configuration::getDefaultConfiguration()->setApiKeyPrefix('autopilotapikey', 'Bearer');

$apiInstance = new AutoPilot\Api\HooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->deleteHooks();
} catch (Exception $e) {
    echo 'Exception when calling HooksApi->deleteHooks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[autopilotapikey](../../README.md#autopilotapikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getHooks**
> object getHooks()

get all list of all hooks present in AutoPilot

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: autopilotapikey
$config = AutoPilot\Configuration::getDefaultConfiguration()->setApiKey('autopilotapikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AutoPilot\Configuration::getDefaultConfiguration()->setApiKeyPrefix('autopilotapikey', 'Bearer');

$apiInstance = new AutoPilot\Api\HooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getHooks();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HooksApi->getHooks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

[autopilotapikey](../../README.md#autopilotapikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registerHooks**
> object registerHooks($event, $target_url)

register a hook

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: autopilotapikey
$config = AutoPilot\Configuration::getDefaultConfiguration()->setApiKey('autopilotapikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AutoPilot\Configuration::getDefaultConfiguration()->setApiKeyPrefix('autopilotapikey', 'Bearer');

$apiInstance = new AutoPilot\Api\HooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event = "event_example"; // string | 
$target_url = "target_url_example"; // string | 

try {
    $result = $apiInstance->registerHooks($event, $target_url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HooksApi->registerHooks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **event** | **string**|  | [optional]
 **target_url** | **string**|  | [optional]

### Return type

**object**

### Authorization

[autopilotapikey](../../README.md#autopilotapikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unregisterHook**
> unregisterHook($hook_id)

Unregister a hook

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: autopilotapikey
$config = AutoPilot\Configuration::getDefaultConfiguration()->setApiKey('autopilotapikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AutoPilot\Configuration::getDefaultConfiguration()->setApiKeyPrefix('autopilotapikey', 'Bearer');

$apiInstance = new AutoPilot\Api\HooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hook_id = "hook_id_example"; // string | Hook Id

try {
    $apiInstance->unregisterHook($hook_id);
} catch (Exception $e) {
    echo 'Exception when calling HooksApi->unregisterHook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hook_id** | **string**| Hook Id |

### Return type

void (empty response body)

### Authorization

[autopilotapikey](../../README.md#autopilotapikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

