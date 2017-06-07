<?php

class Allocations extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $allocationID;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $allocationItemID;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $allocationUserID;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    protected $allocationDate;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    protected $allocationInsertionDate;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    protected $allocationLastMod;

    /**
     * Method to set the value of field allocationID
     *
     * @param integer $allocationID
     * @return $this
     */
    public function setAllocationID($allocationID)
    {
        $this->allocationID = $allocationID;

        return $this;
    }

    /**
     * Method to set the value of field allocationItemID
     *
     * @param integer $allocationItemID
     * @return $this
     */
    public function setAllocationItemID($allocationItemID)
    {
        $this->allocationItemID = $allocationItemID;

        return $this;
    }

    /**
     * Method to set the value of field allocationUserID
     *
     * @param integer $allocationUserID
     * @return $this
     */
    public function setAllocationUserID($allocationUserID)
    {
        $this->allocationUserID = $allocationUserID;

        return $this;
    }

    /**
     * Method to set the value of field allocationDate
     *
     * @param string $allocationDate
     * @return $this
     */
    public function setAllocationDate($allocationDate)
    {
        $this->allocationDate = $allocationDate;

        return $this;
    }

    /**
     * Method to set the value of field allocationInsertionDate
     *
     * @param string $allocationInsertionDate
     * @return $this
     */
    public function setAllocationInsertionDate($allocationInsertionDate)
    {
        $this->allocationInsertionDate = $allocationInsertionDate;

        return $this;
    }

    /**
     * Method to set the value of field allocationLastMod
     *
     * @param string $allocationLastMod
     * @return $this
     */
    public function setAllocationLastMod($allocationLastMod)
    {
        $this->allocationLastMod = $allocationLastMod;

        return $this;
    }

    /**
     * Returns the value of field allocationID
     *
     * @return integer
     */
    public function getAllocationID()
    {
        return $this->allocationID;
    }

    /**
     * Returns the value of field allocationItemID
     *
     * @return integer
     */
    public function getAllocationItemID()
    {
        return $this->allocationItemID;
    }

    /**
     * Returns the value of field allocationUserID
     *
     * @return integer
     */
    public function getAllocationUserID()
    {
        return $this->allocationUserID;
    }

    /**
     * Returns the value of field allocationDate
     *
     * @return string
     */
    public function getAllocationDate()
    {
        return $this->allocationDate;
    }

    /**
     * Returns the value of field allocationInsertionDate
     *
     * @return string
     */
    public function getAllocationInsertionDate()
    {
        return $this->allocationInsertionDate;
    }

    /**
     * Returns the value of field allocationLastMod
     *
     * @return string
     */
    public function getAllocationLastMod()
    {
        return $this->allocationLastMod;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("invManager");
        $this->belongsTo('allocationItemID', '\Itens', 'itemID', ['alias' => 'Itens']);
        $this->belongsTo('allocationUserID', '\Users', 'userID', ['alias' => 'Users']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'allocations';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Allocations[]|Allocations
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Allocations
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
