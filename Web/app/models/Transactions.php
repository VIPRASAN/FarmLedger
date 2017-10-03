<?php

class Transactions extends \Phalcon\Mvc\Model
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
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $farmerId;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    protected $farmerCropId;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $transactionTypeId;

    /**
     *
     * @var double
     * @Column(type="double", nullable=false)
     */
    protected $transactionAmount;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    protected $transactionDatetime;

    /**
     *
     * @var string
     * @Column(type="string", length=500, nullable=false)
     */
    protected $memo;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $addedBy;

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
     * Method to set the value of field farmerId
     *
     * @param integer $farmerId
     * @return $this
     */
    public function setFarmerId($farmerId)
    {
        $this->farmerId = $farmerId;

        return $this;
    }

    /**
     * Method to set the value of field farmerCropId
     *
     * @param integer $farmerCropId
     * @return $this
     */
    public function setFarmerCropId($farmerCropId)
    {
        $this->farmerCropId = $farmerCropId;

        return $this;
    }

    /**
     * Method to set the value of field transactionTypeId
     *
     * @param integer $transactionTypeId
     * @return $this
     */
    public function setTransactionTypeId($transactionTypeId)
    {
        $this->transactionTypeId = $transactionTypeId;

        return $this;
    }

    /**
     * Method to set the value of field transactionAmount
     *
     * @param double $transactionAmount
     * @return $this
     */
    public function setTransactionAmount($transactionAmount)
    {
        $this->transactionAmount = $transactionAmount;

        return $this;
    }

    /**
     * Method to set the value of field transactionDatetime
     *
     * @param string $transactionDatetime
     * @return $this
     */
    public function setTransactionDatetime($transactionDatetime)
    {
        $this->transactionDatetime = $transactionDatetime;

        return $this;
    }

    /**
     * Method to set the value of field memo
     *
     * @param string $memo
     * @return $this
     */
    public function setMemo($memo)
    {
        $this->memo = $memo;

        return $this;
    }

    /**
     * Method to set the value of field addedBy
     *
     * @param integer $addedBy
     * @return $this
     */
    public function setAddedBy($addedBy)
    {
        $this->addedBy = $addedBy;

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
     * Returns the value of field farmerId
     *
     * @return integer
     */
    public function getFarmerId()
    {
        return $this->farmerId;
    }

    /**
     * Returns the value of field farmerCropId
     *
     * @return integer
     */
    public function getFarmerCropId()
    {
        return $this->farmerCropId;
    }

    /**
     * Returns the value of field transactionTypeId
     *
     * @return integer
     */
    public function getTransactionTypeId()
    {
        return $this->transactionTypeId;
    }

    /**
     * Returns the value of field transactionAmount
     *
     * @return double
     */
    public function getTransactionAmount()
    {
        return $this->transactionAmount;
    }

    /**
     * Returns the value of field transactionDatetime
     *
     * @return string
     */
    public function getTransactionDatetime()
    {
        return $this->transactionDatetime;
    }

    /**
     * Returns the value of field memo
     *
     * @return string
     */
    public function getMemo()
    {
        return $this->memo;
    }

    /**
     * Returns the value of field addedBy
     *
     * @return integer
     */
    public function getAddedBy()
    {
        return $this->addedBy;
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
        $this->setSource("transactions");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'transactions';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Transactions[]|Transactions|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Transactions|\Phalcon\Mvc\Model\ResultInterface
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
            'farmer_id' => 'farmerId',
            'farmer_crop_id' => 'farmerCropId',
            'transaction_type_id' => 'transactionTypeId',
            'transaction_amount' => 'transactionAmount',
            'transaction_datetime' => 'transactionDatetime',
            'memo' => 'memo',
            'added_by' => 'addedBy',
            'added_on' => 'addedOn'
        ];
    }

}
