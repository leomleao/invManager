<?php

class Items extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $itemID;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $itemTypeID;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $itemDescription;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    protected $itemSpec;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    protected $itemName;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $itemInvoiceNumber;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    protected $itemInventoryCode;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    protected $itemPrice;

    /**
     *
     * @var string
     * @Column(type="string", length=90, nullable=true)
     */
    protected $itemPicturePath;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    protected $itemPurchaseDate;

    /**
     *
     * @var string
     * @Column(type="string", length=12, nullable=true)
     */
    protected $itemMAC;

    /**
     *
     * @var string
     * @Column(type="string", length=48, nullable=true)
     */
    protected $itemBitLockerKey;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    protected $itemSerialNumber;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    protected $itemPartNumber;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    protected $itemIMEI;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    protected $itemInsertionDate;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    protected $itemLastMod;

    /**
     * Method to set the value of field itemID
     *
     * @param integer $itemID
     * @return $this
     */
    public function setItemID($itemID)
    {
        $this->itemID = $itemID;

        return $this;
    }

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
     * Method to set the value of field itemDescription
     *
     * @param integer $itemDescription
     * @return $this
     */
    public function setItemDescription($itemDescription)
    {
        $this->itemDescription = $itemDescription;

        return $this;
    }

    /**
     * Method to set the value of field itemSpec
     *
     * @param integer $itemSpec
     * @return $this
     */
    public function setItemSpec($itemSpec)
    {
        $this->itemSpec = $itemSpec;

        return $this;
    }

    /**
     * Method to set the value of field itemName
     *
     * @param integer $itemName
     * @return $this
     */
    public function setItemName($itemName)
    {
        $this->itemName = $itemName;

        return $this;
    }

    /**
     * Method to set the value of field itemInvoiceNumber
     *
     * @param integer $itemInvoiceNumber
     * @return $this
     */
    public function setItemInvoiceNumber($itemInvoiceNumber)
    {
        $this->itemInvoiceNumber = $itemInvoiceNumber;

        return $this;
    }

    /**
     * Method to set the value of field itemInventoryCode
     *
     * @param integer $itemInventoryCode
     * @return $this
     */
    public function setItemInventoryCode($itemInventoryCode)
    {
        $this->itemInventoryCode = $itemInventoryCode;

        return $this;
    }

    /**
     * Method to set the value of field itemPrice
     *
     * @param string $itemPrice
     * @return $this
     */
    public function setItemPrice($itemPrice)
    {
        $this->itemPrice = $itemPrice;

        return $this;
    }

    /**
     * Method to set the value of field itemPicturePath
     *
     * @param string $itemPicturePath
     * @return $this
     */
    public function setItemPicturePath($itemPicturePath)
    {
        $this->itemPicturePath = $itemPicturePath;

        return $this;
    }

    /**
     * Method to set the value of field itemPurchaseDate
     *
     * @param string $itemPurchaseDate
     * @return $this
     */
    public function setItemPurchaseDate($itemPurchaseDate)
    {
        $this->itemPurchaseDate = $itemPurchaseDate;

        return $this;
    }

    /**
     * Method to set the value of field itemMAC
     *
     * @param string $itemMAC
     * @return $this
     */
    public function setItemMAC($itemMAC)
    {
        $this->itemMAC = $itemMAC;

        return $this;
    }

    /**
     * Method to set the value of field itemBitLockerKey
     *
     * @param string $itemBitLockerKey
     * @return $this
     */
    public function setItemBitLockerKey($itemBitLockerKey)
    {
        $this->itemBitLockerKey = $itemBitLockerKey;

        return $this;
    }

    /**
     * Method to set the value of field itemSerialNumber
     *
     * @param string $itemSerialNumber
     * @return $this
     */
    public function setItemSerialNumber($itemSerialNumber)
    {
        $this->itemSerialNumber = $itemSerialNumber;

        return $this;
    }

    /**
     * Method to set the value of field itemPartNumber
     *
     * @param string $itemPartNumber
     * @return $this
     */
    public function setItemPartNumber($itemPartNumber)
    {
        $this->itemPartNumber = $itemPartNumber;

        return $this;
    }

    /**
     * Method to set the value of field itemIMEI
     *
     * @param string $itemIMEI
     * @return $this
     */
    public function setItemIMEI($itemIMEI)
    {
        $this->itemIMEI = $itemIMEI;

        return $this;
    }

    /**
     * Method to set the value of field itemInsertionDate
     *
     * @param string $itemInsertionDate
     * @return $this
     */
    public function setItemInsertionDate($itemInsertionDate)
    {
        $this->itemInsertionDate = $itemInsertionDate;

        return $this;
    }

    /**
     * Method to set the value of field itemLastMod
     *
     * @param string $itemLastMod
     * @return $this
     */
    public function setItemLastMod($itemLastMod)
    {
        $this->itemLastMod = $itemLastMod;

        return $this;
    }

    /**
     * Returns the value of field itemID
     *
     * @return integer
     */
    public function getItemID()
    {
        return $this->itemID;
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
     * Returns the value of field itemDescription
     *
     * @return integer
     */
    public function getItemDescription()
    {
        return $this->itemDescription;
    }

    /**
     * Returns the value of field itemSpec
     *
     * @return integer
     */
    public function getItemSpec()
    {
        return $this->itemSpec;
    }

    /**
     * Returns the value of field itemName
     *
     * @return integer
     */
    public function getItemName()
    {
        return $this->itemName;
    }

    /**
     * Returns the value of field itemInvoiceNumber
     *
     * @return integer
     */
    public function getItemInvoiceNumber()
    {
        return $this->itemInvoiceNumber;
    }

    /**
     * Returns the value of field itemInventoryCode
     *
     * @return integer
     */
    public function getItemInventoryCode()
    {
        return $this->itemInventoryCode;
    }

    /**
     * Returns the value of field itemPrice
     *
     * @return string
     */
    public function getItemPrice()
    {
        return $this->itemPrice;
    }

    /**
     * Returns the value of field itemPicturePath
     *
     * @return string
     */
    public function getItemPicturePath()
    {
        return $this->itemPicturePath;
    }

    /**
     * Returns the value of field itemPurchaseDate
     *
     * @return string
     */
    public function getItemPurchaseDate()
    {
        return $this->itemPurchaseDate;
    }

    /**
     * Returns the value of field itemMAC
     *
     * @return string
     */
    public function getItemMAC()
    {
        return $this->itemMAC;
    }

    /**
     * Returns the value of field itemBitLockerKey
     *
     * @return string
     */
    public function getItemBitLockerKey()
    {
        return $this->itemBitLockerKey;
    }

    /**
     * Returns the value of field itemSerialNumber
     *
     * @return string
     */
    public function getItemSerialNumber()
    {
        return $this->itemSerialNumber;
    }

    /**
     * Returns the value of field itemPartNumber
     *
     * @return string
     */
    public function getItemPartNumber()
    {
        return $this->itemPartNumber;
    }

    /**
     * Returns the value of field itemIMEI
     *
     * @return string
     */
    public function getItemIMEI()
    {
        return $this->itemIMEI;
    }

    /**
     * Returns the value of field itemInsertionDate
     *
     * @return string
     */
    public function getItemInsertionDate()
    {
        return $this->itemInsertionDate;
    }

    /**
     * Returns the value of field itemLastMod
     *
     * @return string
     */
    public function getItemLastMod()
    {
        return $this->itemLastMod;
    }

    /**
     * Method to set the value of field itemAllocatedToUserID
     *
     * @param integer $itemAllocatedToUserID
     * @return $this
     */
    public function setItemAllocatedToUserID($itemAllocatedToUserID)
    {
        $this->itemAllocatedToUserID = $itemAllocatedToUserID;

        return $this;
    }

    /**
     * Returns the value of field itemAllocatedToUserID
     *
     * @return integer
     */
    public function getItemAllocatedToUserID()
    {
        return $this->itemAllocatedToUserID;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("invManager");
        $this->hasMany('itemID', 'Allocations', 'allocationItemID', ['alias' => 'Allocations']);
        $this->belongsTo('itemTypeID', '\ItemTypes', 'itemTypeID', ['alias' => 'ItemTypes']);
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Items[]|Items
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Items
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'items';
    }

}
