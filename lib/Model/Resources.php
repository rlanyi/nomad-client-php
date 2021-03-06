<?php
/**
 * Resources
 *
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

namespace Nomad\Model;

use \ArrayAccess;
/**
 * Resources Class Doc Comment
 *
 * @category    Class
 * @description Model for Resources
 * @package     Nomad
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Resources implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'cpu' => 'int',
        'disk_mb' => 'int',
        'iops' => 'int',
        'memory_mb' => 'int',
        'networks' => '\Nomad\Model\Network[]'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'cpu' => 'CPU',
        'disk_mb' => 'DiskMB',
        'iops' => 'IOPS',
        'memory_mb' => 'MemoryMB',
        'networks' => 'Networks'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'cpu' => 'setCpu',
        'disk_mb' => 'setDiskMb',
        'iops' => 'setIops',
        'memory_mb' => 'setMemoryMb',
        'networks' => 'setNetworks'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'cpu' => 'getCpu',
        'disk_mb' => 'getDiskMb',
        'iops' => 'getIops',
        'memory_mb' => 'getMemoryMb',
        'networks' => 'getNetworks'
    );
  
    
    /**
      * $cpu 
      * @var int
      */
    protected $cpu;
    
    /**
      * $disk_mb 
      * @var int
      */
    protected $disk_mb;
    
    /**
      * $iops 
      * @var int
      */
    protected $iops;
    
    /**
      * $memory_mb 
      * @var int
      */
    protected $memory_mb;
    
    /**
      * $networks 
      * @var \Nomad\Model\Network[]
      */
    protected $networks;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->cpu = $data["cpu"];
            $this->disk_mb = $data["disk_mb"];
            $this->iops = $data["iops"];
            $this->memory_mb = $data["memory_mb"];
            $this->networks = $data["networks"];
        }
    }
    
    /**
     * Gets cpu
     * @return int
     */
    public function getCpu()
    {
        return $this->cpu;
    }
  
    /**
     * Sets cpu
     * @param int $cpu 
     * @return $this
     */
    public function setCpu($cpu)
    {
        
        $this->cpu = $cpu;
        return $this;
    }
    
    /**
     * Gets disk_mb
     * @return int
     */
    public function getDiskMb()
    {
        return $this->disk_mb;
    }
  
    /**
     * Sets disk_mb
     * @param int $disk_mb 
     * @return $this
     */
    public function setDiskMb($disk_mb)
    {
        
        $this->disk_mb = $disk_mb;
        return $this;
    }
    
    /**
     * Gets iops
     * @return int
     */
    public function getIops()
    {
        return $this->iops;
    }
  
    /**
     * Sets iops
     * @param int $iops 
     * @return $this
     */
    public function setIops($iops)
    {
        
        $this->iops = $iops;
        return $this;
    }
    
    /**
     * Gets memory_mb
     * @return int
     */
    public function getMemoryMb()
    {
        return $this->memory_mb;
    }
  
    /**
     * Sets memory_mb
     * @param int $memory_mb 
     * @return $this
     */
    public function setMemoryMb($memory_mb)
    {
        
        $this->memory_mb = $memory_mb;
        return $this;
    }
    
    /**
     * Gets networks
     * @return \Nomad\Model\Network[]
     */
    public function getNetworks()
    {
        return $this->networks;
    }
  
    /**
     * Sets networks
     * @param \Nomad\Model\Network[] $networks 
     * @return $this
     */
    public function setNetworks($networks)
    {
        
        $this->networks = $networks;
        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\Nomad\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\Nomad\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}
