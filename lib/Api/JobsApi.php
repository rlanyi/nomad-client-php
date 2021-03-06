<?php
/**
 * JobsApi
 * PHP version 5
 *
 * @category Class
 * @package  Nomad
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2016 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program. 
 * https://github.com/swagger-api/swagger-codegen 
 * Do not edit the class manually.
 */

namespace Nomad\Api;

use \Nomad\Configuration;
use \Nomad\ApiClient;
use \Nomad\ApiException;
use \Nomad\ObjectSerializer;

/**
 * JobsApi Class Doc Comment
 *
 * @category Class
 * @package  Nomad
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class JobsApi
{

    /**
     * API Client
     * @var \Nomad\ApiClient instance of the ApiClient
     */
    protected $apiClient;
  
    /**
     * Constructor
     * @param \Nomad\ApiClient|null $apiClient The api client to use
     */
    function __construct($apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('http://robika.dyndns.org:4646/v1');
        }
  
        $this->apiClient = $apiClient;
    }
  
    /**
     * Get API client
     * @return \Nomad\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }
  
    /**
     * Set the API client
     * @param \Nomad\ApiClient $apiClient set the API client
     * @return JobsApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * get
     *
     * Lists all the jobs registered with Nomad.
     *
     * @param string $prefix Filter jobs based on an identifier prefix. (optional)
     * @param string $stale Consistency Mode (optional)
     * @param string $region Cross-Region Request (optional)
     * @param string $pretty Formatted JSON Output (optional)
     * @return \Nomad\Model\Jobs[]
     * @throws \Nomad\ApiException on non-2xx response
     */
    public function get($prefix = null, $stale = null, $region = null, $pretty = null)
    {
        list($response, $statusCode, $httpHeader) = $this->getWithHttpInfo ($prefix, $stale, $region, $pretty);
        return $response; 
    }


    /**
     * getWithHttpInfo
     *
     * Lists all the jobs registered with Nomad.
     *
     * @param string $prefix Filter jobs based on an identifier prefix. (optional)
     * @param string $stale Consistency Mode (optional)
     * @param string $region Cross-Region Request (optional)
     * @param string $pretty Formatted JSON Output (optional)
     * @return Array of \Nomad\Model\Jobs[], HTTP status code, HTTP response headers (array of strings)
     * @throws \Nomad\ApiException on non-2xx response
     */
    public function getWithHttpInfo($prefix = null, $stale = null, $region = null, $pretty = null)
    {
        
  
        // parse inputs
        $resourcePath = "/jobs";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        // query params
        
        if ($prefix !== null) {
            $queryParams['prefix'] = $this->apiClient->getSerializer()->toQueryValue($prefix);
        }// query params
        
        if ($stale !== null) {
            $queryParams['stale'] = $this->apiClient->getSerializer()->toQueryValue($stale);
        }// query params
        
        if ($region !== null) {
            $queryParams['region'] = $this->apiClient->getSerializer()->toQueryValue($region);
        }// query params
        
        if ($pretty !== null) {
            $queryParams['pretty'] = $this->apiClient->getSerializer()->toQueryValue($pretty);
        }
        
        
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'GET',
                $queryParams, $httpBody,
                $headerParams, '\Nomad\Model\Jobs[]'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Nomad\ObjectSerializer::deserialize($response, '\Nomad\Model\Jobs[]', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Nomad\ObjectSerializer::deserialize($e->getResponseBody(), '\Nomad\Model\Jobs[]', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * create
     *
     * Registers a new job.
     *
     * @param \Nomad\Model\ParameterizedJob $parameterized_job The Job object (required)
     * @param string $stale Consistency Mode (optional)
     * @param string $region Cross-Region Request (optional)
     * @param string $pretty Formatted JSON Output (optional)
     * @return \Nomad\Model\CreateJobsResponse
     * @throws \Nomad\ApiException on non-2xx response
     */
    public function create($parameterized_job, $stale = null, $region = null, $pretty = null)
    {
        list($response, $statusCode, $httpHeader) = $this->createWithHttpInfo ($parameterized_job, $stale, $region, $pretty);
        return $response; 
    }


    /**
     * createWithHttpInfo
     *
     * Registers a new job.
     *
     * @param \Nomad\Model\ParameterizedJob $parameterized_job The Job object (required)
     * @param string $stale Consistency Mode (optional)
     * @param string $region Cross-Region Request (optional)
     * @param string $pretty Formatted JSON Output (optional)
     * @return Array of \Nomad\Model\CreateJobsResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \Nomad\ApiException on non-2xx response
     */
    public function createWithHttpInfo($parameterized_job, $stale = null, $region = null, $pretty = null)
    {
        
        // verify the required parameter 'parameterized_job' is set
        if ($parameterized_job === null) {
            throw new \InvalidArgumentException('Missing the required parameter $parameterized_job when calling create');
        }
  
        // parse inputs
        $resourcePath = "/jobs";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
  
        // query params
        
        if ($stale !== null) {
            $queryParams['stale'] = $this->apiClient->getSerializer()->toQueryValue($stale);
        }// query params
        
        if ($region !== null) {
            $queryParams['region'] = $this->apiClient->getSerializer()->toQueryValue($region);
        }// query params
        
        if ($pretty !== null) {
            $queryParams['pretty'] = $this->apiClient->getSerializer()->toQueryValue($pretty);
        }
        
        
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // body params
        $_tempBody = null;
        if (isset($parameterized_job)) {
            $_tempBody = $parameterized_job;
        }
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'POST',
                $queryParams, $httpBody,
                $headerParams, '\Nomad\Model\CreateJobsResponse'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Nomad\ObjectSerializer::deserialize($response, '\Nomad\Model\CreateJobsResponse', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Nomad\ObjectSerializer::deserialize($e->getResponseBody(), '\Nomad\Model\CreateJobsResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
}
