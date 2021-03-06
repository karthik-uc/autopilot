<?php
/**
 * ContactSubscriptionApi
 * PHP version 5
 *
 * @category Class
 * @package  AutoPilot
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
* AutoPilot API
 *
* Set of API that allow CRM to communicate with AutoPilotHQ
 *
* OpenAPI spec version: 0.0.3-oas3
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.0
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace AutoPilot\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use AutoPilot\ApiException;
use AutoPilot\Configuration;
use AutoPilot\HeaderSelector;
use AutoPilot\ObjectSerializer;

/**
 * ContactSubscriptionApi Class Doc Comment
 *
 * @category Class
 * @package  AutoPilot
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ContactSubscriptionApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }
    /**
     * Operation unsubscribeContact
*
     * Unsubscribe a contact in AutoPilot
*
* @param  string $contact_email Identify a contact in AutoPilot (required)
*
     * @throws \AutoPilot\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function unsubscribeContact($contact_email)
    {
        $this->unsubscribeContactWithHttpInfo($contact_email);
    }

    /**
     * Operation unsubscribeContactWithHttpInfo
*
     * Unsubscribe a contact in AutoPilot
*
* @param  string $contact_email Identify a contact in AutoPilot (required)
*
     * @throws \AutoPilot\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function unsubscribeContactWithHttpInfo($contact_email)
    {
        $returnType = '';
        $request = $this->unsubscribeContactRequest($contact_email);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            $returnType = '';
            $content = $e->getResponseBody();
            if ($returnType !== '\SplFileObject') {
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }
            switch ($e->getCode()) {
}
            throw $e;
        }
    }

    /**
     * Operation unsubscribeContactAsync
     *
     * Unsubscribe a contact in AutoPilot
     *
* @param  string $contact_email Identify a contact in AutoPilot (required)
*
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function unsubscribeContactAsync($contact_email)
    {
        return $this->unsubscribeContactAsyncWithHttpInfo($contact_email)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation unsubscribeContactAsyncWithHttpInfo
     *
     * Unsubscribe a contact in AutoPilot
     *
* @param  string $contact_email Identify a contact in AutoPilot (required)
*
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function unsubscribeContactAsyncWithHttpInfo($contact_email)
    {
        $returnType = '';
        $request = $this->unsubscribeContactRequest($contact_email);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'unsubscribeContact'
     *
* @param  string $contact_email Identify a contact in AutoPilot (required)
*
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function unsubscribeContactRequest($contact_email)
    {
// verify the required parameter 'contact_email' is set
        if ($contact_email === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $contact_email when calling unsubscribeContact'
            );
        }
$resourcePath = '/contact/{contact-email}/unsubscribe';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

// path params
if ($contact_email !== null) {
            $resourcePath = str_replace(
                '{' . 'contact-email' . '}',
                ObjectSerializer::toPathValue($contact_email),
                $resourcePath
            );
        }
// body params
        $_tempBody = null;
if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }
// this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('autopilotapikey');
        if ($apiKey !== null) {
            $headers['autopilotapikey'] = $apiKey;
        }
$defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

/**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
