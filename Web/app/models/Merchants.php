<?php

class Merchants extends \Phalcon\Mvc\Model
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
     * @Column(type="string", length=100, nullable=false)
     */
    protected $merchantName;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=true)
     */
    protected $contactFirstName;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=true)
     */
    protected $contactLastName;

    /**
     *
     * @var string
     * @Column(type="string", length=15, nullable=true)
     */
    protected $phoneNumber;

    /**
     *
     * @var string
     * @Column(type="string", length=15, nullable=false)
     */
    protected $mobileNumber;

    /**
     *
     * @var string
     * @Column(type="string", length=200, nullable=false)
     */
    protected $address;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    protected $talukaId;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $districtId;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $stateId;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    protected $pinCode;

    /**
     *
     * @var integer
     * @Column(type="integer", length=1, nullable=false)
     */
    protected $isActive;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    protected $addedOn;

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
     * Method to set the value of field merchantName
     *
     * @param string $merchantName
     * @return $this
     */
    public function setMerchantName($merchantName)
    {
        $this->merchantName = $merchantName;

        return $this;
    }

    /**
     * Method to set the value of field contactFirstName
     *
     * @param string $contactFirstName
     * @return $this
     */
    public function setContactFirstName($contactFirstName)
    {
        $this->contactFirstName = $contactFirstName;

        return $this;
    }

    /**
     * Method to set the value of field contactLastName
     *
     * @param string $contactLastName
     * @return $this
     */
    public function setContactLastName($contactLastName)
    {
        $this->contactLastName = $contactLastName;

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
     * @param string $mobileNumber
     * @return $this
     */
    public function setMobileNumber($mobileNumber)
    {
        $this->mobileNumber = $mobileNumber;

        return $this;
    }

    /**
     * Method to set the value of field address
     *
     * @param string $address
     * @return $this
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Method to set the value of field talukaId
     *
     * @param integer $talukaId
     * @return $this
     */
    public function setTalukaId($talukaId)
    {
        $this->talukaId = $talukaId;

        return $this;
    }

    /**
     * Method to set the value of field districtId
     *
     * @param integer $districtId
     * @return $this
     */
    public function setDistrictId($districtId)
    {
        $this->districtId = $districtId;

        return $this;
    }

    /**
     * Method to set the value of field stateId
     *
     * @param integer $stateId
     * @return $this
     */
    public function setStateId($stateId)
    {
        $this->stateId = $stateId;

        return $this;
    }

    /**
     * Method to set the value of field pinCode
     *
     * @param integer $pinCode
     * @return $this
     */
    public function setPinCode($pinCode)
    {
        $this->pinCode = $pinCode;

        return $this;
    }

    /**
     * Method to set the value of field isActive
     *
     * @param integer $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Method to set the value of field addedOn
     *
     * @param string $addedOn
     * @return $this
     */
    public function setAddedOn($addedOn)
    {
        $this->addedOn = $addedOn;

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
     * Returns the value of field merchantName
     *
     * @return string
     */
    public function getMerchantName()
    {
        return $this->merchantName;
    }

    /**
     * Returns the value of field contactFirstName
     *
     * @return string
     */
    public function getContactFirstName()
    {
        return $this->contactFirstName;
    }

    /**
     * Returns the value of field contactLastName
     *
     * @return string
     */
    public function getContactLastName()
    {
        return $this->contactLastName;
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
     * @return string
     */
    public function getMobileNumber()
    {
        return $this->mobileNumber;
    }

    /**
     * Returns the value of field address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Returns the value of field talukaId
     *
     * @return integer
     */
    public function getTalukaId()
    {
        return $this->talukaId;
    }

    /**
     * Returns the value of field districtId
     *
     * @return integer
     */
    public function getDistrictId()
    {
        return $this->districtId;
    }

    /**
     * Returns the value of field stateId
     *
     * @return integer
     */
    public function getStateId()
    {
        return $this->stateId;
    }

    /**
     * Returns the value of field pinCode
     *
     * @return integer
     */
    public function getPinCode()
    {
        return $this->pinCode;
    }

    /**
     * Returns the value of field isActive
     *
     * @return integer
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Returns the value of field addedOn
     *
     * @return string
     */
    public function getAddedOn()
    {
        return $this->addedOn;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("sams");
        $this->setSource("merchants");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'merchants';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Merchants[]|Merchants|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Merchants|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
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
            'merchant_name' => 'merchantName',
            'contact_first_name' => 'contactFirstName',
            'contact_last_name' => 'contactLastName',
            'phone_number' => 'phoneNumber',
            'mobile_number' => 'mobileNumber',
            'address' => 'address',
            'taluka_id' => 'talukaId',
            'district_id' => 'districtId',
            'state_id' => 'stateId',
            'pin_code' => 'pinCode',
            'is_active' => 'isActive',
            'added_on' => 'addedOn'
        ];
    }

}
