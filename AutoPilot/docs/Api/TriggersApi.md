# AutoPilot\TriggersApi

All URIs are relative to *https://private-anon-b40d4dece5-autopilot.apiary-mock.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addTriggers**](TriggersApi.md#addTriggers) | **POST** /trigger/{trigger_id}/contact/{contact_email} | Add a contact to journey
[**getTriggers**](TriggersApi.md#getTriggers) | **GET** /triggers | get all list of all journey with API triggers

# **addTriggers**
> addTriggers($trigger_id, $contact_email)

Add a contact to journey

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: autopilotapikey
$config = AutoPilot\Configuration::getDefaultConfiguration()->setApiKey('autopilotapikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AutoPilot\Configuration::getDefaultConfiguration()->setApiKeyPrefix('autopilotapikey', 'Bearer');

$apiInstance = new AutoPilot\Api\TriggersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$trigger_id = "trigger_id_example"; // string | Trigger Id
$contact_email = "contact_email_example"; // string | Contact Email Address

try {
    $apiInstance->addTriggers($trigger_id, $contact_email);
} catch (Exception $e) {
    echo 'Exception when calling TriggersApi->addTriggers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **trigger_id** | **string**| Trigger Id |
 **contact_email** | **string**| Contact Email Address |

### Return type

void (empty response body)

### Authorization

[autopilotapikey](../../README.md#autopilotapikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTriggers**
> object getTriggers()

get all list of all journey with API triggers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: autopilotapikey
$config = AutoPilot\Configuration::getDefaultConfiguration()->setApiKey('autopilotapikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AutoPilot\Configuration::getDefaultConfiguration()->setApiKeyPrefix('autopilotapikey', 'Bearer');

$apiInstance = new AutoPilot\Api\TriggersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getTriggers();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TriggersApi->getTriggers: ', $e->getMessage(), PHP_EOL;
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

