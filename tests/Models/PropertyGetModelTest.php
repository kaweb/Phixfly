<?php

namespace Kaweb\Phixfly\Models;

class PropertyGetModelTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var int
     */
    protected $id;
    
    /**
     * @var int
     */
    protected $blockId;
    
    /**
     * @var string
     */
    protected $externalPropertyRef;
    
    /**
     * @var int
     */
    protected $propertyAddressId;
    
    /**
     * @var AddressModelTestTest
     */
    protected $address;
    
    /**
     * @var \DateTime
     */
    protected $updateDate;
    
    /**
     * @var AssignedAgentModelTestTest
     */
    protected $assignedAgent;

    /**
     * PropertyGetModel constructor.
     * http://api-docs.fixflo.com/#resources-property
     *
     * @param int $id
     * @param int $blockId
     * @param string $externalPropertyRef
     * @param int $propertyAddressId
     * @param AddressModelTestTest $address
     * @param \DateTime $updateDate
     * @param AssignedAgentModelTestTest $assignedAgent
     */
    public function __construct($id, $blockId, $externalPropertyRef, $propertyAddressId, AddressModelTestTest $address, \DateTime $updateDate, AssignedAgentModelTestTest $assignedAgent)
    {
        $this->id = $id;
        $this->blockId = $blockId;
        $this->externalPropertyRef = $externalPropertyRef;
        $this->propertyAddressId = $propertyAddressId;
        $this->address = $address;
        $this->updateDate = $updateDate;
        $this->assignedAgent = $assignedAgent;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getBlockId()
    {
        return $this->blockId;
    }

    /**
     * @param int $blockId
     */
    public function setBlockId($blockId)
    {
        $this->blockId = $blockId;
    }

    /**
     * @return string
     */
    public function getExternalPropertyRef()
    {
        return $this->externalPropertyRef;
    }

    /**
     * @param string $externalPropertyRef
     */
    public function setExternalPropertyRef($externalPropertyRef)
    {
        $this->externalPropertyRef = $externalPropertyRef;
    }

    /**
     * @return int
     */
    public function getPropertyAddressId()
    {
        return $this->propertyAddressId;
    }

    /**
     * @param int $propertyAddressId
     */
    public function setPropertyAddressId($propertyAddressId)
    {
        $this->propertyAddressId = $propertyAddressId;
    }

    /**
     * @return AddressModelTestTest
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param AddressModelTestTest $address
     */
    public function setAddress(AddressModelTestTest $address)
    {
        $this->address = $address;
    }

    /**
     * @return \DateTime
     */
    public function getUpdateDate()
    {
        return $this->updateDate;
    }

    /**
     * @param \DateTime $updateDate
     */
    public function setUpdateDate(\DateTime $updateDate)
    {
        $this->updateDate = $updateDate;
    }

    /**
     * @return AssignedAgentModelTestTest
     */
    public function getAssignedAgent()
    {
        return $this->assignedAgent;
    }

    /**
     * @param AssignedAgentModelTestTest $assignedAgent
     */
    public function setAssignedAgent(AssignedAgentModelTestTest $assignedAgent)
    {
        $this->assignedAgent = $assignedAgent;
    }
}