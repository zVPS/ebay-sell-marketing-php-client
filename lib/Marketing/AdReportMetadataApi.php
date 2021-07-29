<?php
/**
 * AdReportMetadataApi
 * PHP version 7.2
 *
 * @category Class
 * @package  Ebay\Sell
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Marketing API
 *
 * The Marketing API offers two platforms that sellers can use to promote and advertise their products: Promoted Listings is an eBay ad service that lets sellers set up ad campaigns for the products they want to promote. eBay displays the ads in search results and in other marketing modules as SPONSORED listings. If an item in a Promoted Listings campaign sells, the seller is assessed a Promoted Listings fee, which is a seller-specified percentage applied to the sales price. For complete details, see Promoted Listings. Promotions Manager gives sellers a way to offer discounts on specific items as a way to attract buyers to their inventory. Sellers can set up discounts (such as &quot;20% off&quot; and other types of offers) on specific items or on an entire customer order. To further attract buyers, eBay prominently displays promotion teasers throughout buyer flows. For complete details, see Promotions Manager. Marketing reports, on both the Promoted Listings and Promotions Manager platforms, give sellers information that shows the effectiveness of their marketing strategies. The data gives sellers the ability to review and fine tune their marketing efforts. Important! Sellers must have an active eBay Store subscription, and they must accept the Terms and Conditions before they can make requests to these APIs in the Production environment. There are also site-specific listings requirements and restrictions associated with these marketing tools, as listed in the &quot;requirements and restrictions&quot; sections for Promoted Listings and Promotions Manager. The table below lists all the Marketing API calls grouped by resource.
 *
 * The version of the OpenAPI document: v1.10.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Ebay\Sell\Marketing;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Ebay\Sell\ApiException;
use Ebay\Sell\Configuration;
use Ebay\Sell\HeaderSelector;
use Ebay\Sell\ObjectSerializer;

/**
 * AdReportMetadataApi Class Doc Comment
 *
 * @category Class
 * @package  Ebay\Sell
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AdReportMetadataApi
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
     * @return void
     */
    public function setHostIndex($hostIndex)
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
     * Operation getReportMetadata
     *
     *
     * @throws \Ebay\Sell\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Ebay\Sell\Marketing\Model\ReportMetadatas
     */
    public function getReportMetadata()
    {
        list($response) = $this->getReportMetadataWithHttpInfo();
        return $response;
    }

    /**
     * Operation getReportMetadataWithHttpInfo
     *
     *
     * @throws \Ebay\Sell\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Ebay\Sell\Marketing\Model\ReportMetadatas, HTTP status code, HTTP response headers (array of strings)
     */
    public function getReportMetadataWithHttpInfo()
    {
        $request = $this->getReportMetadataRequest();

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
                case 200:
                    if ('\Ebay\Sell\Marketing\Model\ReportMetadatas' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Ebay\Sell\Marketing\Model\ReportMetadatas', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Ebay\Sell\Marketing\Model\ReportMetadatas';
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
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Ebay\Sell\Marketing\Model\ReportMetadatas',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getReportMetadataAsync
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getReportMetadataAsync()
    {
        return $this->getReportMetadataAsyncWithHttpInfo()
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getReportMetadataAsyncWithHttpInfo
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getReportMetadataAsyncWithHttpInfo()
    {
        $returnType = '\Ebay\Sell\Marketing\Model\ReportMetadatas';
        $request = $this->getReportMetadataRequest();

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
     * Create request for operation 'getReportMetadata'
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getReportMetadataRequest()
    {

        $resourcePath = '/ad_report_metadata';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





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
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getReportMetadataForReportType
     *
     * @param  string $report_type The name of the report type whose metadata you want to get. For details about each report type, see ReportTypeEnum. Valid values: &amp;nbsp;&amp;nbsp;&amp;nbsp;ACCOUNT_PERFORMANCE_REPORT &amp;nbsp;&amp;nbsp;&amp;nbsp;CAMPAIGN_PERFORMANCE_REPORT &amp;nbsp;&amp;nbsp;&amp;nbsp;CAMPAIGN_PERFORMANCE_SUMMARY_REPORT &amp;nbsp;&amp;nbsp;&amp;nbsp;LISTING_PERFORMANCE_REPORT &amp;nbsp;&amp;nbsp;&amp;nbsp;INVENTORY_PERFORMANCE_REPORT (required)
     *
     * @throws \Ebay\Sell\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Ebay\Sell\Marketing\Model\ReportMetadata
     */
    public function getReportMetadataForReportType($report_type)
    {
        list($response) = $this->getReportMetadataForReportTypeWithHttpInfo($report_type);
        return $response;
    }

    /**
     * Operation getReportMetadataForReportTypeWithHttpInfo
     *
     * @param  string $report_type The name of the report type whose metadata you want to get. For details about each report type, see ReportTypeEnum. Valid values: &amp;nbsp;&amp;nbsp;&amp;nbsp;ACCOUNT_PERFORMANCE_REPORT &amp;nbsp;&amp;nbsp;&amp;nbsp;CAMPAIGN_PERFORMANCE_REPORT &amp;nbsp;&amp;nbsp;&amp;nbsp;CAMPAIGN_PERFORMANCE_SUMMARY_REPORT &amp;nbsp;&amp;nbsp;&amp;nbsp;LISTING_PERFORMANCE_REPORT &amp;nbsp;&amp;nbsp;&amp;nbsp;INVENTORY_PERFORMANCE_REPORT (required)
     *
     * @throws \Ebay\Sell\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Ebay\Sell\Marketing\Model\ReportMetadata, HTTP status code, HTTP response headers (array of strings)
     */
    public function getReportMetadataForReportTypeWithHttpInfo($report_type)
    {
        $request = $this->getReportMetadataForReportTypeRequest($report_type);

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
                case 200:
                    if ('\Ebay\Sell\Marketing\Model\ReportMetadata' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Ebay\Sell\Marketing\Model\ReportMetadata', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Ebay\Sell\Marketing\Model\ReportMetadata';
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
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Ebay\Sell\Marketing\Model\ReportMetadata',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getReportMetadataForReportTypeAsync
     *
     * @param  string $report_type The name of the report type whose metadata you want to get. For details about each report type, see ReportTypeEnum. Valid values: &amp;nbsp;&amp;nbsp;&amp;nbsp;ACCOUNT_PERFORMANCE_REPORT &amp;nbsp;&amp;nbsp;&amp;nbsp;CAMPAIGN_PERFORMANCE_REPORT &amp;nbsp;&amp;nbsp;&amp;nbsp;CAMPAIGN_PERFORMANCE_SUMMARY_REPORT &amp;nbsp;&amp;nbsp;&amp;nbsp;LISTING_PERFORMANCE_REPORT &amp;nbsp;&amp;nbsp;&amp;nbsp;INVENTORY_PERFORMANCE_REPORT (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getReportMetadataForReportTypeAsync($report_type)
    {
        return $this->getReportMetadataForReportTypeAsyncWithHttpInfo($report_type)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getReportMetadataForReportTypeAsyncWithHttpInfo
     *
     * @param  string $report_type The name of the report type whose metadata you want to get. For details about each report type, see ReportTypeEnum. Valid values: &amp;nbsp;&amp;nbsp;&amp;nbsp;ACCOUNT_PERFORMANCE_REPORT &amp;nbsp;&amp;nbsp;&amp;nbsp;CAMPAIGN_PERFORMANCE_REPORT &amp;nbsp;&amp;nbsp;&amp;nbsp;CAMPAIGN_PERFORMANCE_SUMMARY_REPORT &amp;nbsp;&amp;nbsp;&amp;nbsp;LISTING_PERFORMANCE_REPORT &amp;nbsp;&amp;nbsp;&amp;nbsp;INVENTORY_PERFORMANCE_REPORT (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getReportMetadataForReportTypeAsyncWithHttpInfo($report_type)
    {
        $returnType = '\Ebay\Sell\Marketing\Model\ReportMetadata';
        $request = $this->getReportMetadataForReportTypeRequest($report_type);

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
     * Create request for operation 'getReportMetadataForReportType'
     *
     * @param  string $report_type The name of the report type whose metadata you want to get. For details about each report type, see ReportTypeEnum. Valid values: &amp;nbsp;&amp;nbsp;&amp;nbsp;ACCOUNT_PERFORMANCE_REPORT &amp;nbsp;&amp;nbsp;&amp;nbsp;CAMPAIGN_PERFORMANCE_REPORT &amp;nbsp;&amp;nbsp;&amp;nbsp;CAMPAIGN_PERFORMANCE_SUMMARY_REPORT &amp;nbsp;&amp;nbsp;&amp;nbsp;LISTING_PERFORMANCE_REPORT &amp;nbsp;&amp;nbsp;&amp;nbsp;INVENTORY_PERFORMANCE_REPORT (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getReportMetadataForReportTypeRequest($report_type)
    {
        // verify the required parameter 'report_type' is set
        if ($report_type === null || (is_array($report_type) && count($report_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $report_type when calling getReportMetadataForReportType'
            );
        }

        $resourcePath = '/ad_report_metadata/{report_type}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($report_type !== null) {
            $resourcePath = str_replace(
                '{' . 'report_type' . '}',
                ObjectSerializer::toPathValue($report_type),
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
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
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
