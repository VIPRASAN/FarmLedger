<?php

class FarmerCrops extends \Phalcon\Mvc\Model
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
    protected $cropId;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=false)
     */
    protected $name;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    protected $fromDate;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    protected $toDate;

    /**
     *
     * @var double
     * @Column(type="double", nullable=false)
     */
    protected $expense;

    /**
     *
     * @var double
     * @Column(type="double", nullable=false)
     */
    protected $income;

    /**
     *
     * @var double
     * @Column(type="double", nullable=true)
     */
    protected $profit;

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
     * Method to set the value of field cropId
     *
     * @param integer $cropId
     * @return $this
     */
    public function setCropId($cropId)
    {
        $this->cropId = $cropId;

        return $this;
    }

    /**
     * Method to set the value of field name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Method to set the value of field fromDate
     *
     * @param string $fromDate
     * @return $this
     */
    public function setFromDate($fromDate)
    {
        $this->fromDate = $fromDate;

        return $this;
    }

    /**
     * Method to set the value of field toDate
     *
     * @param string $toDate
     * @return $this
     */
    public function setToDate($toDate)
    {
        $this->toDate = $toDate;

        return $this;
    }

    /**
     * Method to set the value of field expense
     *
     * @param double $expense
     * @return $this
     */
    public function setExpense($expense)
    {
        $this->expense = $expense;

        return $this;
    }

    /**
     * Method to set the value of field income
     *
     * @param double $income
     * @return $this
     */
    public function setIncome($income)
    {
        $this->income = $income;

        return $this;
    }

    /**
     * Method to set the value of field profit
     *
     * @param double $profit
     * @return $this
     */
    public function setProfit($profit)
    {
        $this->profit = $profit;

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
     * Returns the value of field cropId
     *
     * @return integer
     */
    public function getCropId()
    {
        return $this->cropId;
    }

    /**
     * Returns the value of field name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Returns the value of field fromDate
     *
     * @return string
     */
    public function getFromDate()
    {
        return $this->fromDate;
    }

    /**
     * Returns the value of field toDate
     *
     * @return string
     */
    public function getToDate()
    {
        return $this->toDate;
    }

    /**
     * Returns the value of field expense
     *
     * @return double
     */
    public function getExpense()
    {
        return $this->expense;
    }

    /**
     * Returns the value of field income
     *
     * @return double
     */
    public function getIncome()
    {
        return $this->income;
    }

    /**
     * Returns the value of field profit
     *
     * @return double
     */
    public function getProfit()
    {
        return $this->profit;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("sams");
        $this->setSource("farmer_crops");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'farmer_crops';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return FarmerCrops[]|FarmerCrops|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return FarmerCrops|\Phalcon\Mvc\Model\ResultInterface
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
            'crop_id' => 'cropId',
            'name' => 'name',
            'from_date' => 'fromDate',
            'to_date' => 'toDate',
            'expense' => 'expense',
            'income' => 'income',
            'profit' => 'profit'
        ];
    }

}
