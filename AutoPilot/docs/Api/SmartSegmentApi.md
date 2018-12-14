# AutoPilot\SmartSegmentApi

All URIs are relative to *https://private-anon-b40d4dece5-autopilot.apiary-mock.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSegment**](SmartSegmentApi.md#getSegment) | **GET** /smart_segments | get all list present in smart segment

# **getSegment**
> object getSegment()

get all list present in smart segment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: autopilotapikey
$config = AutoPilot\Configuration::getDefaultConfiguration()->setApiKey('autopilotapikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AutoPilot\Configuration::getDefaultConfiguration()->setApiKeyPrefix('autopilotapikey', 'Bearer');

$apiInstance = new AutoPilot\Api\SmartSegmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getSegment();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartSegmentApi->getSegment: ', $e->getMessage(), PHP_EOL;
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

