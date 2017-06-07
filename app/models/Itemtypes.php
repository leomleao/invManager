<?php

class Itemtypes extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $itemTypeID;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=false)
     */
    protected $itemTypeDescription;

    /**
     * Method to set the value of field itemTypeID
     *
     * @param integer $itemTypeID
     * @return $this
     */
    public function setItemTypeID($itemTypeID)
    {
        $this->itemTypeID = $itemTypeID;

        return $this;
    }

    /**
     * Method to set the value of field itemTypeDescription
     *
     * @param string $itemTypeDescription
     * @return $this
     */
    public function setItemTypeDescription($itemTypeDescription)
    {
        $this->itemTypeDescription = $itemTypeDescription;

        return $this;
    }

    /**
     * Returns the value of field itemTypeID
     *
     * @return integer
     */
    public function getItemTypeID()
    {
        return $this->itemTypeID;
    }

    /**
     * Returns the value of field itemTypeDescription
     *
     * @return string
     */
    public function getItemTypeDescription()
    {
        return $this->itemTypeDescription;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("invManager");
        $this->hasMany('itemTypeID', 'Itens', 'itemTypeID', ['alias' => 'Itens']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'itemTypes';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Itemtypes[]|Itemtypes
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Itemtypes
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
