# AutoPilot\Api\ContactOperationApi

All URIs are relative to *https://private-anon-b40d4dece5-autopilot.apiary-mock.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteContact**](ContactOperationApi.md#deleteContact) | **DELETE** /contact/{contact-email} | Delete a contact from AutoPilot
[**getContactInfo**](ContactOperationApi.md#getContactInfo) | **GET** /contact/{contact-email} | Returns contact information from AutoPilot
[**getFirstContactSet**](ContactOperationApi.md#getFirstContactSet) | **GET** /contacts | Get first set of contacts present in AutoPilot
[**getNextContactSet**](ContactOperationApi.md#getNextContactSet) | **GET** /contacts/{bookmark} | Get next set of contacts present in AutoPilot

# **deleteContact**
> deleteContact($contact_email)

Delete a contact from AutoPilot

This API will remove this contact from AutoPilot

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: autopilotapikey
$config = AutoPilot\Api\Configuration::getDefaultConfiguration()->setApiKey('autopilotapikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AutoPilot\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('autopilotapikey', 'Bearer');

$apiInstance = new AutoPilot\Api\Api\ContactOperationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_email = "contact_email_example"; // string | Identify a contact in AutoPilot

try {
    $apiInstance->deleteContact($contact_email);
} catch (Exception $e) {
    echo 'Exception when calling ContactOperationApi->deleteContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_email** | **string**| Identify a contact in AutoPilot |

### Return type

void (empty response body)

### Authorization

[autopilotapikey](../../README.md#autopilotapikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactInfo**
> object getContactInfo($contact_email)

Returns contact information from AutoPilot

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: autopilotapikey
$config = AutoPilot\Api\Configuration::getDefaultConfiguration()->setApiKey('autopilotapikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AutoPilot\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('autopilotapikey', 'Bearer');

$apiInstance = new AutoPilot\Api\Api\ContactOperationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_email = "contact_email_example"; // string | Identify a contact in AutoPilot

try {
    $result = $apiInstance->getContactInfo($contact_email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactOperationApi->getContactInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_email** | **string**| Identify a contact in AutoPilot |

### Return type

**object**

### Authorization

[autopilotapikey](../../README.md#autopilotapikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFirstContactSet**
> object getFirstContactSet()

Get first set of contacts present in AutoPilot

Get first set of contacts present in AutoPilot

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: autopilotapikey
$config = AutoPilot\Api\Configuration::getDefaultConfiguration()->setApiKey('autopilotapikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AutoPilot\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('autopilotapikey', 'Bearer');

$apiInstance = new AutoPilot\Api\Api\ContactOperationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getFirstContactSet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactOperationApi->getFirstContactSet: ', $e->getMessage(), PHP_EOL;
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

# **getNextContactSet**
> object getNextContactSet($bookmark)

Get next set of contacts present in AutoPilot

Get next set of contacts present in AutoPilot

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: autopilotapikey
$config = AutoPilot\Api\Configuration::getDefaultConfiguration()->setApiKey('autopilotapikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AutoPilot\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('autopilotapikey', 'Bearer');

$apiInstance = new AutoPilot\Api\Api\ContactOperationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bookmark = "bookmark_example"; // string | Bookmark is used to access next group

try {
    $result = $apiInstance->getNextContactSet($bookmark);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactOperationApi->getNextContactSet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bookmark** | **string**| Bookmark is used to access next group |

### Return type

**object**

### Authorization

[autopilotapikey](../../README.md#autopilotapikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

