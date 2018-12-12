# AutoPilot\\ContactSubscriptionApi

All URIs are relative to *https://private-anon-b40d4dece5-autopilot.apiary-mock.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**unsubscribeContact**](ContactSubscriptionApi.md#unsubscribeContact) | **POST** /contact/{contact-email}/unsubscribe | Unsubscribe a contact in AutoPilot

# **unsubscribeContact**
> unsubscribeContact($contact_email)

Unsubscribe a contact in AutoPilot

Unsubscribe a contact in AutoPilot

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: autopilotapikey
$config = AutoPilot\\Configuration::getDefaultConfiguration()->setApiKey('autopilotapikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AutoPilot\\Configuration::getDefaultConfiguration()->setApiKeyPrefix('autopilotapikey', 'Bearer');

$apiInstance = new AutoPilot\\Api\ContactSubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_email = "contact_email_example"; // string | Identify a contact in AutoPilot

try {
    $apiInstance->unsubscribeContact($contact_email);
} catch (Exception $e) {
    echo 'Exception when calling ContactSubscriptionApi->unsubscribeContact: ', $e->getMessage(), PHP_EOL;
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

