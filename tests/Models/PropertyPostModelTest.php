<?php

namespace Kaweb\Phixfly\Models;

class PropertyPostModelTest extends \PHPUnit\Framework\TestCase
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
     * @var string
     */
    protected $keyReference;

    /**
     * @var int
     */
    protected $propertyAddressId;

    /**
     * @var AddressModelTestTest
     */
    protected $address;

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
     * @param string $keyReference
     * @param int $propertyAddressId
     * @param AddressModelTestTest $address
     * @param AssignedAgentModelTestTest $assignedAgent
     */
    public function __construct($id, $blockId, $externalPropertyRef, $keyReference, $propertyAddressId, AddressModelTestTest $address, AssignedAgentModelTestTest $assignedAgent)
    {
        $this->id = $id;
        $this->blockId = $blockId;
        $this->externalPropertyRef = $externalPropertyRef;
        $this->keyReference = $keyReference;
        $this->propertyAddressId = $propertyAddressId;
        $this->address = $address;
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
    public function setId($id)
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
     * @return string
     */
    public function getKeyReference()
    {
        return $this->keyReference;
    }

    /**
     * @param string $keyReference
     */
    public function setKeyReference($keyReference)
    {
        $this->keyReference = $keyReference;
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