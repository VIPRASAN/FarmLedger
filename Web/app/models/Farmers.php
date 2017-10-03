<?php

class Farmers extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $id;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=false)
     */
    protected $firstName;

    /**
     *
     * @var string
     * @Column(type="string", length=20, nullable=true)
     */
    protected $middleName;

    /**
     *
     * @var string
     * @Column(type="string", length=20, nullable=false)
     */
    protected $lastName;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    protected $birthDate;

    /**
     *
     * @var string
     * @Column(type="string", length=20, nullable=true)
     */
    protected $panNumber;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    protected $aadharNumber;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=true)
     */
    protected $emailAddress;

    /**
     *
     * @var string
     * @Column(type="string", length=15, nullable=true)
     */
    protected $phoneNumber;

    /**
     *
     * @var integer
     * @Column(type="integer", length=10, nullable=true)
     */
    protected $mobileNumber;

    /**
     *
     * @var string
     * @Column(type="string", length=20, nullable=false)
     */
    protected $username;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=false)
     */
    protected $passwordEncrypted;

    /**
     * Method to set the value of field id
     *
     * @param integer $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Method to set the value of field firstName
     *
     * @param string $firstName
     * @return $this
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Method to set the value of field middleName
     *
     * @param string $middleName
     * @return $this
     */
    public function setMiddleName($middleName)
    {
        $this->middleName = $middleName;

        return $this;
    }

    /**
     * Method to set the value of field lastName
     *
     * @param string $lastName
     * @return $this
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Method to set the value of field birthDate
     *
     * @param string $birthDate
     * @return $this
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * Method to set the value of field panNumber
     *
     * @param string $panNumber
     * @return $this
     */
    public function setPanNumber($panNumber)
    {
        $this->panNumber = $panNumber;

        return $this;
    }

    /**
     * Method to set the value of field aadharNumber
     *
     * @param integer $aadharNumber
     * @return $this
     */
    public function setAadharNumber($aadharNumber)
    {
        $this->aadharNumber = $aadharNumber;

        return $this;
    }

    /**
     * Method to set the value of field emailAddress
     *
     * @param string $emailAddress
     * @return $this
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;

        return $this;
    }

    /**
     * Method to set the value of field phoneNumber
     *
     * @param string $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Method to set the value of field mobileNumber
     *
     * @param integer $mobileNumber
     * @return $this
     */
    public function setMobileNumber($mobileNumber)
    {
        $this->mobileNumber = $mobileNumber;

        return $this;
    }

    /**
     * Method to set the value of field username
     *
     * @param string $username
     * @return $this
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Method to set the value of field passwordEncrypted
     *
     * @param string $passwordEncrypted
     * @return $this
     */
    public function setPasswordEncrypted($passwordEncrypted)
    {
        $this->passwordEncrypted = $passwordEncrypted;

        return $this;
    }

    /**
     * Returns the value of field id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Returns the value of field firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Returns the value of field middleName
     *
     * @return string
     */
    public function getMiddleName()
    {
        return $this->middleName;
    }

    /**
     * Returns the value of field lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Returns the value of field birthDate
     *
     * @return string
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Returns the value of field panNumber
     *
     * @return string
     */
    public function getPanNumber()
    {
        return $this->panNumber;
    }

    /**
     * Returns the value of field aadharNumber
     *
     * @return integer
     */
    public function getAadharNumber()
    {
        return $this->aadharNumber;
    }

    /**
     * Returns the value of field emailAddress
     *
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * Returns the value of field phoneNumber
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Returns the value of field mobileNumber
     *
     * @return integer
     */
    public function getMobileNumber()
    {
        return $this->mobileNumber;
    }

    /**
     * Returns the value of field username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Returns the value of field passwordEncrypted
     *
     * @return string
     */
    public function getPasswordEncrypted()
    {
        return $this->passwordEncrypted;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("sams");
        $this->setSource("farmers");
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Farmers[]|Farmers|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Farmers|\Phalcon\Mvc\Model\ResultInterface
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
        return 'farmers';
    }

    /**
     * Independent Column Mapping.
     * Keys are the real names in the table and the values their names in the application
     *
     * @return array
     */
    public function columnMap()
    {
        return [
            'id' => 'id',
            'first_name' => 'firstName',
            'middle_name' => 'middleName',
            'last_name' => 'lastName',
            'birth_date' => 'birthDate',
            'pan_number' => 'panNumber',
            'aadhar_number' => 'aadharNumber',
            'email_address' => 'emailAddress',
            'phone_number' => 'phoneNumber',
            'mobile_number' => 'mobileNumber',
            'username' => 'username',
            'password_encrypted' => 'passwordEncrypted'
        ];
    }

}
