<?php

class Departments extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $departmentID;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=false)
     */
    protected $departmentName;

    /**
     * Method to set the value of field departmentID
     *
     * @param integer $departmentID
     * @return $this
     */
    public function setDepartmentID($departmentID)
    {
        $this->departmentID = $departmentID;

        return $this;
    }

    /**
     * Method to set the value of field departmentName
     *
     * @param string $departmentName
     * @return $this
     */
    public function setDepartmentName($departmentName)
    {
        $this->departmentName = $departmentName;

        return $this;
    }

    /**
     * Returns the value of field departmentID
     *
     * @return integer
     */
    public function getDepartmentID()
    {
        return $this->departmentID;
    }

    /**
     * Returns the value of field departmentName
     *
     * @return string
     */
    public function getDepartmentName()
    {
        return $this->departmentName;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('departmentID', 'Users', 'userDepartmentID', ['alias' => 'Users']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'departments';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Departments[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Departments
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
