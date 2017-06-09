<?php

class Users extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $userID;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=false)
     */
    protected $userUser;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=false)
     */
    protected $userName;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $userDepartmentID;

    /**
     *
     * @var string
     * @Column(type="string", length=128, nullable=true)
     */
    protected $userPassword;

    /**
     *
     * @var string
     * @Column(type="string", length=128, nullable=true)
     */
    protected $userLastKnownPassword;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    protected $userEmail;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    protected $userPicturePath;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    protected $userCreationDate;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    protected $userLastMod;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $userRoleID;

    /**
     *
     * @var integer
     * @Column(type="integer", length=1, nullable=false)
     */
    protected $userStatus;    

    /**
     * Method to set the value of field userUser
     *
     * @param string $userUser
     * @return $this
     */
    public function setUserUser($userUser)
    {
        $this->userUser = $userUser;

        return $this;
    }

    /**
     * Method to set the value of field userName
     *
     * @param string $userName
     * @return $this
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;

        return $this;
    }

    /**
     * Method to set the value of field userDepartmentID
     *
     * @param integer $userDepartmentID
     * @return $this
     */
    public function setUserDepartmentID($userDepartmentID)
    {
        $this->userDepartmentID = $userDepartmentID;

        return $this;
    }

    /**
     * Method to set the value of field userPassword
     *
     * @param string $userPassword
     * @return $this
     */
    public function setUserPassword($userPassword)
    {
        $this->userPassword = $userPassword;

        return $this;
    }

    /**
     * Method to set the value of field userLastKnownPassword
     *
     * @param string $userLastKnownPassword
     * @return $this
     */
    public function setUserLastKnownPassword($userLastKnownPassword)
    {
        $this->userLastKnownPassword = $userLastKnownPassword;

        return $this;
    }

    /**
     * Method to set the value of field userEmail
     *
     * @param string $userEmail
     * @return $this
     */
    public function setUserEmail($userEmail)
    {
        $this->userEmail = $userEmail;

        return $this;
    }

    /**
     * Method to set the value of field userPicturePath
     *
     * @param string $userPicturePath
     * @return $this
     */
    public function setUserPicturePath($userPicturePath)
    {
        $this->userPicturePath = $userPicturePath;

        return $this;
    }    

    /**
     * Method to set the value of field userRoleID
     *
     * @param integer $userRoleID
     * @return $this
     */
    public function setUserRoleID($userRoleID)
    {
        $this->userRoleID = $userRoleID;

        return $this;
    }

    /**
     * Method to set the value of field userStatus
     *
     * @param integer $userStatus
     * @return $this
     */
    public function setUserStatus($userStatus)
    {
        $this->userStatus = $userStatus;

        return $this;
    }

    /**
     * Returns the value of field userID
     *
     * @return integer
     */
    public function getUserID()
    {
        return $this->userID;
    }

    /**
     * Returns the value of field userUser
     *
     * @return string
     */
    public function getUserUser()
    {
        return $this->userUser;
    }

    /**
     * Returns the value of field userName
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Returns the value of field userDepartmentID
     *
     * @return integer
     */
    public function getUserDepartmentID()
    {
        return $this->userDepartmentID;
    }

    /**
     * Returns the value of field userPassword
     *
     * @return string
     */
    public function getUserPassword()
    {
        return $this->userPassword;
    }

    /**
     * Returns the value of field userLastKnownPassword
     *
     * @return string
     */
    public function getUserLastKnownPassword()
    {
        return $this->userLastKnownPassword;
    }

    /**
     * Returns the value of field userEmail
     *
     * @return string
     */
    public function getUserEmail()
    {
        return $this->userEmail;
    }

    /**
     * Returns the value of field userPicturePath
     *
     * @return string
     */
    public function getUserPicturePath()
    {
        return $this->userPicturePath;
    }

    /**
     * Returns the value of field userCreationDate
     *
     * @return string
     */
    public function getUserCreationDate()
    {
        return $this->userCreationDate;
    }

    /**
     * Returns the value of field userLastMod
     *
     * @return string
     */
    public function getUserLastMod()
    {
        return $this->userLastMod;
    }

    /**
     * Returns the value of field userRoleID
     *
     * @return integer
     */
    public function getUserRoleID()
    {
        return $this->userRoleID;
    }

    /**
     * Returns the value of field userStatus
     *
     * @return integer
     */
    public function getUserStatus()
    {
        return $this->userStatus;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("invManager");
        $this->hasMany('userID', 'Allocations', 'allocationUserID', ['alias' => 'Allocations']);
        $this->hasMany('userID', 'LoginAttempts', 'loginAttemptUserID', ['alias' => 'LoginAttempts']);
        $this->hasMany('userID', 'PasswordRecoveries', 'userID', ['alias' => 'PasswordRecoveries']);
        $this->belongsTo('userDepartmentID', '\Departments', 'departmentID', ['alias' => 'Departments']);
        $this->belongsTo('userRoleID', '\Roles', 'roleID', ['alias' => 'Roles']);
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Users[]|Users
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Users
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
        return 'users';
    }

}
