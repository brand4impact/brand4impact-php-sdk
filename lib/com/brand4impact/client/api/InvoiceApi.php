<?php
/**
 * InvoiceApi
 * PHP version 7.3
 *
 * @category Class
 * @package  com.brand4impact.client.invoker
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Total API Reference
 *
 * Este contrato se usara para generar los clientes con todos los servicios necesarios.  `!Uso exclusivo interno!`               ---
 *
 * The version of the OpenAPI document: 0.0.1
 * Contact: support@brand4impact.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace com.brand4impact.client.invoker\com.brand4impact.client.api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use com.brand4impact.client.invoker\ApiException;
use com.brand4impact.client.invoker\Configuration;
use com.brand4impact.client.invoker\HeaderSelector;
use com.brand4impact.client.invoker\ObjectSerializer;

/**
 * InvoiceApi Class Doc Comment
 *
 * @category Class
 * @package  com.brand4impact.client.invoker
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InvoiceApi
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
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getInvoice
     *
     * Get a single invoice
     *
     * @param  string $token token (required)
     *
     * @throws \com.brand4impact.client.invoker\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \com.brand4impact.client.invoker\com.brand4impact.client.model\RestError|\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformInvoice|\com.brand4impact.client.invoker\com.brand4impact.client.model\RestError|\com.brand4impact.client.invoker\com.brand4impact.client.model\RestError|\com.brand4impact.client.invoker\com.brand4impact.client.model\RestError
     */
    public function getInvoice($token)
    {
        list($response) = $this->getInvoiceWithHttpInfo($token);
        return $response;
    }

    /**
     * Operation getInvoiceWithHttpInfo
     *
     * Get a single invoice
     *
     * @param  string $token (required)
     *
     * @throws \com.brand4impact.client.invoker\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \com.brand4impact.client.invoker\com.brand4impact.client.model\RestError|\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformInvoice|\com.brand4impact.client.invoker\com.brand4impact.client.model\RestError|\com.brand4impact.client.invoker\com.brand4impact.client.model\RestError|\com.brand4impact.client.invoker\com.brand4impact.client.model\RestError, HTTP status code, HTTP response headers (array of strings)
     */
    public function getInvoiceWithHttpInfo($token)
    {
        $request = $this->getInvoiceRequest($token);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 500:
                    if ('\com.brand4impact.client.invoker\com.brand4impact.client.model\RestError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\com.brand4impact.client.invoker\com.brand4impact.client.model\RestError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 200:
                    if ('\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformInvoice' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformInvoice', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\com.brand4impact.client.invoker\com.brand4impact.client.model\RestError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\com.brand4impact.client.invoker\com.brand4impact.client.model\RestError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 409:
                    if ('\com.brand4impact.client.invoker\com.brand4impact.client.model\RestError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\com.brand4impact.client.invoker\com.brand4impact.client.model\RestError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\com.brand4impact.client.invoker\com.brand4impact.client.model\RestError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\com.brand4impact.client.invoker\com.brand4impact.client.model\RestError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformInvoice';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\com.brand4impact.client.invoker\com.brand4impact.client.model\RestError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformInvoice',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\com.brand4impact.client.invoker\com.brand4impact.client.model\RestError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 409:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\com.brand4impact.client.invoker\com.brand4impact.client.model\RestError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\com.brand4impact.client.invoker\com.brand4impact.client.model\RestError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getInvoiceAsync
     *
     * Get a single invoice
     *
     * @param  string $token (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getInvoiceAsync($token)
    {
        return $this->getInvoiceAsyncWithHttpInfo($token)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getInvoiceAsyncWithHttpInfo
     *
     * Get a single invoice
     *
     * @param  string $token (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getInvoiceAsyncWithHttpInfo($token)
    {
        $returnType = '\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformInvoice';
        $request = $this->getInvoiceRequest($token);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getInvoice'
     *
     * @param  string $token (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getInvoiceRequest($token)
    {
        // verify the required parameter 'token' is set
        if ($token === null || (is_array($token) && count($token) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $token when calling getInvoice'
            );
        }

        $resourcePath = '/rest/platform/invoice/{token}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($token !== null) {
            $resourcePath = str_replace(
                '{' . 'token' . '}',
                ObjectSerializer::toPathValue($token),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires Bearer authentication (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getInvoices
     *
     * Get a set of invoices
     *
     * @param  string $numberLike The name of the filter (optional)
     * @param  int $page The number of the page. Possible values: 0 to unlimited (optional)
     * @param  int $size The number of items inside a page. Possible values: 1 to 100 (optional)
     * @param  string $sort The order direction for sorted results. Possible values: ASC or DESC (optional)
     *
     * @throws \com.brand4impact.client.invoker\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \com.brand4impact.client.invoker\com.brand4impact.client.model\RestError|\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformInvoiceItemWrapper|\com.brand4impact.client.invoker\com.brand4impact.client.model\RestError|\com.brand4impact.client.invoker\com.brand4impact.client.model\RestError|\com.brand4impact.client.invoker\com.brand4impact.client.model\RestError
     */
    public function getInvoices($numberLike = null, $page = null, $size = null, $sort = null)
    {
        list($response) = $this->getInvoicesWithHttpInfo($numberLike, $page, $size, $sort);
        return $response;
    }

    /**
     * Operation getInvoicesWithHttpInfo
     *
     * Get a set of invoices
     *
     * @param  string $numberLike The name of the filter (optional)
     * @param  int $page The number of the page. Possible values: 0 to unlimited (optional)
     * @param  int $size The number of items inside a page. Possible values: 1 to 100 (optional)
     * @param  string $sort The order direction for sorted results. Possible values: ASC or DESC (optional)
     *
     * @throws \com.brand4impact.client.invoker\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \com.brand4impact.client.invoker\com.brand4impact.client.model\RestError|\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformInvoiceItemWrapper|\com.brand4impact.client.invoker\com.brand4impact.client.model\RestError|\com.brand4impact.client.invoker\com.brand4impact.client.model\RestError|\com.brand4impact.client.invoker\com.brand4impact.client.model\RestError, HTTP status code, HTTP response headers (array of strings)
     */
    public function getInvoicesWithHttpInfo($numberLike = null, $page = null, $size = null, $sort = null)
    {
        $request = $this->getInvoicesRequest($numberLike, $page, $size, $sort);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 500:
                    if ('\com.brand4impact.client.invoker\com.brand4impact.client.model\RestError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\com.brand4impact.client.invoker\com.brand4impact.client.model\RestError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 200:
                    if ('\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformInvoiceItemWrapper' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformInvoiceItemWrapper', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\com.brand4impact.client.invoker\com.brand4impact.client.model\RestError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\com.brand4impact.client.invoker\com.brand4impact.client.model\RestError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 409:
                    if ('\com.brand4impact.client.invoker\com.brand4impact.client.model\RestError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\com.brand4impact.client.invoker\com.brand4impact.client.model\RestError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\com.brand4impact.client.invoker\com.brand4impact.client.model\RestError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\com.brand4impact.client.invoker\com.brand4impact.client.model\RestError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformInvoiceItemWrapper';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\com.brand4impact.client.invoker\com.brand4impact.client.model\RestError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformInvoiceItemWrapper',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\com.brand4impact.client.invoker\com.brand4impact.client.model\RestError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 409:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\com.brand4impact.client.invoker\com.brand4impact.client.model\RestError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\com.brand4impact.client.invoker\com.brand4impact.client.model\RestError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getInvoicesAsync
     *
     * Get a set of invoices
     *
     * @param  string $numberLike The name of the filter (optional)
     * @param  int $page The number of the page. Possible values: 0 to unlimited (optional)
     * @param  int $size The number of items inside a page. Possible values: 1 to 100 (optional)
     * @param  string $sort The order direction for sorted results. Possible values: ASC or DESC (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getInvoicesAsync($numberLike = null, $page = null, $size = null, $sort = null)
    {
        return $this->getInvoicesAsyncWithHttpInfo($numberLike, $page, $size, $sort)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getInvoicesAsyncWithHttpInfo
     *
     * Get a set of invoices
     *
     * @param  string $numberLike The name of the filter (optional)
     * @param  int $page The number of the page. Possible values: 0 to unlimited (optional)
     * @param  int $size The number of items inside a page. Possible values: 1 to 100 (optional)
     * @param  string $sort The order direction for sorted results. Possible values: ASC or DESC (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getInvoicesAsyncWithHttpInfo($numberLike = null, $page = null, $size = null, $sort = null)
    {
        $returnType = '\com.brand4impact.client.invoker\com.brand4impact.client.model\PlatformInvoiceItemWrapper';
        $request = $this->getInvoicesRequest($numberLike, $page, $size, $sort);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getInvoices'
     *
     * @param  string $numberLike The name of the filter (optional)
     * @param  int $page The number of the page. Possible values: 0 to unlimited (optional)
     * @param  int $size The number of items inside a page. Possible values: 1 to 100 (optional)
     * @param  string $sort The order direction for sorted results. Possible values: ASC or DESC (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getInvoicesRequest($numberLike = null, $page = null, $size = null, $sort = null)
    {

        $resourcePath = '/rest/platform/invoice';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($numberLike !== null) {
            if('form' === 'form' && is_array($numberLike)) {
                foreach($numberLike as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['numberLike'] = $numberLike;
            }
        }
        // query params
        if ($page !== null) {
            if('form' === 'form' && is_array($page)) {
                foreach($page as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['page'] = $page;
            }
        }
        // query params
        if ($size !== null) {
            if('form' === 'form' && is_array($size)) {
                foreach($size as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['size'] = $size;
            }
        }
        // query params
        if ($sort !== null) {
            if('form' === 'form' && is_array($sort)) {
                foreach($sort as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['sort'] = $sort;
            }
        }




        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires Bearer authentication (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
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
