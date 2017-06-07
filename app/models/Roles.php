<?php

class Roles extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $roleID;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    protected $roleDesc;

    /**
     * Method to set the value of field roleID
     *
     * @param integer $roleID
     * @return $this
     */
    public function setRoleID($roleID)
    {
        $this->roleID = $roleID;

        return $this;
    }

    /**
     * Method to set the value of field roleDesc
     *
     * @param string $roleDesc
     * @return $this
     */
    public function setRoleDesc($roleDesc)
    {
        $this->roleDesc = $roleDesc;

        return $this;
    }

    /**
     * Returns the value of field roleID
     *
     * @return integer
     */
    public function getRoleID()
    {
        return $this->roleID;
    }

    /**
     * Returns the value of field roleDesc
     *
     * @return string
     */
    public function getRoleDesc()
    {
        return $this->roleDesc;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("invManager");
        $this->hasMany('roleID', 'Users', 'userRoleID', ['alias' => 'Users']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'roles';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Roles[]|Roles
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Roles
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
