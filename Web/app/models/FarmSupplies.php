<?php

class FarmSupplies extends \Phalcon\Mvc\Model
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
    protected $vendorId;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    protected $farmerCropId;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=false)
     */
    protected $name;

    /**
     *
     * @var double
     * @Column(type="double", nullable=false)
     */
    protected $units;

    /**
     *
     * @var double
     * @Column(type="double", nullable=false)
     */
    protected $cost;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    protected $boughtOn;

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
     * Method to set the value of field vendorId
     *
     * @param integer $vendorId
     * @return $this
     */
    public function setVendorId($vendorId)
    {
        $this->vendorId = $vendorId;

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
     * Method to set the value of field units
     *
     * @param double $units
     * @return $this
     */
    public function setUnits($units)
    {
        $this->units = $units;

        return $this;
    }

    /**
     * Method to set the value of field cost
     *
     * @param double $cost
     * @return $this
     */
    public function setCost($cost)
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * Method to set the value of field boughtOn
     *
     * @param string $boughtOn
     * @return $this
     */
    public function setBoughtOn($boughtOn)
    {
        $this->boughtOn = $boughtOn;

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
     * Returns the value of field vendorId
     *
     * @return integer
     */
    public function getVendorId()
    {
        return $this->vendorId;
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
     * Returns the value of field name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Returns the value of field units
     *
     * @return double
     */
    public function getUnits()
    {
        return $this->units;
    }

    /**
     * Returns the value of field cost
     *
     * @return double
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * Returns the value of field boughtOn
     *
     * @return string
     */
    public function getBoughtOn()
    {
        return $this->boughtOn;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("sams");
        $this->setSource("farm_supplies");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'farm_supplies';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return FarmSupplies[]|FarmSupplies|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return FarmSupplies|\Phalcon\Mvc\Model\ResultInterface
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
            'vendor_id' => 'vendorId',
            'farmer_crop_id' => 'farmerCropId',
            'name' => 'name',
            'units' => 'units',
            'cost' => 'cost',
            'bought_on' => 'boughtOn'
        ];
    }

}
