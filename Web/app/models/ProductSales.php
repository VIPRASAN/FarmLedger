<?php

class ProductSales extends \Phalcon\Mvc\Model
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
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $farmerDropId;

    /**
     *
     * @var double
     * @Column(type="double", nullable=false)
     */
    protected $quantity;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $quantityUnitId;

    /**
     *
     * @var double
     * @Column(type="double", nullable=true)
     */
    protected $ratePerUnit;

    /**
     *
     * @var double
     * @Column(type="double", nullable=true)
     */
    protected $totalAmount;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    protected $merchantId;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    protected $transactionDate;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    protected $memo;

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
     * Method to set the value of field farmerDropId
     *
     * @param integer $farmerDropId
     * @return $this
     */
    public function setFarmerDropId($farmerDropId)
    {
        $this->farmerDropId = $farmerDropId;

        return $this;
    }

    /**
     * Method to set the value of field quantity
     *
     * @param double $quantity
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Method to set the value of field quantityUnitId
     *
     * @param integer $quantityUnitId
     * @return $this
     */
    public function setQuantityUnitId($quantityUnitId)
    {
        $this->quantityUnitId = $quantityUnitId;

        return $this;
    }

    /**
     * Method to set the value of field ratePerUnit
     *
     * @param double $ratePerUnit
     * @return $this
     */
    public function setRatePerUnit($ratePerUnit)
    {
        $this->ratePerUnit = $ratePerUnit;

        return $this;
    }

    /**
     * Method to set the value of field totalAmount
     *
     * @param double $totalAmount
     * @return $this
     */
    public function setTotalAmount($totalAmount)
    {
        $this->totalAmount = $totalAmount;

        return $this;
    }

    /**
     * Method to set the value of field merchantId
     *
     * @param integer $merchantId
     * @return $this
     */
    public function setMerchantId($merchantId)
    {
        $this->merchantId = $merchantId;

        return $this;
    }

    /**
     * Method to set the value of field transactionDate
     *
     * @param string $transactionDate
     * @return $this
     */
    public function setTransactionDate($transactionDate)
    {
        $this->transactionDate = $transactionDate;

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
     * Returns the value of field farmerDropId
     *
     * @return integer
     */
    public function getFarmerDropId()
    {
        return $this->farmerDropId;
    }

    /**
     * Returns the value of field quantity
     *
     * @return double
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Returns the value of field quantityUnitId
     *
     * @return integer
     */
    public function getQuantityUnitId()
    {
        return $this->quantityUnitId;
    }

    /**
     * Returns the value of field ratePerUnit
     *
     * @return double
     */
    public function getRatePerUnit()
    {
        return $this->ratePerUnit;
    }

    /**
     * Returns the value of field totalAmount
     *
     * @return double
     */
    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

    /**
     * Returns the value of field merchantId
     *
     * @return integer
     */
    public function getMerchantId()
    {
        return $this->merchantId;
    }

    /**
     * Returns the value of field transactionDate
     *
     * @return string
     */
    public function getTransactionDate()
    {
        return $this->transactionDate;
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
        $this->setSource("product_sales");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'product_sales';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return ProductSales[]|ProductSales|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return ProductSales|\Phalcon\Mvc\Model\ResultInterface
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
            'farmer_drop_id' => 'farmerDropId',
            'quantity' => 'quantity',
            'quantity_unit_id' => 'quantityUnitId',
            'rate_per_unit' => 'ratePerUnit',
            'total_amount' => 'totalAmount',
            'merchant_id' => 'merchantId',
            'transaction_date' => 'transactionDate',
            'memo' => 'memo',
            'added_on' => 'addedOn'
        ];
    }

}
