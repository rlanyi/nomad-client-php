<?php
/**
 * Vault
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
 * Vault Class Doc Comment
 *
 * @category    Class
 * @description Model for Vault
 * @package     Nomad
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Vault implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'change_mode' => 'string',
        'change_signal' => 'string',
        'env' => 'bool',
        'policies' => 'string[]'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'change_mode' => 'ChangeMode',
        'change_signal' => 'ChangeSignal',
        'env' => 'Env',
        'policies' => 'Policies'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'change_mode' => 'setChangeMode',
        'change_signal' => 'setChangeSignal',
        'env' => 'setEnv',
        'policies' => 'setPolicies'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'change_mode' => 'getChangeMode',
        'change_signal' => 'getChangeSignal',
        'env' => 'getEnv',
        'policies' => 'getPolicies'
    );
  
    
    /**
      * $change_mode 
      * @var string
      */
    protected $change_mode;
    
    /**
      * $change_signal 
      * @var string
      */
    protected $change_signal;
    
    /**
      * $env 
      * @var bool
      */
    protected $env;
    
    /**
      * $policies 
      * @var string[]
      */
    protected $policies;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->change_mode = $data["change_mode"];
            $this->change_signal = $data["change_signal"];
            $this->env = $data["env"];
            $this->policies = $data["policies"];
        }
    }
    
    /**
     * Gets change_mode
     * @return string
     */
    public function getChangeMode()
    {
        return $this->change_mode;
    }
  
    /**
     * Sets change_mode
     * @param string $change_mode 
     * @return $this
     */
    public function setChangeMode($change_mode)
    {
        
        $this->change_mode = $change_mode;
        return $this;
    }
    
    /**
     * Gets change_signal
     * @return string
     */
    public function getChangeSignal()
    {
        return $this->change_signal;
    }
  
    /**
     * Sets change_signal
     * @param string $change_signal 
     * @return $this
     */
    public function setChangeSignal($change_signal)
    {
        
        $this->change_signal = $change_signal;
        return $this;
    }
    
    /**
     * Gets env
     * @return bool
     */
    public function getEnv()
    {
        return $this->env;
    }
  
    /**
     * Sets env
     * @param bool $env 
     * @return $this
     */
    public function setEnv($env)
    {
        
        $this->env = $env;
        return $this;
    }
    
    /**
     * Gets policies
     * @return string[]
     */
    public function getPolicies()
    {
        return $this->policies;
    }
  
    /**
     * Sets policies
     * @param string[] $policies 
     * @return $this
     */
    public function setPolicies($policies)
    {
        
        $this->policies = $policies;
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
