<?php
/**
 * JobDefinition
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
 * JobDefinition Class Doc Comment
 *
 * @category    Class
 * @description Jobs are submitted by users and represent a desired state. A job is a declarative description of tasks to run which are bounded by constraints and require resources.
 * @package     Nomad
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class JobDefinition implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'all_at_once' => 'bool',
        'constraints' => '\Nomad\Model\Constraint[]',
        'datacenters' => 'string[]',
        'id' => 'string',
        'meta' => 'string[]',
        'name' => 'string',
        'parameterized_job' => '\Nomad\Model\ParameterizedJob',
        'payload' => 'string',
        'periodic' => '\Nomad\Model\Periodic',
        'priority' => 'int',
        'region' => 'string',
        'task_groups' => '\Nomad\Model\TaskGroup[]',
        'type' => 'string',
        'update' => '\Nomad\Model\UpdateStrategy'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'all_at_once' => 'AllAtOnce',
        'constraints' => 'Constraints',
        'datacenters' => 'Datacenters',
        'id' => 'ID',
        'meta' => 'Meta',
        'name' => 'Name',
        'parameterized_job' => 'ParameterizedJob',
        'payload' => 'Payload',
        'periodic' => 'Periodic',
        'priority' => 'Priority',
        'region' => 'Region',
        'task_groups' => 'TaskGroups',
        'type' => 'Type',
        'update' => 'Update'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'all_at_once' => 'setAllAtOnce',
        'constraints' => 'setConstraints',
        'datacenters' => 'setDatacenters',
        'id' => 'setId',
        'meta' => 'setMeta',
        'name' => 'setName',
        'parameterized_job' => 'setParameterizedJob',
        'payload' => 'setPayload',
        'periodic' => 'setPeriodic',
        'priority' => 'setPriority',
        'region' => 'setRegion',
        'task_groups' => 'setTaskGroups',
        'type' => 'setType',
        'update' => 'setUpdate'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'all_at_once' => 'getAllAtOnce',
        'constraints' => 'getConstraints',
        'datacenters' => 'getDatacenters',
        'id' => 'getId',
        'meta' => 'getMeta',
        'name' => 'getName',
        'parameterized_job' => 'getParameterizedJob',
        'payload' => 'getPayload',
        'periodic' => 'getPeriodic',
        'priority' => 'getPriority',
        'region' => 'getRegion',
        'task_groups' => 'getTaskGroups',
        'type' => 'getType',
        'update' => 'getUpdate'
    );
  
    
    /**
      * $all_at_once 
      * @var bool
      */
    protected $all_at_once;
    
    /**
      * $constraints 
      * @var \Nomad\Model\Constraint[]
      */
    protected $constraints;
    
    /**
      * $datacenters 
      * @var string[]
      */
    protected $datacenters;
    
    /**
      * $id 
      * @var string
      */
    protected $id;
    
    /**
      * $meta 
      * @var string[]
      */
    protected $meta;
    
    /**
      * $name 
      * @var string
      */
    protected $name;
    
    /**
      * $parameterized_job 
      * @var \Nomad\Model\ParameterizedJob
      */
    protected $parameterized_job;
    
    /**
      * $payload 
      * @var string
      */
    protected $payload;
    
    /**
      * $periodic 
      * @var \Nomad\Model\Periodic
      */
    protected $periodic;
    
    /**
      * $priority 
      * @var int
      */
    protected $priority;
    
    /**
      * $region 
      * @var string
      */
    protected $region;
    
    /**
      * $task_groups 
      * @var \Nomad\Model\TaskGroup[]
      */
    protected $task_groups;
    
    /**
      * $type 
      * @var string
      */
    protected $type;
    
    /**
      * $update 
      * @var \Nomad\Model\UpdateStrategy
      */
    protected $update;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->all_at_once = $data["all_at_once"];
            $this->constraints = $data["constraints"];
            $this->datacenters = $data["datacenters"];
            $this->id = $data["id"];
            $this->meta = $data["meta"];
            $this->name = $data["name"];
            $this->parameterized_job = $data["parameterized_job"];
            $this->payload = $data["payload"];
            $this->periodic = $data["periodic"];
            $this->priority = $data["priority"];
            $this->region = $data["region"];
            $this->task_groups = $data["task_groups"];
            $this->type = $data["type"];
            $this->update = $data["update"];
        }
    }
    
    /**
     * Gets all_at_once
     * @return bool
     */
    public function getAllAtOnce()
    {
        return $this->all_at_once;
    }
  
    /**
     * Sets all_at_once
     * @param bool $all_at_once 
     * @return $this
     */
    public function setAllAtOnce($all_at_once)
    {
        
        $this->all_at_once = $all_at_once;
        return $this;
    }
    
    /**
     * Gets constraints
     * @return \Nomad\Model\Constraint[]
     */
    public function getConstraints()
    {
        return $this->constraints;
    }
  
    /**
     * Sets constraints
     * @param \Nomad\Model\Constraint[] $constraints 
     * @return $this
     */
    public function setConstraints($constraints)
    {
        
        $this->constraints = $constraints;
        return $this;
    }
    
    /**
     * Gets datacenters
     * @return string[]
     */
    public function getDatacenters()
    {
        return $this->datacenters;
    }
  
    /**
     * Sets datacenters
     * @param string[] $datacenters 
     * @return $this
     */
    public function setDatacenters($datacenters)
    {
        
        $this->datacenters = $datacenters;
        return $this;
    }
    
    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
  
    /**
     * Sets id
     * @param string $id 
     * @return $this
     */
    public function setId($id)
    {
        
        $this->id = $id;
        return $this;
    }
    
    /**
     * Gets meta
     * @return string[]
     */
    public function getMeta()
    {
        return $this->meta;
    }
  
    /**
     * Sets meta
     * @param string[] $meta 
     * @return $this
     */
    public function setMeta($meta)
    {
        
        $this->meta = $meta;
        return $this;
    }
    
    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
  
    /**
     * Sets name
     * @param string $name 
     * @return $this
     */
    public function setName($name)
    {
        
        $this->name = $name;
        return $this;
    }
    
    /**
     * Gets parameterized_job
     * @return \Nomad\Model\ParameterizedJob
     */
    public function getParameterizedJob()
    {
        return $this->parameterized_job;
    }
  
    /**
     * Sets parameterized_job
     * @param \Nomad\Model\ParameterizedJob $parameterized_job 
     * @return $this
     */
    public function setParameterizedJob($parameterized_job)
    {
        
        $this->parameterized_job = $parameterized_job;
        return $this;
    }
    
    /**
     * Gets payload
     * @return string
     */
    public function getPayload()
    {
        return $this->payload;
    }
  
    /**
     * Sets payload
     * @param string $payload 
     * @return $this
     */
    public function setPayload($payload)
    {
        
        $this->payload = $payload;
        return $this;
    }
    
    /**
     * Gets periodic
     * @return \Nomad\Model\Periodic
     */
    public function getPeriodic()
    {
        return $this->periodic;
    }
  
    /**
     * Sets periodic
     * @param \Nomad\Model\Periodic $periodic 
     * @return $this
     */
    public function setPeriodic($periodic)
    {
        
        $this->periodic = $periodic;
        return $this;
    }
    
    /**
     * Gets priority
     * @return int
     */
    public function getPriority()
    {
        return $this->priority;
    }
  
    /**
     * Sets priority
     * @param int $priority 
     * @return $this
     */
    public function setPriority($priority)
    {
        
        $this->priority = $priority;
        return $this;
    }
    
    /**
     * Gets region
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }
  
    /**
     * Sets region
     * @param string $region 
     * @return $this
     */
    public function setRegion($region)
    {
        
        $this->region = $region;
        return $this;
    }
    
    /**
     * Gets task_groups
     * @return \Nomad\Model\TaskGroup[]
     */
    public function getTaskGroups()
    {
        return $this->task_groups;
    }
  
    /**
     * Sets task_groups
     * @param \Nomad\Model\TaskGroup[] $task_groups 
     * @return $this
     */
    public function setTaskGroups($task_groups)
    {
        
        $this->task_groups = $task_groups;
        return $this;
    }
    
    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
  
    /**
     * Sets type
     * @param string $type 
     * @return $this
     */
    public function setType($type)
    {
        $allowed_values = array("service", "system", "batch");
        if (!in_array($type, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'type', must be one of 'service', 'system', 'batch'");
        }
        $this->type = $type;
        return $this;
    }
    
    /**
     * Gets update
     * @return \Nomad\Model\UpdateStrategy
     */
    public function getUpdate()
    {
        return $this->update;
    }
  
    /**
     * Sets update
     * @param \Nomad\Model\UpdateStrategy $update 
     * @return $this
     */
    public function setUpdate($update)
    {
        
        $this->update = $update;
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
