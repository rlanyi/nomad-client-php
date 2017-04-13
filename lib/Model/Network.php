<?php
/**
 * Network
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
 * Network Class Doc Comment
 *
 * @category    Class
 * @description Model for Networks
 * @package     Nomad
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Network implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'cidr' => 'string',
        'device' => 'string',
        'dynamic_ports' => '\Nomad\Model\ReservedPort[]',
        'ip' => 'string',
        'm_bits' => 'int',
        'reserved_ports' => '\Nomad\Model\ReservedPort[]'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'cidr' => 'CIDR',
        'device' => 'Device',
        'dynamic_ports' => 'DynamicPorts',
        'ip' => 'IP',
        'm_bits' => 'MBits',
        'reserved_ports' => 'ReservedPorts'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'cidr' => 'setCidr',
        'device' => 'setDevice',
        'dynamic_ports' => 'setDynamicPorts',
        'ip' => 'setIp',
        'm_bits' => 'setMBits',
        'reserved_ports' => 'setReservedPorts'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'cidr' => 'getCidr',
        'device' => 'getDevice',
        'dynamic_ports' => 'getDynamicPorts',
        'ip' => 'getIp',
        'm_bits' => 'getMBits',
        'reserved_ports' => 'getReservedPorts'
    );
  
    
    /**
      * $cidr 
      * @var string
      */
    protected $cidr;
    
    /**
      * $device 
      * @var string
      */
    protected $device;
    
    /**
      * $dynamic_ports 
      * @var \Nomad\Model\ReservedPort[]
      */
    protected $dynamic_ports;
    
    /**
      * $ip 
      * @var string
      */
    protected $ip;
    
    /**
      * $m_bits 
      * @var int
      */
    protected $m_bits;
    
    /**
      * $reserved_ports 
      * @var \Nomad\Model\ReservedPort[]
      */
    protected $reserved_ports;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->cidr = $data["cidr"];
            $this->device = $data["device"];
            $this->dynamic_ports = $data["dynamic_ports"];
            $this->ip = $data["ip"];
            $this->m_bits = $data["m_bits"];
            $this->reserved_ports = $data["reserved_ports"];
        }
    }
    
    /**
     * Gets cidr
     * @return string
     */
    public function getCidr()
    {
        return $this->cidr;
    }
  
    /**
     * Sets cidr
     * @param string $cidr 
     * @return $this
     */
    public function setCidr($cidr)
    {
        
        $this->cidr = $cidr;
        return $this;
    }
    
    /**
     * Gets device
     * @return string
     */
    public function getDevice()
    {
        return $this->device;
    }
  
    /**
     * Sets device
     * @param string $device 
     * @return $this
     */
    public function setDevice($device)
    {
        
        $this->device = $device;
        return $this;
    }
    
    /**
     * Gets dynamic_ports
     * @return \Nomad\Model\ReservedPort[]
     */
    public function getDynamicPorts()
    {
        return $this->dynamic_ports;
    }
  
    /**
     * Sets dynamic_ports
     * @param \Nomad\Model\ReservedPort[] $dynamic_ports 
     * @return $this
     */
    public function setDynamicPorts($dynamic_ports)
    {
        
        $this->dynamic_ports = $dynamic_ports;
        return $this;
    }
    
    /**
     * Gets ip
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }
  
    /**
     * Sets ip
     * @param string $ip 
     * @return $this
     */
    public function setIp($ip)
    {
        
        $this->ip = $ip;
        return $this;
    }
    
    /**
     * Gets m_bits
     * @return int
     */
    public function getMBits()
    {
        return $this->m_bits;
    }
  
    /**
     * Sets m_bits
     * @param int $m_bits 
     * @return $this
     */
    public function setMBits($m_bits)
    {
        
        $this->m_bits = $m_bits;
        return $this;
    }
    
    /**
     * Gets reserved_ports
     * @return \Nomad\Model\ReservedPort[]
     */
    public function getReservedPorts()
    {
        return $this->reserved_ports;
    }
  
    /**
     * Sets reserved_ports
     * @param \Nomad\Model\ReservedPort[] $reserved_ports 
     * @return $this
     */
    public function setReservedPorts($reserved_ports)
    {
        
        $this->reserved_ports = $reserved_ports;
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
