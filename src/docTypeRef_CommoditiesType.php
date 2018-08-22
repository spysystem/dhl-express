<?php

namespace DHLExpress;

class docTypeRef_CommoditiesType
{

	/**
	 * @var NumberOfPieces $NumberOfPieces
	 */
	protected $NumberOfPieces = null;

	/**
	 * @var Description $Description
	 */
	protected $Description = null;

	/**
	 * @var CountryOfManufacture $CountryOfManufacture
	 */
	protected $CountryOfManufacture = null;

	/**
	 * @var Quantity $Quantity
	 */
	protected $Quantity = null;

	/**
	 * @var UnitPrice $UnitPrice
	 */
	protected $UnitPrice = null;

	/**
	 * @var CustomsValue $CustomsValue
	 */
	protected $CustomsValue = null;

	/**
	 * @var USFilingTypeValue $USFilingTypeValue
	 */
	protected $USFilingTypeValue = null;

	/**
	 * @param Description $Description
	 */
	public function __construct($Description)
	{
		$this->Description = $Description;
	}

	/**
	 * @return NumberOfPieces
	 */
	public function getNumberOfPieces()
	{
		return $this->NumberOfPieces;
	}

	/**
	 * @param NumberOfPieces $NumberOfPieces
	 * @return \DHLExpress\docTypeRef_CommoditiesType
	 */
	public function setNumberOfPieces($NumberOfPieces)
	{
		$this->NumberOfPieces = $NumberOfPieces;
		return $this;
	}

	/**
	 * @return Description
	 */
	public function getDescription()
	{
		return $this->Description;
	}

	/**
	 * @param Description $Description
	 * @return \DHLExpress\docTypeRef_CommoditiesType
	 */
	public function setDescription($Description)
	{
		$this->Description = $Description;
		return $this;
	}

	/**
	 * @return CountryOfManufacture
	 */
	public function getCountryOfManufacture()
	{
		return $this->CountryOfManufacture;
	}

	/**
	 * @param CountryOfManufacture $CountryOfManufacture
	 * @return \DHLExpress\docTypeRef_CommoditiesType
	 */
	public function setCountryOfManufacture($CountryOfManufacture)
	{
		$this->CountryOfManufacture = $CountryOfManufacture;
		return $this;
	}

	/**
	 * @return Quantity
	 */
	public function getQuantity()
	{
		return $this->Quantity;
	}

	/**
	 * @param Quantity $Quantity
	 * @return \DHLExpress\docTypeRef_CommoditiesType
	 */
	public function setQuantity($Quantity)
	{
		$this->Quantity = $Quantity;
		return $this;
	}

	/**
	 * @return UnitPrice
	 */
	public function getUnitPrice()
	{
		return $this->UnitPrice;
	}

	/**
	 * @param UnitPrice $UnitPrice
	 * @return \DHLExpress\docTypeRef_CommoditiesType
	 */
	public function setUnitPrice($UnitPrice)
	{
		$this->UnitPrice = $UnitPrice;
		return $this;
	}

	/**
	 * @return CustomsValue
	 */
	public function getCustomsValue()
	{
		return $this->CustomsValue;
	}

	/**
	 * @param CustomsValue $CustomsValue
	 * @return \DHLExpress\docTypeRef_CommoditiesType
	 */
	public function setCustomsValue($CustomsValue)
	{
		$this->CustomsValue = $CustomsValue;
		return $this;
	}

	/**
	 * @return USFilingTypeValue
	 */
	public function getUSFilingTypeValue()
	{
		return $this->USFilingTypeValue;
	}

	/**
	 * @param USFilingTypeValue $USFilingTypeValue
	 * @return \DHLExpress\docTypeRef_CommoditiesType
	 */
	public function setUSFilingTypeValue($USFilingTypeValue)
	{
		$this->USFilingTypeValue = $USFilingTypeValue;
		return $this;
	}

}
